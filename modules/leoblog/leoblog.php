<?php
/**
 *  Leo Theme for Prestashop 1.6.x
 *
 * @author    http://www.leotheme.com
 * @copyright Copyright (C) October 2013 LeoThemes.com <@emai:leotheme@gmail.com>
 *               <info@leotheme.com>.All rights reserved.
 * @license   GNU General Public License version 2
 */

if (!defined('_PS_VERSION_')) {
    # module validation
    exit;
}

include_once(_PS_MODULE_DIR_.'leoblog/loader.php');

class Leoblog extends Module
{
    private static $leo_xml_fields = array('title', 'guid', 'description', 'author', 'comments', 'pubDate', 'source', 'link', 'content');
    public $base_config_url;
	private $_html = '';

    public function __construct()
    {
        $currentIndex = '';

        $this->name = 'leoblog';
        $this->tab = 'front_office_features';
        $this->version = '3.0.0';
        $this->author = 'LeoTheme';
        $this->controllers = array('blog', 'category', 'list');
        $this->need_instance = 0;
        $this->bootstrap = true;

        $this->secure_key = Tools::encrypt($this->name);

        parent::__construct();

        $this->base_config_url = $currentIndex.'&configure='.$this->name.'&token='.Tools::getValue('token');
        $this->displayName = $this->l('Leo Blog Management');
        $this->description = $this->l('Manage Blog Content');
				
    }

    /**
     * Uninstall
     */
    private function uninstallModuleTab($class_sfx = '')
    {
        $tab_class = 'Admin'.Tools::ucfirst($this->name).Tools::ucfirst($class_sfx);

        $id_tab = Tab::getIdFromClassName($tab_class);
        if ($id_tab != 0) {
            $tab = new Tab($id_tab);
            $tab->delete();
            return true;
        }
        return false;
    }

    /**
     * Install Module Tabs
     */
    private function installModuleTab($title, $class_sfx = '', $parent = '')
    {
        $class = 'Admin'.Tools::ucfirst($this->name).Tools::ucfirst($class_sfx);
        @copy(_PS_MODULE_DIR_.$this->name.'/logo.gif', _PS_IMG_DIR_.'t/'.$class.'.gif');
        if ($parent == '') {
            # validate module
            $position = Tab::getCurrentTabId();
        } else {
            # validate module
            $position = Tab::getIdFromClassName($parent);
        }

        $tab1 = new Tab();
        $tab1->class_name = $class;
        $tab1->module = $this->name;
        $tab1->id_parent = (int)$position;
        $langs = Language::getLanguages(false);
        foreach ($langs as $l) {
            # validate module
            $tab1->name[$l['id_lang']] = $title;
        }
//        $id_tab1 = $tab1->add(true, false);
        $tab1->add(true, false);
    }

    /**
     * @see Module::install()
     */
    public function install()
    {
        /* Adds Module */
        if (parent::install() && $this->registerLeoHook())
        {
            $res = true;

            Configuration::updateValue('LEOBLOG_CATEORY_MENU', 1);
			Configuration::updateValue('LEOBLOG_IMAGE_TYPE', 'jpg');
			
			Configuration::updateValue('LEOBLOG_DASHBOARD_DEFAULTTAB', '#fieldset_0');
            /* Creates tables */
            $res &= $this->createTables();
            
            Configuration::updateValue('AP_INSTALLED_LEOBLOG', '1');
            //DONGND: check thumb column, if not exist auto add
            if(Db::getInstance()->executeS('SHOW TABLES LIKE \'%leoblog_blog%\'') && count(Db::getInstance()->executes('SELECT "thumb" FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = "'._DB_NAME_.'" AND TABLE_NAME = "'._DB_PREFIX_.'leoblog_blog" AND COLUMN_NAME = "thumb"'))<1)
            {           
                Db::getInstance()->execute('ALTER TABLE `'._DB_PREFIX_.'leoblog_blog` ADD `thumb` varchar(255) DEFAULT NULL');
            }
            
            // $this->registerHook('header'); # remove code in 2016
            $id_parent = Tab::getIdFromClassName('IMPROVE');
            
            $class = 'Admin'.Tools::ucfirst($this->name).'Management';
            $tab1 = new Tab();
            $tab1->class_name = $class;
            $tab1->module = $this->name;
            $tab1->id_parent = $id_parent;
            $langs = Language::getLanguages(false);
            foreach ($langs as $l) {
                # validate module
                $tab1->name[$l['id_lang']] = $this->l('Leo Blog Management');
            }
//            $id_tab1 = $tab1->add(true, false);
            $tab1->add(true, false);
			
			# insert icon for tab
			Db::getInstance()->execute(' UPDATE `'._DB_PREFIX_.'tab` SET `icon` = "create" WHERE `id_tab` = "'.(int)$tab1->id.'"');
			
            $this->installModuleTab('Blog Dashboard', 'dashboard', 'AdminLeoblogManagement');
            $this->installModuleTab('Categories Management', 'categories', 'AdminLeoblogManagement');
            $this->installModuleTab('Blogs Management', 'blogs', 'AdminLeoblogManagement');
            $this->installModuleTab('Comment Management', 'comments', 'AdminLeoblogManagement');
			$this->installModuleTab('Leo Blog Configuration', 'module', 'AdminLeoblogManagement');
			
			//DONGND:: move image folder from module to theme
			$this->moveImageFolder();
			
            return (bool)$res;
        }
        return false;
    }

    public function hookDisplayBackOfficeHeader()
    {
        if (file_exists(_PS_THEME_DIR_.'css/modules/leoblog/assets/admin/blogmenu.css')) {
            $this->context->controller->addCss($this->_path.'assets/admin/blogmenu.css');
        } else {
            $this->context->controller->addCss($this->_path.'css/admin/blogmenu.css');
        }
    }

    public function getContent()
    {
        if (Tools::isSubmit('submitBlockCategories')) {
            # validate module
            Configuration::updateValue('LEOBLOG_CATEORY_MENU', (int)Tools::getValue('LEOBLOG_CATEORY_MENU'));
			Configuration::updateValue('LEOBLOG_IMAGE_TYPE', Tools::getValue('LEOBLOG_IMAGE_TYPE'));
        }
		//DONGND:: correct module
		if(Tools::getValue('correctmodule'))
		{
			$this->correctModule();
		}
		
		if (Tools::getValue('success'))
		{			
			switch (Tools::getValue('success'))
			{				
				case 'correct':
					$this->_html .= $this->displayConfirmation($this->l('Correct Module is successful'));					
					break;
			}
		}
		$this->_html .= '<div class="panel form-horizontal">
							<div class="form-group">					
								<div class="col-lg-1">
									<a class="megamenu-correct-module btn btn-success" href="'.$this->context->link->getAdminLink('AdminModules').'&configure=leoblog&success=correct&correctmodule=1">
										<i class="icon-AdminParentPreferences"></i>'.$this->l('Correct module').'
									</a>
								</div>
								<label class="control-label col-lg-3">* '.$this->l('Please backup the database before run correct module to safe').'</label>							
							</div>
						</div>';
        return $this->_html.$this->renderForm();
    }

    public function getTreeForApPageBuilder($selected)
    {
        $cat = new Leoblogcat();
        return $cat->getTreeForApPageBuilder($selected);
    }

    public function renderForm()
    {
        $fields_form = array(
            'form' => array(
                'legend' => array(
                    'title' => $this->l('Settings'),
                    'icon' => 'icon-cogs'
                ),
                'input' => array(
                    array(
                        'type' => 'switch',
                        'label' => $this->l('Enable Categories Tree Block'),
                        'name' => 'LEOBLOG_CATEORY_MENU',
                        'desc' => $this->l('Activate  The Module.'),
                        'values' => array(
                            array(
                                'id' => 'active_on',
                                'value' => 1,
                                'label' => $this->l('Enabled')
                            ),
                            array(
                                'id' => 'active_off',
                                'value' => 0,
                                'label' => $this->l('Disabled')
                            )
                        ),
                    ),
					array(
						'type' => 'select',
						'label' => $this->l('Image type'),
						'name' => 'LEOBLOG_IMAGE_TYPE',						
						'options' => array(
							'query' => array(
								array(
									'id' => 'jpg',
									'name' => $this->l('jpg')
								),
								array(
									'id' => 'png',
									'name' => $this->l('png')
								),
							),
							'id' => 'id',
							'name' => 'name'
						),
						'desc' => $this->l('For images png type. Keep png type or optimize to jpg type'),
					)
                ),
                'submit' => array(
                    'title' => $this->l('Save'),
                    'class' => 'btn btn-default')
            ),
        );

        $helper = new HelperForm();
        $helper->show_toolbar = false;
        $helper->table = $this->table;
        $lang = new Language((int)Configuration::get('PS_LANG_DEFAULT'));
        $helper->default_form_language = $lang->id;
        $helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') ? Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') : 0;
        $helper->identifier = $this->identifier;
        $helper->submit_action = 'submitBlockCategories';
        $helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false).'&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        $helper->tpl_vars = array(
            'fields_value' => $this->getConfigFieldsValues(),
            'languages' => $this->context->controller->getLanguages(),
            'id_language' => $this->context->language->id
        );

        return $helper->generateForm(array($fields_form));
    }

    public function getConfigFieldsValues()
    {
        return array(
            'LEOBLOG_CATEORY_MENU' => Tools::getValue('LEOBLOG_CATEORY_MENU', Configuration::get('LEOBLOG_CATEORY_MENU')),
			'LEOBLOG_IMAGE_TYPE' => Tools::getValue('LEOBLOG_IMAGE_TYPE', Configuration::get('LEOBLOG_IMAGE_TYPE')),
			
        );
    }

    public function _prepareHook()
    {
        $helper = LeoBlogHelper::getInstance();

        $category = new Leoblogcat(Tools::getValue('id_leoblogcat'), $this->context->language->id);

        $tree = $category->getFrontEndTree((int)$category->id_leoblogcat > 1 ? $category->id_leoblogcat : 1, $helper);
        $this->smarty->assign('tree', $tree);
        if ($category->id_leoblogcat) {
            # validate module
            $this->smarty->assign('currentCategory', $category);
        }

        return true;
    }

    public function hookDisplayHeader()
    {
        if (file_exists(_PS_THEME_DIR_.'css/modules/leoblog/assets/leoblog.css')) {
            $this->context->controller->addCSS(($this->_path).'assets/leoblog.css', 'all');
        } else {
            $this->context->controller->addCSS(($this->_path).'css/leoblog.css', 'all');
        }
    }

    public function hookLeftColumn()
    {
        //$html ="";
        //$config = LeoBlogConfig::getInstance();
        //$en_rss = $config->get('indexation');
        //if($en_rss && $en_rss == 1)
        //$html .=  $this->hookRSS($params);
        if (Configuration::get('LEOBLOG_CATEORY_MENU') && $this->_prepareHook()) {
            return $this->display(__FILE__, 'views/templates/hook/categories_menu.tpl');
        } else {
            return false;
        }
    }
    /*
      function hookRSS($params)
      {
      if (!$this->isCached('leoblogrss.tpl', $cacheId))
      {
      // Getting data
      $config = LeoBlogConfig::getInstance();
      $title = strval($config->get('rss_title_item', 'RSS FEED'));
      $url = Tools::htmlentitiesutf8('http://'.$_SERVER['HTTP_HOST'].__PS_BASE_URI__).'modules/leoblog/rss.php';
      $nb = (int)$config->get('rss_limit_item', 1);
      $cacheId = $this->getCacheId($this->name.'-'.date("YmdH"));
      $rss_links = array();
      if ($url && ($contents = Tools::file_get_contents($url)))
      try
      {
      if (@$src = new XML_Feed_Parser($contents))
      for ($i = 0; $i < ($nb ? $nb : 5); $i++)
      if (@$item = $src->getEntryByOffset($i))
      {
      $xmlValues = array();
      foreach(self::$leo_xml_fields as $xmlField)
      $xmlValues[$xmlField] = $item->__get($xmlField);
      $xmlValues['enclosure'] = $item->getEnclosure();
      # Compatibility
      $xmlValues['url'] = $xmlValues['link'];
      $rss_links[] = $xmlValues;
      }
      }
      catch (XML_Feed_Parser_Exception $e)
      {
      Tools::dieOrLog(sprintf($this->l('Error: invalid RSS feed in "leoblogrss" module: %s'), $e->getMessage()), false);
      }

      // Display smarty
      $this->smarty->assign(array('title' => ($title ? $title : $this->l('RSS feed')), 'rss_links' => $rss_links));
      }

      return $this->display(__FILE__, 'views/templates/hook/leoblogrss.tpl', $cacheId);
      }
     */

    protected function getCacheId($name = null)
    {
        $name = ($name ? $name.'|' : '').implode('-', Customer::getGroupsStatic($this->context->customer->id));
        return parent::getCacheId($name);
    }

    public function hookRightcolumn($params)
    {
        return $this->hookLeftColumn($params);
    }

    /**
     * @see Module::uninstall()
     */
    public function uninstall()
    {
        if (parent::uninstall()) {
            $res = true;

            $this->uninstallModuleTab('management');
            $this->uninstallModuleTab('dashboard');
            $this->uninstallModuleTab('categories');
            $this->uninstallModuleTab('blogs');
            $this->uninstallModuleTab('comments');
            $this->uninstallModuleTab('module');
            
            $res &= $this->deleteTables();
            $this->deleteConfiguration();

            return (bool)$res;
        }
        return false;
    }

    public function deleteTables()
    {
        return Db::getInstance()->execute('
            DROP TABLE IF EXISTS
            `'._DB_PREFIX_.'leoblogcat`,
            `'._DB_PREFIX_.'leoblogcat_lang`,
            `'._DB_PREFIX_.'leoblogcat_shop`,
            `'._DB_PREFIX_.'leoblog_comment`,
            `'._DB_PREFIX_.'leoblog_blog`,
            `'._DB_PREFIX_.'leoblog_blog_lang`,
            `'._DB_PREFIX_.'leoblog_blog_shop`');
    }

    public function deleteConfiguration()
    {
        Configuration::deleteByName('LEOBLOG_CATEORY_MENU');
		Configuration::deleteByName('LEOBLOG_IMAGE_TYPE');
		
        Configuration::deleteByName('LEOBLOG_DASHBOARD_DEFAULTTAB');
        Configuration::deleteByName('LEOBLOG_CFG_GLOBAL');
        return true;
    }

    /**
     * Creates tables
     */
    protected function createTables()
    {
        if ($this->_installDataSample()) {
            return true;
        }
        $res = 1;
        include_once( dirname(__FILE__).'/install/install.php' );
        return $res;
    }

    private function _installDataSample()
    {
        if (!file_exists(_PS_MODULE_DIR_.'appagebuilder/libs/LeoDataSample.php')) {
            return false;
        }
        require_once( _PS_MODULE_DIR_.'appagebuilder/libs/LeoDataSample.php' );

        $sample = new Datasample(1);
        return $sample->processImport($this->name);
    }

    protected function installSample()
    {
        $res = 1;
        include_once( dirname(__FILE__).'/install/sample.php' );
        return $res;
    }

//    public function hookDisplayNav($params)
//    {
//        return $this->hookDisplayTop($params);
//    }

    /**
     * Show correct re_write url on BlockLanguage module
     * http://ps_1609_test/vn/index.php?controller=blog?id=9&fc=module&module=leoblog
     * 	$default_rewrite = array(
      '1' => 'http://ps_1609_test/en/blog/lang-en-b9.html',
      '2' => 'http://ps_1609_test/vn/blog/lang-vn-b9.html',
      '3' => 'http://ps_1609_test/cb/blog/lang-cb-b9.html',
      );
     * 
     */
    public function hookDisplayBanner()
    {
        if (Module::isEnabled('blocklanguages')) {
            $default_rewrite = array();
            $module = Validate::isModuleName(Tools::getValue('module')) ? Tools::getValue('module') : '';
            $controller = Tools::getValue('controller');
            if ($module == 'leoblog' && $controller == 'blog' && ($id_blog = (int)Tools::getValue('id'))) {
                $languages = Language::getLanguages(true, $this->context->shop->id);
                if (!count($languages)) {
                    return false;
                }
                $link = new Link();

                foreach ($languages as $lang) {
                    $config = LeoBlogConfig::getInstance();
                    $config->cur_id_lang = $lang['id_lang'];

                    $cur_key = 'link_rewrite'.'_'.Context::getContext()->language->id;
                    $cur_prefix = '/'.$config->cur_prefix_rewrite = $config->get($cur_key, 'blog').'/';

                    $other_key = 'link_rewrite'.'_'.$lang['id_lang'];
                    $other_prefix = '/'.$config->cur_prefix_rewrite = $config->get($other_key, 'blog').'/';

                    $blog = new LeoBlogBlog($id_blog, $lang['id_lang']);
                    $temp_link = $link->getModuleLink($module, $controller, array('id' => $id_blog, 'rewrite' => $blog->link_rewrite), null, $lang['id_lang']);
                    $default_rewrite[$lang['id_lang']] = str_replace($cur_prefix, $other_prefix, $temp_link);
//					$default_rewrite[$lang['id_lang']] = $link->getModuleLink($module, $controller, array('id'=>$id_blog, 'rewrite'=>$blog->link_rewrite), null, $lang['id_lang']);
                }
            } elseif ($module == 'leoblog' && $controller == 'category' && ($id_blog = (int)Tools::getValue('id'))) {
                $languages = Language::getLanguages(true, $this->context->shop->id);
                if (!count($languages)) {
                    return false;
                }
                $link = new Link();

                foreach ($languages as $lang) {
                    $config = LeoBlogConfig::getInstance();
                    $config->cur_id_lang = $lang['id_lang'];

                    $cur_key = 'link_rewrite'.'_'.Context::getContext()->language->id;
                    $cur_prefix = '/'.$config->cur_prefix_rewrite = $config->get($cur_key, 'blog').'/';

                    $other_key = 'link_rewrite'.'_'.$lang['id_lang'];
                    $other_prefix = '/'.$config->cur_prefix_rewrite = $config->get($other_key, 'blog').'/';

                    $blog = new Leoblogcat($id_blog, $lang['id_lang']);
                    $temp_link = $link->getModuleLink($module, $controller, array('id' => $id_blog, 'rewrite' => $blog->link_rewrite), null, $lang['id_lang']);
                    $default_rewrite[$lang['id_lang']] = str_replace($cur_prefix, $other_prefix, $temp_link);
//					$default_rewrite[$lang['id_lang']] = $link->getModuleLink($module, $controller, array('id'=>$id_blog, 'rewrite'=>$blog->link_rewrite), null, $lang['id_lang']);
                }
            } elseif ($module == 'leoblog' && $controller == 'list') {
                $languages = Language::getLanguages(true, $this->context->shop->id);
                if (!count($languages)) {
                    return false;
                }
                $link = new Link();

                foreach ($languages as $lang) {
                    $config = LeoBlogConfig::getInstance();
                    $config->cur_id_lang = $lang['id_lang'];

                    $cur_key = 'link_rewrite'.'_'.Context::getContext()->language->id;
                    $cur_prefix = '/'.$config->cur_prefix_rewrite = $config->get($cur_key, 'blog').'';

                    $other_key = 'link_rewrite'.'_'.$lang['id_lang'];
                    $other_prefix = '/'.$config->cur_prefix_rewrite = $config->get($other_key, 'blog').'';

                    $temp_link = $link->getModuleLink($module, $controller, array(), null, $lang['id_lang']);
                    $default_rewrite[$lang['id_lang']] = str_replace($cur_prefix, $other_prefix, $temp_link);
                }
            }

            $this->context->smarty->assign('lang_leo_rewrite_urls', $default_rewrite);
        }
    }

    /**
     * Hook Display Top
     */
//    public function hookDisplayTop($params)
//    {
//        $params = array();
//        $link = LeoBlogHelper::getInstance()->getFontBlogLink();
//        $config = LeoBlogConfig::getInstance();
//
//        return '<div class="topbar-box"><a href="'.$link.'">'.$config->get('blog_link_title_'.$this->context->language->id, 'Blog').'</a></div>';
//    }

    /**
     * Hook ModuleRoutes
     */
    public function hookModuleRoutes($route = '', $detail = array())
    {
        $config = LeoBlogConfig::getInstance();
        $routes = array();

        $routes['module-leoblog-list'] = array(
            'controller' => 'list',
            'rule' => _LEO_BLOG_REWRITE_ROUTE_.'.html',
            'keywords' => array(
            ),
            'params' => array(
                'fc' => 'module',
                'module' => 'leoblog'
            )
        );
		
        if( $config->get('url_use_id', 1))
        {
            // URL HAVE ID
            $routes['module-leoblog-blog'] = array(
                'controller' => 'blog',
                'rule' => _LEO_BLOG_REWRITE_ROUTE_.'/{rewrite}-b{id}.html',
                'keywords' => array(
                    'id' => array('regexp' => '[0-9]+', 'param' => 'id'),
                    'rewrite' => array('regexp' => '[_a-zA-Z0-9-\pL]*', 'param' => 'rewrite'),
                ),
                'params' => array(
                    'fc' => 'module',
                    'module' => 'leoblog',
					
                )
            );

            $routes['module-leoblog-category'] = array(
                'controller' => 'category',
                'rule' => _LEO_BLOG_REWRITE_ROUTE_.'/{rewrite}-c{id}.html',
                'keywords' => array(
                    'id' => array('regexp' => '[0-9]+', 'param' => 'id'),
                    'rewrite' => array('regexp' => '[_a-zA-Z0-9-\pL]*', 'param' => 'rewrite'),
                ),
                'params' => array(
                    'fc' => 'module',
                    'module' => 'leoblog',
							
                )
            );
        }else{
            // REMOVE ID FROM URL
            $category_rewrite = 'category_rewrite'.'_'.Context::getContext()->language->id;
            $category_rewrite = $config->get($category_rewrite, 'category');
            $detail_rewrite = 'detail_rewrite'.'_'.Context::getContext()->language->id;
            $detail_rewrite = $config->get($detail_rewrite, 'detail');

            $routes['module-leoblog-blog'] = array(
                'controller' => 'blog',
                'rule' => _LEO_BLOG_REWRITE_ROUTE_.'/'.$detail_rewrite.'/{rewrite}.html',
                'keywords' => array(
                    'id' => array('regexp' => '[0-9]+', 'param' => 'id'),
                    'rewrite' => array('regexp' => '[_a-zA-Z0-9-\pL]*', 'param' => 'rewrite'),
                ),
                'params' => array(
                    'fc' => 'module',
                    'module' => 'leoblog',
                )
            );

            $routes['module-leoblog-category'] = array(
                'controller' => 'category',
                'rule' => _LEO_BLOG_REWRITE_ROUTE_.'/'.$category_rewrite.'/{rewrite}.html',
                'keywords' => array(
                    'id' => array('regexp' => '[0-9]+', 'param' => 'id'),
                    'rewrite' => array('regexp' => '[_a-zA-Z0-9-\pL]*', 'param' => 'rewrite'),
                ),
                'params' => array(
                    'fc' => 'module',
                    'module' => 'leoblog',
                )
            );
        }
        return $routes;
    }

    /**
     * Get lastest blog for ApPageBuilder module
     * @param type $params
     * @return type
     */
    public function getBlogsFont($params)
    {
        $config = LeoBlogConfig::getInstance();
        $id_categories = '';
        if (isset($params['chk_cat'])) {
            # validate module
            $id_categories = $params['chk_cat'];
        }
        $order_by = isset($params['order_by']) ? $params['order_by'] : 'id_leoblog_blog';
        $order_way = isset($params['order_way']) ? $params['order_way'] : 'DESC';
        $helper = LeoBlogHelper::getInstance();
        $limit = (int)$params['nb_blogs'];
        $blogs = LeoBlogBlog::getListBlogsForApPageBuilder($id_categories, $this->context->language->id, $limit, $order_by, $order_way, array(), true);
        $authors = array();
        $image_w = (int)$config->get('listing_leading_img_width', 690);
        $image_h = (int)$config->get('listing_leading_img_height', 300);
        foreach ($blogs as $key => &$blog) {
            $blog = LeoBlogHelper::buildBlog($helper, $blog, $image_w, $image_h, $config, true);
            if ($blog['id_employee']) {
                if (!isset($authors[$blog['id_employee']])) {
                    $authors[$blog['id_employee']] = new Employee($blog['id_employee']);
                }
                $blog['author'] = $authors[$blog['id_employee']]->firstname.' '.$authors[$blog['id_employee']]->lastname;
                $blog['author_link'] = $helper->getBlogAuthorLink($authors[$blog['id_employee']]->id);
            } else {
                $blog['author'] = '';
                $blog['author_link'] = '';
            }
            unset($key); # validate module
        }
        return $blogs;
    }
	
	/**
     * Run only one when install/change Theme_of_Leo
     */
    public function hookActionAdminBefore()
    {
        $this->unregisterHook('actionAdminBefore');
        
        # FIX : update Prestashop by 1-Click module -> NOT NEED RESTORE DATABASE
        $ap_version = Configuration::get('AP_CURRENT_VERSION');
        if($ap_version != false)
        {
            $ps_version = Configuration::get('PS_VERSION_DB');
            $versionCompare =  version_compare($ap_version, $ps_version);
            if ($versionCompare != 0) {
                // Just update Prestashop
                Configuration::updateValue('AP_CURRENT_VERSION', $ps_version);
                return;
            }
        }
        
        
        # WHENE INSTALL THEME, INSERT HOOK FROM DATASAMPLE IN THEME
        $hook_from_theme = false;
        if (file_exists(_PS_MODULE_DIR_.'appagebuilder/libs/LeoDataSample.php')) {
            require_once( _PS_MODULE_DIR_.'appagebuilder/libs/LeoDataSample.php' );
            $sample = new Datasample();
            if($sample->processHook($this->name)){
                $hook_from_theme = true;
            };
        }
        
        # INSERT HOOK FROM MODULE_DATASAMPLE
        if($hook_from_theme == false){
            $this->registerLeoHook();
        }
        
        # WHEN INSTALL MODULE, NOT NEED RESTORE DATABASE IN THEME
        $install_module = (int)Configuration::get('AP_INSTALLED_LEOBLOG', 0);
        if($install_module)
        {
            Configuration::updateValue('AP_INSTALLED_LEOBLOG', '0');    // next : allow restore sample
            return;
        }
        
        # INSERT DATABASE FROM THEME_DATASAMPLE
        if (file_exists(_PS_MODULE_DIR_.'appagebuilder/libs/LeoDataSample.php')) {
            require_once( _PS_MODULE_DIR_.'appagebuilder/libs/LeoDataSample.php' );
            $sample = new Datasample();
            $sample->processImport($this->name);
        }
    }
	
	/**
     * Common method
     * Resgister all hook for module
     */
    public function registerLeoHook()
    {
        $res = true;        
        $res &= $this->registerHook('header');
//        $res &= $this->registerHook('top');            
        $res &= $this->registerHook('leftColumn');
        $res &= $this->registerHook('moduleRoutes');
        $res &= $this->registerHook('displayBackOfficeHeader');
        # Multishop create new shop
        $res &= $this->registerHook('actionAdminShopControllerSaveAfter');
		
        return $res;
        
    }
	
	public function correctModule()
	{
		//DONGND:: check thumb column, if not exist auto add
		if(Db::getInstance()->executeS('SHOW TABLES LIKE \'%leoblog_blog%\'') && count(Db::getInstance()->executes('SELECT "thumb" FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = "'._DB_NAME_.'" AND TABLE_NAME = "'._DB_PREFIX_.'leoblog_blog" AND COLUMN_NAME = "thumb"'))<1)
		{			
			Db::getInstance()->execute('ALTER TABLE `'._DB_PREFIX_.'leoblog_blog` ADD `thumb` varchar(255) DEFAULT NULL');
		}
		
		
		//DONGND:: check author name column, if not exist auto add
		// Db::getInstance()->execute('ALTER TABLE `'._DB_PREFIX_.'leoblog_blog` ADD `author_name` varchar(255) DEFAULT NULL');			
		if(Db::getInstance()->executeS('SHOW TABLES LIKE \'%leoblog_blog%\'') && count(Db::getInstance()->executes('SELECT "author_name" FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = "'._DB_NAME_.'" AND TABLE_NAME = "'._DB_PREFIX_.'leoblog_blog" AND COLUMN_NAME = "author_name"'))<1)
		{	
			Db::getInstance()->execute('ALTER TABLE `'._DB_PREFIX_.'leoblog_blog` ADD `author_name` varchar(255) DEFAULT NULL');
			
		}
		
		if (!is_dir(_PS_THEME_DIR_.'assets/img/modules/leoblog')) {
			$this->moveImageFolder();
		}
	}
	
	//DONGND:: move image folder from module to theme
	public function moveImageFolder()
	{
		//DONGND:: copy image from module to theme
		if (!file_exists(_PS_THEME_DIR_.'assets/img/index.php')) {
			@copy(_LEOBLOG_BLOG_IMG_DIR_.'index.php', _PS_THEME_DIR_.'assets/img/index.php');
		}
		
		if (!is_dir(_PS_THEME_DIR_.'assets/img/modules')) {		
			mkdir(_PS_THEME_DIR_.'assets/img/modules', 0777, true);
		}
		
		if (!file_exists(_PS_THEME_DIR_.'assets/img/modules/index.php')) {
			@copy(_LEOBLOG_BLOG_IMG_DIR_.'index.php', _PS_THEME_DIR_.'assets/img/modules/index.php');
		}
		
		if (!is_dir(_PS_THEME_DIR_.'assets/img/modules/leoblog')) {		
			mkdir(_PS_THEME_DIR_.'assets/img/modules/leoblog', 0777, true);
		}
		
		if (!file_exists(_PS_THEME_DIR_.'assets/img/modules/leoblog/index.php')) {
			@copy(_LEOBLOG_BLOG_IMG_DIR_.'index.php', _PS_THEME_DIR_.'assets/img/modules/leoblog/index.php');
		}
		
		if (!is_dir(_PS_THEME_DIR_.'assets/img/modules/leoblog/sample')) {		
			mkdir(_PS_THEME_DIR_.'assets/img/modules/leoblog/sample', 0777, true);
			
			mkdir(_PS_THEME_DIR_.'assets/img/modules/leoblog/sample/b', 0777, true);
			mkdir(_PS_THEME_DIR_.'assets/img/modules/leoblog/sample/c', 0777, true);
			
			if (is_dir(_LEOBLOG_BLOG_IMG_DIR_.'b') && is_dir(_PS_THEME_DIR_.'assets/img/modules/leoblog/sample/b')) {
				$objects_b = scandir(_LEOBLOG_BLOG_IMG_DIR_.'b');				
				$objects_theme_b = scandir(_PS_THEME_DIR_.'assets/img/modules/leoblog/sample/b');
				if (count($objects_b) > 2 && count($objects_theme_b) <= 2)
				{
					foreach ($objects_b as $objects_b_val) {
						if ($objects_b_val != '.' && $objects_b_val != '..') {
							if (filetype(_LEOBLOG_BLOG_IMG_DIR_.'b'.'/'.$objects_b_val) == 'file') {
								@copy(_LEOBLOG_BLOG_IMG_DIR_.'b'.'/'.$objects_b_val, _PS_THEME_DIR_.'assets/img/modules/leoblog/sample/b/'.$objects_b_val);
							}
						}
					}
					
				}
			}
			
			if (is_dir(_LEOBLOG_BLOG_IMG_DIR_.'c') && is_dir(_PS_THEME_DIR_.'assets/img/modules/leoblog/sample/c')) {
				$objects_c = scandir(_LEOBLOG_BLOG_IMG_DIR_.'c');				
				$objects_theme_c = scandir(_PS_THEME_DIR_.'assets/img/modules/leoblog/sample/c');
				if (count($objects_c) > 2 && count($objects_theme_c) <= 2)
				{
					foreach ($objects_c as $objects_c_val) {
						if ($objects_c_val != '.' && $objects_c_val != '..') {
							if (filetype(_LEOBLOG_BLOG_IMG_DIR_.'c'.'/'.$objects_c_val) == 'file') {
								@copy(_LEOBLOG_BLOG_IMG_DIR_.'c'.'/'.$objects_c_val, _PS_THEME_DIR_.'assets/img/modules/leoblog/sample/c/'.$objects_c_val);
							}
						}
					}
					
				}
			}
			
		}
		
		if (!file_exists(_PS_THEME_DIR_.'assets/img/modules/leoblog/sample/index.php')) {
			@copy(_LEOBLOG_BLOG_IMG_DIR_.'index.php', _PS_THEME_DIR_.'assets/img/modules/leoblog/sample/index.php');
		}
		
		// if (!is_dir(_PS_THEME_DIR_.'assets/img/modules/leoblog/b')) {		
			// mkdir(_PS_THEME_DIR_.'assets/img/modules/leoblog/b', 0777, true);
		// }
		
		// if (!file_exists(_PS_THEME_DIR_.'assets/img/modules/leoblog/b/index.php')) {
			// @copy(_LEOBLOG_BLOG_IMG_DIR_.'index.php', _PS_THEME_DIR_.'assets/img/modules/leoblog/b/index.php');
		// }
		
		// if (!is_dir(_PS_THEME_DIR_.'assets/img/modules/leoblog/c')) {		
			// mkdir(_PS_THEME_DIR_.'assets/img/modules/leoblog/c', 0777, true);
		// }
		
		// if (!file_exists(_PS_THEME_DIR_.'assets/img/modules/leoblog/c/index.php')) {
			// @copy(_LEOBLOG_BLOG_IMG_DIR_.'index.php', _PS_THEME_DIR_.'assets/img/modules/leoblog/c/index.php');
		// }
		
		//DONGND:: get list id_shop from database of blog
		$list_id_shop = Db::getInstance()->executes('SELECT `id_shop` FROM `'._DB_PREFIX_.'leoblog_blog_shop` GROUP BY `id_shop`');
			
		if (count($list_id_shop) > 0)
		{
			foreach ($list_id_shop as $list_id_shop_val)
			{
				if (!is_dir(_PS_THEME_DIR_.'assets/img/modules/leoblog/'.$list_id_shop_val['id_shop'])) {		
					mkdir(_PS_THEME_DIR_.'assets/img/modules/leoblog/'.$list_id_shop_val['id_shop'], 0777, true);
					
					@copy(_LEOBLOG_BLOG_IMG_DIR_.'index.php', _PS_THEME_DIR_.'assets/img/modules/leoblog/'.$list_id_shop_val['id_shop'].'/index.php');
					
					mkdir(_PS_THEME_DIR_.'assets/img/modules/leoblog/'.$list_id_shop_val['id_shop'].'/b', 0777, true);
					
					mkdir(_PS_THEME_DIR_.'assets/img/modules/leoblog/'.$list_id_shop_val['id_shop'].'/c', 0777, true);
					
					if (is_dir(_LEOBLOG_BLOG_IMG_DIR_.'b') && is_dir(_PS_THEME_DIR_.'assets/img/modules/leoblog/'.$list_id_shop_val['id_shop'].'/b')) {
						$objects_b = scandir(_LEOBLOG_BLOG_IMG_DIR_.'b');				
						$objects_theme_b = scandir(_PS_THEME_DIR_.'assets/img/modules/leoblog/'.$list_id_shop_val['id_shop'].'/b');
						if (count($objects_b) > 2 && count($objects_theme_b) <= 2)
						{
							foreach ($objects_b as $objects_b_val) {
								if ($objects_b_val != '.' && $objects_b_val != '..') {
									if (filetype(_LEOBLOG_BLOG_IMG_DIR_.'b'.'/'.$objects_b_val) == 'file') {
										@copy(_LEOBLOG_BLOG_IMG_DIR_.'b'.'/'.$objects_b_val, _PS_THEME_DIR_.'assets/img/modules/leoblog/'.$list_id_shop_val['id_shop'].'/b/'.$objects_b_val);
									}
								}
							}
							
						}
					}
					
					if (is_dir(_LEOBLOG_BLOG_IMG_DIR_.'c') && is_dir(_PS_THEME_DIR_.'assets/img/modules/leoblog/'.$list_id_shop_val['id_shop'].'/c')) {
						$objects_c = scandir(_LEOBLOG_BLOG_IMG_DIR_.'c');					
						$objects_theme_c = scandir(_PS_THEME_DIR_.'assets/img/modules/leoblog/'.$list_id_shop_val['id_shop'].'/c');
						if (count($objects_c) > 2 && count($objects_theme_c) <= 2)
						{
							foreach ($objects_c as $objects_c_val) {
								if ($objects_c_val != '.' && $objects_c_val != '..') {
									if (filetype(_LEOBLOG_BLOG_IMG_DIR_.'c'.'/'.$objects_c_val) == 'file') {
										@copy(_LEOBLOG_BLOG_IMG_DIR_.'c'.'/'.$objects_c_val, _PS_THEME_DIR_.'assets/img/modules/leoblog/'.$list_id_shop_val['id_shop'].'/c/'.$objects_c_val);
									}
								}
							}
							
						}
					}
				}				
							
			}
		}
	}
    
    /**
     * @Action Create new shop, choose theme then auto restore datasample.
     */
    public function hookActionAdminShopControllerSaveAfter($param)
    {
        if ( Tools::getIsset('controller') !== false && Tools::getValue('controller') == 'AdminShop'
                && Tools::getIsset('submitAddshop') !== false && Tools::getValue('submitAddshop')
                && Tools::getIsset('theme_name') !== false && Tools::getValue('theme_name')) {
            
            $shop = $param['return'];
            
            if (file_exists(_PS_MODULE_DIR_.'appagebuilder/libs/LeoDataSample.php'))
            {
                require_once( _PS_MODULE_DIR_.'appagebuilder/libs/LeoDataSample.php' );
                $sample = new Datasample();
                LeoBlogHelper::$id_shop = $shop->id;
                $sample->_id_shop = $shop->id;
                $sample->processImport('leoblog');
            }
        }
    }
}
