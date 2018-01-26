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

include_once(_PS_MODULE_DIR_.'leobootstrapmenu/classes/Btmegamenu.php');
include_once(_PS_MODULE_DIR_.'leobootstrapmenu/classes/BtmegamenuGroup.php');
include_once(_PS_MODULE_DIR_.'leobootstrapmenu/libs/Helper.php');

require_once( _PS_MODULE_DIR_.'leobootstrapmenu/classes/widgetbase.php' );
require_once( _PS_MODULE_DIR_.'leobootstrapmenu/classes/widget.php' );

class Leobootstrapmenu extends Module
{
    private $_html = '';
	private $html = '';
    private $configs = '';
    protected $params = null;
    public $_languages;
    public $_defaultFormLanguage;
    public $base_config_url;
    public $widget;
    public $theme_name;
	public $tabs;
	private $current_group = array('id_group' => 0, 'title' => '','group_type' =>'');
	public $group_data = array(
        'id_btmegamenu_group' => '',
        'title' => '',
        'id_shop' => '',
        'hook' => '',
        'active' => '',
        'group_type' => '',
		'show_cavas' => '',
		'type_sub' => '',
        'group_class' => '',
		);
	private $hook_support = array(
        'displayTop',
        'displayNav1',
		'displayNav2',
		'displayNavFullWidth',
        'displayLeftColumn',
        'displayHome',
        'displayRightColumn',
        'displayFooterBefore',
        'displayFooter',
		'displayFooterAfter',
        'displayLeftColumnProduct',
		'displayFooterProduct',
        'displayRightColumnProduct',
		'displayProductButtons',
		'displayReassurance');

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->name = 'leobootstrapmenu';
        $this->tab = 'front_office_features';
        $this->version = '4.0.0';
        $this->author = 'LeoTheme';
        $this->need_instance = 0;
        $this->bootstrap = true;
		$this->controllers = array('widget');

        $this->secure_key = Tools::encrypt($this->name);
		
        parent::__construct();
        if (Module::isInstalled($this->name)) {
            $this_version = Configuration::get('BTMEGAMENU_MENUSIDEBAR_VERSION') ? Configuration::get('BTMEGAMENU_MENUSIDEBAR_VERSION') : '';
            $this->checkVersion($this_version);
        }
        $current_index = AdminController::$currentIndex;

        $this->base_config_url = $current_index.'&configure='.$this->name.'&token='.Tools::getValue('token');

        $this->displayName = $this->l('Leo Bootstrap Megamenu');
        $this->description = $this->l('Leo Bootstrap Megamenu Support Leo Framework Version 4.0.0');
        $this->languages();
        // $this->theme_name = Context::getContext()->shop->getTheme();
		$this->theme_name = Context::getContext()->shop->theme->getName();
        $this->img_path = _PS_ALL_THEMES_DIR_.$this->theme_name.'/modules/'.$this->name.'/img/icons/';

        $this->widget = new LeoWidget();
		
		$this->tabs = array(               
			array(
				'class_name' => 'AdminLeoBootstrapMenuModule',
				'name' => 'Leo Megamenu Configuration',
				'id_parent' => Tab::getIdFromClassName('AdminParentModulesSf'),
			),				
			array(
				'class_name' => 'AdminLeoWidgets',
				'name' => 'Leo Widgets',
				'id_parent' => -1,
			),             
		);
		//Db::getInstance()->execute('ALTER TABLE `'._DB_PREFIX_.'btmegamenu_group` MODIFY `hook` varchar(64) DEFAULT NULL');
		// Db::getInstance()->execute('ALTER TABLE `'._DB_PREFIX_.'btmegamenu_group` ADD `active_ap` tinyint(1) DEFAULT NULL');
		// Db::getInstance()->execute('ALTER TABLE `'._DB_PREFIX_.'btmegamenu_group` ADD `position` int(11) NOT NULL');
		// print_r('test');die();
	}
    /**
     *
     */
    public function languages()
    {
        //global $cookie;
        $cookie = $this->context->cookie;
        $allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') ? Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') : 0;
        if ($allow_employee_form_lang && !$cookie->employee_form_lang) {
            $cookie->employee_form_lang = (int)Configuration::get('PS_LANG_DEFAULT');
        }
        $use_lang_from_cookie = false;
        $this->_languages = Language::getLanguages(false);
        if ($allow_employee_form_lang) {
            foreach ($this->_languages as $lang) {
                if ($cookie->employee_form_lang == $lang['id_lang']) {
                    $use_lang_from_cookie = true;
                }
            }
        }
        if (!$use_lang_from_cookie) {
            $this->_defaultFormLanguage = (int)Configuration::get('PS_LANG_DEFAULT');
        } else {
            $this->_defaultFormLanguage = (int)$cookie->employee_form_lang;
        }
    }

    public function install()
    {
        /* Adds Module */
        if (parent::install() &&               
                Configuration::updateValue('BTMEGAMENU_iscache', 1)
                && Configuration::updateValue('BTMEGAMENU_cachetime', 24)
                && Configuration::updateValue('BTMEGAMENU_CAVAS', 0)
				&& Configuration::updateValue('BTMEGAMENU_GROUP_DE','')
				&& Configuration::updateValue('BTMEGAMENU_CLEARCACHE_HOOK','')
				&& Configuration::updateValue('BTMEGAMENU_ADD_HOOK',1)	
				&& Configuration::updateValue('BTMEGAMENU_CURRENT_SHOP','')
                && $this->registerLeoHook()) {
            $res = true;
            $res &= $this->createTables();
			//DONGND:: install tab			
			foreach ($this->tabs as $tab) {
				$newtab = new Tab();
				$newtab->class_name = $tab['class_name'];
				$newtab->id_parent = isset($tab['id_parent']) ? $tab['id_parent'] : 0;
				$newtab->module = 'leobootstrapmenu';
				foreach (Language::getLanguages() as $l) {
					$newtab->name[$l['id_lang']] = $this->l($tab['name']);
				}
				$res &= $newtab->save();
			}
			
			Configuration::updateValue('AP_INSTALLED_LEOBOOTSTRAPMENU', '1');
            // $res &= $this->registerHook('header'); # remove code in 2016
            return (bool)$res;
        }

        return false;
    }

    /**
     * @see Module::uninstall()
     */
    public function uninstall()
    {
        if (parent::uninstall()) {
            $res = true;
			foreach ($this->tabs as $tab) {
                $id = Tab::getIdFromClassName($tab['class_name']);
                if ($id) {
                    $tab = new Tab($id);
                    $tab->delete();
                }
            }
            
            $res &= $this->deleteTables();
            $this->deleteConfiguration();
            return $res;
        }
        return false;
    }

    public function deleteTables()
    {
        return Db::getInstance()->execute('
            DROP TABLE IF EXISTS
            `'._DB_PREFIX_.'btmegamenu`,
            `'._DB_PREFIX_.'btmegamenu_lang`,
            `'._DB_PREFIX_.'btmegamenu_shop`,
            `'._DB_PREFIX_.'btmegamenu_widgets`,
            `'._DB_PREFIX_.'btmegamenu_group`');
    }

    public function deleteConfiguration()
    {
        Configuration::deleteByName('BTMEGAMENU_iscache');
        Configuration::deleteByName('BTMEGAMENU_cachetime');
        Configuration::deleteByName('BTMEGAMENU_CAVAS');
        Configuration::deleteByName('BTMEGAMENU_GROUP_DE');
        Configuration::deleteByName('BTMEGAMENU_CLEARCACHE_HOOK');
        Configuration::deleteByName('BTMEGAMENU_ADD_HOOK');
		Configuration::deleteByName('BTMEGAMENU_CURRENT_SHOP');
		
        return true;
    }
    
    /**
     * Creates tables
     */
    protected function createTables()
    {
        if ($this->installDataSample()) {
            return true;
        }
        $res = 1;
        include_once( dirname(__FILE__).'/install/install.php' );
        return $res;
    }

    private function installDataSample()
    {
        if (!file_exists(_PS_MODULE_DIR_.'appagebuilder/libs/LeoDataSample.php')) {
            return false;
        }
        require_once( _PS_MODULE_DIR_.'appagebuilder/libs/LeoDataSample.php' );

        $sample = new Datasample(1);
        return $sample->processImport($this->name);
    }

    /**
     * render content info
     */
    public function getContent()
    {
		// echo '<pre>';
		// print_r(Shop::getContextListShopID());die();
		// print_r(Context::getContext()->shop->id);die();
		// print_r($this->context->link->getAdminLink('AdminModules'));die();
		// print_r(Configuration::get('BTMEGAMENU_CURRENT_SHOP').'aaa'.$this->context->shop->id);
		
		// if (Configuration::get('BTMEGAMENU_CURRENT_SHOP') == '')
		// {
			// print_r('test');
			// Configuration::updateValue('BTMEGAMENU_CURRENT_SHOP', $this->context->shop->id);
		// }
		// else
		// {
			// if (Configuration::get('BTMEGAMENU_CURRENT_SHOP') != $this->context->shop->id)
			// {
				// print_r('test1');
				// Configuration::updateValue('BTMEGAMENU_CURRENT_SHOP', $this->context->shop->id);
				// Configuration::updateValue('BTMEGAMENU_GROUP_DE', '');
				// Tools::redirectAdmin($this->context->link->getAdminLink('AdminModules').'&configure=leobootstrapmenu');
				// return false;
			// }
		// }
		// print_r($this->context->link->getAdminLink('AdminModules'));die();
		// print_r(Configuration::get('BTMEGAMENU_GROUP_DE').'aaa'.Tools::getValue('id_group'));die();
		// if (Configuration::get('BTMEGAMENU_GROUP_DE') == '')
		// {
			// Tools::redirectAdmin($this->context->link->getAdminLink('AdminModules').'&configure=leobootstrapmenu');
			// return false;
		// }
		//DONGND:: remove current id group and update current shop when change shop
		if (Configuration::get('BTMEGAMENU_GROUP_DE') != '')
		{
			$check_group_exist = new BtmegamenuGroup(Configuration::get('BTMEGAMENU_GROUP_DE'));
			// print_r($this->context->link->getAdminLink('AdminModules'));die();
			// echo '<pre>';
			// print_r($check_group_exist->id_shop.'aaaaa'.$this->context->shop->id);die();
			if ($check_group_exist->id_shop != $this->context->shop->id && Tools::isSubmit('editgroup'))
			{
				// print('test');die();
				Configuration::updateValue('BTMEGAMENU_GROUP_DE', '');
				Tools::redirectAdmin($this->context->link->getAdminLink('AdminModules').'&configure=leobootstrapmenu');
				return false;
			}
		}
		
		//DONGND::
		if(Configuration::get('BTMEGAMENU_GROUP_DE') && Configuration::get('BTMEGAMENU_GROUP_DE') != '' && !Tools::getValue('id_group') && !Tools::isSubmit('addNewGroup') && !Tools::isSubmit('submitGroup') && !Tools::getValue('liveeditor') && !Tools::getValue('importgroup') && !Tools::getValue('importwidgets') && !Tools::getValue('doupdategrouppos') && !Tools::getValue('hook') && !Tools::getValue('correctmodule'))
		{	
			// print_r('test');die();			
			$url = $this->context->link->getAdminLink('AdminModules').'&id_group='.Configuration::get('BTMEGAMENU_GROUP_DE').'&editgroup=1&tab_module=front_office_features&module_name=leobootstrapmenu&configure=leobootstrapmenu';
			Tools::redirectAdmin($url);
			return false;
		}
		// print_r('test1');die();
        // UPDATE VERSION
        //LeoBtmegamenuHelper::leoCreateColumn('btmegamenu', 'groupBox', 'varchar(255) DEFAULT "all"');


//        $resultCheck = Db::getInstance(_PS_USE_SQL_SLAVE_)->getRow('SELECT `id_btmegamenu` as id FROM `' . _DB_PREFIX_ . 'btmegamenu_shop` WHERE `id_btmegamenu` = 1 AND `id_shop`=' . (int) ($this->context->shop->id));
//        if ($resultCheck["id"] != 1){
//            Db::getInstance()->execute('INSERT INTO `'._DB_PREFIX_.'btmegamenu_shop`(`id_btmegamenu`,`id_shop`) VALUES( 1, '.(int)$this->context->shop->id.' )');
//        }
        $output = '';
        $this->_html .= $this->headerHTML();
        //$this->_html .= '<h2>'.$this->displayName.'.</h2>';

        /* update tree megamenu positions */
        if (Tools::getValue('doupdatepos') && Tools::isSubmit('updatePosition')) {
            $list = Tools::getValue('list');
            $root = 0;
            $child = array();
            foreach ($list as $id => $parent_id) {
                if ($parent_id <= 0) {
                    # validate module
                    $parent_id = $root;
                }
                $child[$parent_id][] = $id;
            }
            $res = true;
            foreach ($child as $id_parent => $menus) {
                $i = 0;
                foreach ($menus as $id_btmegamenu) {
                    $sql = 'UPDATE `'._DB_PREFIX_.'btmegamenu` SET `position` = '.(int)$i.', id_parent = '.(int)$id_parent.' 
                            WHERE `id_btmegamenu` = '.(int)$id_btmegamenu;
                    $res &= Db::getInstance()->execute($sql);
                    $i++;
                }
            }
            $this->clearCache();
            die($this->l('Update Positions Done'));
        }
		
		//DONGND:: update group position
		if (Tools::getValue('doupdategrouppos') && Tools::isSubmit('updateGroupPosition')) {
            $list_group = Tools::getValue('list_group');
			// echo '<pre>';
			// print_r($list_group);die();
            // $root = 1;
            // $child = array();
            // foreach ($list as $id => $parent_id) {
                // if ($parent_id <= 0) {
                    // # validate module
                    // $parent_id = $root;
                // }
                // $child[$parent_id][] = $id;
            // }
            // $res = true;
			$i = 0;
            foreach ($list_group as $id_btmegamenu_group => $val) {
				// print_r($id_btmegamenu_group);
                
                // foreach ($menus as $id_btmegamenu) {
                    $sql = 'UPDATE `'._DB_PREFIX_.'btmegamenu_group` SET `position` = '.(int)$i.' 
                            WHERE `id_btmegamenu_group` = '.(int)$id_btmegamenu_group;
                    $res &= Db::getInstance()->execute($sql);
                    $i++;
                // }
            }
			// die();
            $this->clearCache();
            die($this->l('Update Group Positions Done'));
        }

        /* delete megamenu item */
        if (Tools::getValue('dodel')) {
			if (!$id_group = Tools::getValue('id_group'))
			{
				$output .= $this->displayError($this->l('An error occurred while attempting to save.'));
			}
			else
			{
				$obj = new Btmegamenu((int)Tools::getValue('id_btmegamenu'));
				$res = $obj->delete();
				$this->clearCache();
				Tools::redirectAdmin(AdminController::$currentIndex.'&editgroup=1&id_group='.$id_group.'&successful=1&configure='.$this->name.'&token='.Tools::getAdminTokenLite('AdminModules'));
			}
        }
		//DONGND:: duplicate menu
		if (Tools::getValue('doduplicate')) {
			// print_r('test');die();
			if (!$id_btmegamenu = Tools::getValue('id_btmegamenu') || !$id_group = Tools::getValue('id_group'))
			{
				$output .= $this->displayError($this->l('An error occurred while attempting to duplicate.'));
			}
			else
			{
				$mod_menu = new Btmegamenu((int)Tools::getValue('id_btmegamenu'));
				// echo '<pre>';
				// print_r(Tools::getValue('id_btmegamenu'));
				// echo '<pre>';
				// print_r($mod_menu);die();
				$mod_new_menu = new Btmegamenu();

				$defined = $mod_new_menu->getDefinition('Btmegamenu');
				// echo '<pre>';
				// print_r($defined);die();
				foreach ($defined['fields'] as $ke => $val) {
					# module validation
					unset($val);

					if ($ke == 'id') {
						continue;
					}

					if ($ke == 'title') {
						$tmp = array();
						foreach ($mod_menu->title as $kt => $vt) {
							$tmp[$kt] = $this->l('Duplicate of').' '.$vt;
						}

						$mod_new_menu->{$ke} = $tmp;
					}
					elseif ($ke == 'position'){
						$mod_new_menu->{$ke} = Btmegamenu::getLastPosition((int)$mod_menu->id_parent);
					}	
					else {
						$mod_new_menu->{$ke} = $mod_menu->{$ke};
					}
					
					
				}
				if (!$mod_new_menu->add()) {
					$errors[] =  $this->l('The menu could not be duplicate.');
				}
				
				if (isset($errors) && count($errors)) {
					$output .= $this->displayError(implode('<br />', $errors));					
				} else {
					$this->clearCache();
					Tools::redirectAdmin(AdminController::$currentIndex.'&editgroup=1&id_group='.$id_group.'&successful=1&configure='.$this->name.'&token='.Tools::getAdminTokenLite('AdminModules'));
				}			
			}
        }
        if (Tools::isSubmit('save'.$this->name) && Tools::isSubmit('active')) {
           
			if (!$id_group = Tools::getValue('id_group'))
			{				
				$output .= $this->displayError($this->l('An error occurred while attempting to save.'));
			}
			else
			{
				if ($id_btmegamenu = Tools::getValue('id_btmegamenu')) {
					# validate module
					$megamenu = new Btmegamenu((int)$id_btmegamenu);
				} else {
					# validate module
					$megamenu = new Btmegamenu();
				}
				
				$keys = LeoBtmegamenuHelper::getConfigKey(false);
				// echo '<pre>';
				// print_r($keys);die();
				$post = LeoBtmegamenuHelper::getPost($keys, false);
				$keys = LeoBtmegamenuHelper::getConfigKey(true);
				$post += LeoBtmegamenuHelper::getPost($keys, true);

				// echo '<pre>';
				// print_r($post);die();
				$megamenu->copyFromPost($post);
				$megamenu->id_shop = $this->context->shop->id;

				$megamenu->id_group = $id_group;
				if ($megamenu->type && $megamenu->type != 'html' && Tools::getValue($megamenu->type.'_type')) {
					# validate module
					$megamenu->item = Tools::getValue($megamenu->type.'_type');
					// if(Tools::getValue($megamenu->type.'_type_parameter'))
					// {
						$megamenu->item_parameter = Tools::getValue($megamenu->type.'_type_parameter');
					// }
				}
				$url_default = '';
				foreach ($megamenu->url as $menu_url) {
					if ($menu_url) {
						$url_default = $menu_url;
						break;
					}
				}
				if ($url_default) {
					foreach ($megamenu->url as &$menu_url) {
						if (!$menu_url) {
							$menu_url = $url_default;
						}
					}
				}
				if ($megamenu->validateFields(false) && $megamenu->validateFieldsLang(false)) {
					 if(!Tools::getValue('id_btmegamenu')){
						# Auto set position when create menu
						$megamenu->position = Btmegamenu::getLastPosition((int)$megamenu->id_parent);
					}

					$megamenu->save();
					$megamenu->cleanPositions($megamenu->id_parent);
					if (isset($_FILES['image']) && isset($_FILES['image']['tmp_name']) && !empty($_FILES['image']['tmp_name'])) {
						$this->checkFolderIcon();
						if (ImageManager::validateUpload($_FILES['image'])) {
							return false;
						} elseif (!($tmp_name = tempnam(_PS_TMP_IMG_DIR_, 'PS')) || !move_uploaded_file($_FILES['image']['tmp_name'], $tmp_name)) {
							return false;
						} elseif (!ImageManager::resize($tmp_name, $this->img_path.$_FILES['image']['name'])) {
							return false;
						}
						unlink($tmp_name);
						$megamenu->image = $_FILES['image']['name'];
						$megamenu->save();
					} else if (Tools::getIsset('delete_icon')) {
						if ($megamenu->image) {
							unlink($this->img_path.$megamenu->image);
							$megamenu->image = '';
							$megamenu->save();
						}
					}
					Tools::redirectAdmin(AdminController::$currentIndex.'&configure=leobootstrapmenu&editgroup=1&id_group='.$id_group.'&id_btmegamenu='.$megamenu->id.'&successful=1&save'.$this->name.'&token='.Tools::getValue('token'));
				} else {
					# validate module
					$errors = array();					
					$errors[] = $this->l('An error occurred while attempting to save.');
				}
				if (isset($errors) && count($errors)) {
					$output .= $this->displayError(implode('<br />', $errors));					
				} else {
					$this->clearCache();					
					$output .= $this->displayConfirmation($this->l('Settings updated.'));
				}
			}

            
        }
		
		if (Tools::isSubmit('editgroup') || Tools::isSubmit('submitGroup') || Tools::isSubmit('deletegroup') || Tools::isSubmit('duplicategroup') || Tools::isSubmit('importgroup') || Tools::isSubmit('importwidgets') || Tools::isSubmit('addNewGroup') || Tools::isSubmit('exportgroup') || Tools::isSubmit('changeGStatus')) {
			// print_r('test');die();
            if (Tools::isSubmit('submitGroup') || Tools::isSubmit('deletegroup') || Tools::isSubmit('duplicategroup')|| Tools::isSubmit('importgroup') || Tools::isSubmit('importwidgets') || Tools::isSubmit('changeGStatus')) {
				// print_r('testaaa');die();
                if ($this->postValidation()) {
					// print_r('test4');die();
                    $this->_postProcess();
                }
            }
            //save group id in config to edit in next time when open module
            if (Tools::isSubmit('submitGroup') || Tools::isSubmit('editgroup') || Tools::isSubmit('changeGStatus')) {
                Configuration::updateValue('BTMEGAMENU_GROUP_DE', (int)Tools::getValue('id_group'));
            }
            // $this->html .= $this->renderGroupList();
            // $this->html .= $this->renderGroupConfig();
		}
		
		// if ((!Tools::isSubmit('editgroup') || !Tools::isSubmit('submitGroup') || !Tools::isSubmit('deletegroup') || !Tools::isSubmit('addNewGroup') || !Tools::isSubmit('exportgroup') || !Tools::isSubmit('changeGStatus')) && Configuration::get('BTMEGAMENU_GROUP_DE') != '') {
			// Tools::redirectAdmin(AdminController::$currentIndex.'&configure=leobootstrapmenu&editgroup=1&id_group='.Configuration::get('BTMEGAMENU_GROUP_DE').'&module_name=leobootstrapmenu&tab_module=front_office_features&token='.Tools::getAdminTokenLite('AdminModules'));
			// print_r(AdminController::$currentIndex.'&configure=leobootstrapmenu&editgroup=1&id_group='.Configuration::get('BTMEGAMENU_GROUP_DE').'&token='.Tools::getAdminTokenLite('AdminModules'));
			// die();
		// }
		//DONGND:: clear cache
		if(Tools::getValue('hook'))
		{
			Configuration::updateValue('BTMEGAMENU_CLEARCACHE_HOOK', Tools::getValue('hook'));
			Configuration::updateValue('BTMEGAMENU_GROUP_DE', '');
			$current_group = array('id_group' => 0, 'title' => '','group_type' =>'');
			$tpl = 'views/templates/hook/megamenu.tpl';
			if(Tools::getValue('hook') == 'all')
			{			
				$this->clearCache();
			}
			else
			{
				$this->_clearCache($tpl, Tools::getValue('hook').'_'.$this->name);
			}
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
				case 'add': 				
					$this->html = $this->displayConfirmation($this->l('Group added'));
					break;
				case 'update':					
					$this->html = $this->displayConfirmation($this->l('Group updated'));
					break;
				case 'delete':				
					$this->html = $this->displayConfirmation($this->l('Group deleted'));
					break;
				case 'clearcache':
					$this->html = $this->displayConfirmation($this->l('Successful clear cache'));					
					break;
				case 'duplicategroup':
					$this->html = $this->displayConfirmation($this->l('Duplicate group is successful'));					
					break;
				case 'importgroup':
					$this->html = $this->displayConfirmation($this->l('Import group is successful'));					
					break;
				case 'importwidgets':
					$this->html = $this->displayConfirmation($this->l('Import widgets is successful'));					
					break;
				case 'correct':
					$this->html = $this->displayConfirmation($this->l('Correct Module is successful'));					
					break;
			}
		}
		// echo '<pre>';
		// print_r($this->html.'aaa');die();
		// echo '<pre>';
		// print_r($output.'bbb');die();
		// echo '<pre>';
		// print_r($this->displayForm().'ccc');die();
		// print_r(Tools::getValue('id_group'));die();
        return $this->html.$output.$this->displayForm();
    }

    /**
     * show megamenu item configuration.
     */
    protected function showFormSetting($id_group = null)
    {
        $this->context->controller->addJS(__PS_BASE_URI__.'modules/leobootstrapmenu/js/admin/jquery.nestable.js');
        $this->context->controller->addJS(__PS_BASE_URI__.'modules/leobootstrapmenu/js/admin/form.js');

        $this->context->controller->addJS(__PS_BASE_URI__.'js/jquery/plugins/jquery.cookie-plugin.js');
        $this->context->controller->addJS(__PS_BASE_URI__.'js/jquery/ui/jquery.ui.tabs.min.js');

        $this->context->controller->addCss(__PS_BASE_URI__.'js/jquery/ui/themes/base/jquery.ui.tabs.css');
        $this->context->controller->addCss(__PS_BASE_URI__.'modules/leobootstrapmenu/css/admin/form.css');
//		$action_widget = $this->base_config_url.'&widgets=1';

		$return = '';
		$mod_group = new BtmegamenuGroup();
        $id_shop = $this->context->shop->id;
        $groups = $mod_group->getGroups(null, $id_shop);
		// echo '<pre>';
		// print_r(Configuration::get('BTMEGAMENU_GROUP_DE'));die();
		// DONGND:: check when change shop
		if (count($groups) == 0 && Configuration::get('BTMEGAMENU_GROUP_DE') != '')
		{
			
			Configuration::updateValue('BTMEGAMENU_GROUP_DE', '');
			Tools::redirectAdmin($this->context->link->getAdminLink('AdminModules').'&configure=leobootstrapmenu');
			return false;
		}
		
        foreach ($groups as $key => $group) {
            if ($group['id_btmegamenu_group'] == Tools::getValue('id_group') || (!Tools::getValue('id_group') && !Tools::isSubmit('addNewGroup') && $group['id_btmegamenu_group'] == Configuration::get('BTMEGAMENU_GROUP_DE'))) {
                $this->current_group['id_group'] = $group['id_btmegamenu_group'];
                $this->current_group['title'] = $group['title'];

                $params = Tools::jsonDecode($this->base64Decode($group['params']), true);
				
				$this->current_group['group_type'] = ($params['group_type'] == 'horizontal')?'Horizontal':'Vertical';
				// echo '<pre>';
				// print_r($params);die();
                if ($params) {
                    $group_result = array();
                }
                foreach ($params as $k => $v) {
                    $group_result[$k] = $v;
                }

                $group_result['title'] = $group['title'];
                $group_result['id_btmegamenu_group'] = $group['id_btmegamenu_group'];
                $group_result['id_shop'] = $group['id_shop'];
                $group_result['hook'] = $group['hook'];
                $group_result['active'] = $group['active'];

                if ($group_result) {
                    $this->group_data = array_merge($this->group_data, $group_result);
                }
            }

            $groups[$key]['status'] = $this->displayGStatus($group['id_btmegamenu_group'], $group['active']);
        }
		// print_r(Configuration::get('BTMEGAMENU_CLEARCACHE_HOOK'));die();
		$this->context->smarty->assign(array(
            'link' => $this->context->link,
			'update_group_position_link' => $this->context->link->getAdminLink('AdminModules').'&configure=leobootstrapmenu',
            'groups' => $groups,
            'curentGroup' => $this->current_group['id_group'],
            'languages' => $this->context->controller->getLanguages(),
            'exportLink' => $this->context->link->getAdminLink('AdminLeoBootstrapMenuModule').'&ajax=1&exportgroup=1',
			'exportWidgetsLink' => $this->context->link->getAdminLink('AdminLeoBootstrapMenuModule').'&ajax=1&exportwidgets=1',
            //'previewLink' => Context::getContext()->link->getModuleLink($this->name, 'preview', array('secure_key' => $this->secure_key)),
            'msecure_key' => $this->secure_key,
			'list_hook' => $this->hook_support,
			'clearcache_hook' => Configuration::get('BTMEGAMENU_CLEARCACHE_HOOK'),
        ));
		//$return .= '';
		$return .= $this->display(__FILE__, 'group_list.tpl');
		
		if (Tools::isSubmit('editgroup') || Tools::isSubmit('submitGroup') || Tools::isSubmit('deletegroup') || Tools::isSubmit('duplicategroup') || Tools::isSubmit('importgroup') || Tools::isSubmit('importwidgets') || Tools::isSubmit('addNewGroup') || Tools::isSubmit('exportgroup') || Tools::isSubmit('changeGStatus')) {
			// print_r('test2');die();
			$return .= $this->renderGroupConfig();
		};
		// echo '<pre>';
		// print_r($groups);die();
		if(isset($id_group))
		{	
			// echo '<pre>';
			// print_r('test1');die();		
			return $return.$this->renderFormConfig();
		}
		// else
		// {
			
		// }	
		return $return;
        
    }
	
	public function renderGroupConfig()
    {
		$description = $this->l('Add New Group');
        if (!Tools::isSubmit('deletegroup') && !Tools::isSubmit('duplicategroup') && !Tools::isSubmit('importgroup') && !Tools::isSubmit('importwidgets') && !Tools::isSubmit('addNewGroup') && $this->current_group['id_group']) {
			$description = $this->l('You are editting group:').' '.$this->current_group['title'];
        }

        $select_hook = array();
		$select_hook[] = array('id' => '', 'name' => '');
        foreach ($this->hook_support as $value) {
            $select_hook[] = array('id' => $value, 'name' => $value);
        }      
		
		$full_width = array(array('id' => '', 'name' => $this->l('Boxed')),
            array('id' => 'fullwidth', 'name' => $this->l('Fullwidth')));

        $arr_col = array('12', '10', '9-6', '9', '8', '7-2', '6', '4-8', '4', '3', '2-4', '2');
        
		$hidden_config = array('hidden-lg-down' => $this->l('Hidden in Large devices'), 'hidden-md-down' => $this->l('Hidden in Medium devices'),
            'hidden-sm-down' => $this->l('Hidden in Small devices'), 'hidden-xs-down' => $this->l('Hidden in Extra small devices'), 'hidden-sp' => $this->l('Hidden in Smart Phone'));

        $fields_form = array(
            'form' => array(
                'legend' => array(
                    'title' => $description,
                    'icon' => 'icon-cogs'
                ),
                'input' => array(
                    array(
                        'type' => 'text',                        
						'label' => $this->l('Group Title'),
                        'name' => 'title_group',
                        'lang' => false,
                        'required' => 1
                    ),
					array(
                        'type' => 'select',                 
						'label' => $this->l('Show in Hook'),
                        'name' => 'hook_group',
                        'options' => array(
                            'query' => $select_hook,
                            'id' => 'id',
                            'name' => 'name',
                        )
                    ),
					array(
						'type' => 'select',					
						'label' => $this->l('Group Type'),
						'name' => 'group[group_type]',
						'id' => 'group_type',						
						'options' => array('query' => array(
								array('id' => 'horizontal', 'name' => $this->l('Horizontal')),
								array('id' => 'vertical', 'name' => $this->l('Vertical')),								
							),
							'id' => 'id',
							'name' => 'name'),
						'default' => 'horizontal',
					),
					array(
						'type' => 'select',						
						'label' => $this->l('Show Canvas'),
						'name' => 'group[show_cavas]',
						'id' => 'show_cavas',
						'options' => array('query' => array(
								array('id' => '1', 'name' => $this->l('Yes')),
								array('id' => '0', 'name' => $this->l('No')),								
							),
							'id' => 'id',
							'name' => 'name'),
						'default' => '',
						'class' => 'group-type-group',
					),
					array(
						'type' => 'select',					
						'label' => $this->l('Type Sub'),
						'name' => 'group[type_sub]',
						'id' => 'type_sub',
						'options' => array('query' => array(
								array('id' => 'auto', 'name' => $this->l('Auto')),
								array('id' => 'right', 'name' => $this->l('Right')),
								array('id' => 'left', 'name' => $this->l('Left')),								
							),
							'id' => 'id',
							'name' => 'name'),
						'default' => '',
						'class' => 'group-type-group',
					),					
					array(
                        'type' => 'group_class',                     
						'label' => $this->l('Group Class'),
                        'name' => 'group[group_class]'
                    ),
					array(
                        'type' => 'switch',                       
						'label' => $this->l('Enable'),
                        'name' => 'active_group',
                        'is_bool' => true,
                        'values' => $this->getSwitchValue('active'),
                    ),
					
                ),
                'submit' => array(                   
					'title' => $this->l('Save Group Configuration'),
                    'class' => 'btn btn-danger')
            ),
        );

        if (Tools::isSubmit('id_group') && BtmegamenuGroup::groupExists((int)Tools::getValue('id_group'))) {
            $fields_form['form']['input'][] = array('type' => 'hidden', 'name' => 'id_group');
        } else if ($this->current_group['id_group'] && BtmegamenuGroup::groupExists($this->current_group['id_group'])) {
            $fields_form['form']['input'][] = array('type' => 'hidden', 'name' => 'id_group');
        }

        $helper = new HelperForm();
        $helper->show_toolbar = false;
        $helper->table = $this->table;
        $helper->module = $this;
        $helper->name_controller = 'slideshow';
        $lang = new Language((int)Configuration::get('PS_LANG_DEFAULT'));
        $helper->default_form_language = $lang->id;
        $helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') ? Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') : 0;
        $this->fields_form = array();

        $helper->identifier = $this->identifier;
        $helper->submit_action = 'submitGroup';
        $helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false).'&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');
		// echo '<pre>';
		// print_r($this->getGroupFieldsValues());die();
        $helper->tpl_vars = array(
            'fields_value' => $this->getGroupFieldsValues(),
            'languages' => $this->context->controller->getLanguages(),
            'id_language' => $this->context->language->id,
            //'exportLink' => Context::getContext()->link->getAdminLink('AdminLeoSlideshow').'&exportgroup=1',
            //'psBaseModuleUri' => $this->img_url,
            //'ajaxfilelink' => Context::getContext()->link->getAdminLink('AdminLeoSlideshow'),
            //'leo_width' => $arr_col,
            'hidden_config' => $hidden_config
        );

        return $helper->generateForm(array($fields_form));
    }
	
	public function getSwitchValue($id)
    {
        return array(array('id' => $id.'_on', 'value' => 1, 'label' => $this->l('Yes')),
            array('id' => $id.'_off', 'value' => 0, 'label' => $this->l('No')));
    }
	
	public function getGroupFieldsValues()
    {
        $group = array();
        $field = array('id_btmegamenu_group', 'title', 'id_shop', 'hook', 'active');
		// echo '<pre>';
		// print_r($this->group_data);
        foreach ($this->group_data as $key => $value) {
            if (in_array($key, $field)) {
                if ($key == 'id_btmegamenu_group') {
                    # module validation
                    $group['id_group'] = $value;
                } else {
                    # module validation
                    $group[$key.'_group'] = $value;
                }
                continue;
            }
            $group['group['.$key.']'] = $value;
        }
		// echo '<pre>';
		// print_r($group);die();
        return $group;
    }
	
	public function renderFormConfig()
	{
		$this->widget->loadEngines();
			
		$id_lang = $this->context->language->id;
		$id_btmegamenu = (int)Tools::getValue('id_btmegamenu');
		$id_group = (int)Tools::getValue('id_group');
		$obj = new Btmegamenu($id_btmegamenu);
		$obj->setModule($this);
		// echo '<pre>';
		// print_r($obj);die();
		$tree = $obj->getTree(null, $id_group);
		// print_r($tree);die();
		$categories = LeoBtmegamenuHelper::getCategories();
		// echo '<pre>';
		// print_r(Meta::getPages());die();
		$manufacturers = Manufacturer::getManufacturers(false, $id_lang, true);
		$suppliers = Supplier::getSuppliers(false, $id_lang, true);
		$cmss = CMS::listCms($this->context->language->id, false, true);
		$menus = $obj->getDropdown(null, $obj->id_parent, $id_group);
		// echo '<pre>';
		// print_r($menus);die();
		if (isset($id_btmegamenu) && $id_btmegamenu != '')
		{
			foreach ($menus as $key => $menus_val)
			{
				if ($menus_val ['id'] == $id_btmegamenu)
				{
					unset($menus[$key]);
				}
			}
		}
		$page_controller = array();
		// echo '<pre>';
		// print_r(Meta::getPages());die();
		foreach (Meta::getPages() as $page)
		{
			// print_r($page);echo '<br/>';
			// print_r(strpos($page, 'module'));echo '<br/>';
			if (strpos($page, 'module') === false) {
				$array_tmp = array();
				$array_tmp['link'] = $page;
				$array_tmp['name'] = $page;
				array_push($page_controller,$array_tmp);
			}
			
		}
		// echo '<pre>';
		// print_r($page_controller);die();
		
		$default_lang = (int)Configuration::get('PS_LANG_DEFAULT');

		$soption = array(
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
		);

		$this->fields_form[0]['form'] = array(
			'legend' => array(
				'title' => ($id_btmegamenu)?$this->l('Edit MegaMenu Item.'):$this->l('Create New MegaMenu Item.'),
			),
			'input' => array(
				array(
					'type' => 'hidden',
					'label' => $this->l('Megamenu ID'),
					'name' => 'id_btmegamenu',
					'default' => 0,
				),
				array(
					'type' => 'hidden',
					'label' => $this->l('Group ID'),
					'name' => 'id_group',
					'default' => $id_group,
				),
				array(
					'type' => 'text',
					'label' => $this->l('Title:'),
					'name' => 'title',
					'required' => true,
					'lang' => true,
					'default' => '',
				),
				array(
					'type' => 'text',
					'label' => $this->l('Sub Title:'),
					'lang' => true,
					'name' => 'text',
					'cols' => 40,
					'rows' => 10,
					'default' => '',
				),
				array(
					'type' => 'select',
					'label' => $this->l('Parent ID'),
					'name' => 'id_parent',
					'options' => array('query' => $menus,
						'id' => 'id',
						'name' => 'title'),
					'default' => 'url',
				),
				
				array(
					'type' => 'switch',
					'label' => $this->l('Is Active'),
					'name' => 'active',
					'values' => $soption,
					'default' => '1',
				),
				array(
					'type' => 'switch',
					'label' => $this->l('Show Title'),
					'name' => 'show_title',
					'values' => $soption,
					'default' => '1',
				),
				array(
					'type' => 'select',
					'label' => $this->l('Show submenu with'),
					'name' => 'sub_with',
					'options' => array('query' => array(
								array('id' => 'none', 'name' => $this->l('None')),
								array('id' => 'submenu', 'name' => $this->l('Submenu')),
								array('id' => 'widget', 'name' => $this->l('Widget')),								
						),
						'id' => 'id',
						'name' => 'name'),
					'default' => 'submenu',
					'desc' => $this->l('Turn on (select type) or turn off submenu'), 
				),
				array(
					'type' => 'select',
					'label' => $this->l('Menu Type'),
					'name' => 'type',
					'id' => 'menu_type',
					'desc' => $this->l('Select a menu link type and fill data for following input'),
					'options' => array('query' => array(
							array('id' => 'url', 'name' => $this->l('Url')),
							array('id' => 'category', 'name' => $this->l('Category')),
							array('id' => 'product', 'name' => $this->l('Product')),
							array('id' => 'manufacture', 'name' => $this->l('Manufacture')),
							array('id' => 'supplier', 'name' => $this->l('Supplier')),
							array('id' => 'cms', 'name' => $this->l('Cms')),
							array('id' => 'html', 'name' => $this->l('Html')),
							array('id' => 'controller', 'name' => $this->l('Page Controller'))
						),
						'id' => 'id',
						'name' => 'name'),
					'default' => 'url',
				),
				array(
					'type' => 'text',
					'label' => $this->l('Product ID'),
					'name' => 'product_type',
					'id' => 'product_type',
					'class' => 'menu-type-group',
					'default' => '',
				),
				array(
					'type' => 'select',
					'label' => $this->l('CMS Type'),
					'name' => 'cms_type',
					'id' => 'cms_type',
					'options' => array('query' => $cmss,
						'id' => 'id_cms',
						'name' => 'meta_title'),
					'default' => '',
					'class' => 'menu-type-group',
				),
				array(
					'type' => 'text',
					'label' => $this->l('URL'),
					'name' => 'url',
					'id' => 'url_type',
					'required' => true,
					'lang' => true,
					'class' => 'url-type-group-lang',
					'default' => '',
				),
				array(
					'type' => 'select',
					'label' => $this->l('Category Type'),
					'name' => 'category_type',
					'id' => 'category_type',
					'options' => array('query' => $categories,
						'id' => 'id_category',
						'name' => 'name'),
					'default' => '',
					'class' => 'menu-type-group',
				),
				array(
					'type' => 'select',
					'label' => $this->l('Manufacture Type'),
					'name' => 'manufacture_type',
					'id' => 'manufacture_type',
					'options' => array('query' => $manufacturers,
						'id' => 'id_manufacturer',
						'name' => 'name'),
					'default' => '',
					'class' => 'menu-type-group',
					
				),
				array(
					'type' => 'select',
					'label' => $this->l('Supplier Type'),
					'name' => 'supplier_type',
					'id' => 'supplier_type',
					'options' => array('query' => $suppliers,
						'id' => 'id_supplier',
						'name' => 'name'),
					'default' => '',
					'class' => 'menu-type-group',
				),
				array(
					'type' => 'textarea',
					'label' => $this->l('HTML Type'),
					'name' => 'content_text',
					'desc' => $this->l('This menu is only for display content,PLease do not select it for menu level 1'),
					'lang' => true,
					'default' => '',
					'autoload_rte' => true,
					'class' => 'menu-type-group-lang',
				),
				array(
					'type' => 'select',
					'label' => $this->l('List Page Controller'),
					'name' => 'controller_type',
					'id' => 'controller_type',
					'options' => array('query' => $page_controller,
						'id' => 'link',
						'name' => 'name'),
					'default' => '',
					'class' => 'menu-type-group',
				),
				array(
					'type' => 'text',
					'label' => $this->l('Parameter of page controller'),
					'name' => 'controller_type_parameter',
					'id' => 'controller_type_parameter',					
					'default' => '',
					'class' => 'menu-type-group',
					'desc'=> 'Eg: ?a=1&b=2',
				),
				array(
					'type' => 'select',
					'label' => $this->l('Target Open'),
					'name' => 'target',
					'options' => array('query' => array(
							array('id' => '_self', 'name' => $this->l('Self')),
							array('id' => '_blank', 'name' => $this->l('Blank')),
							array('id' => '_parent', 'name' => $this->l('Parent')),
							array('id' => '_top', 'name' => $this->l('Top'))
						),
						'id' => 'id',
						'name' => 'name'),
					'default' => '_self',
				),
				array(
					'type' => 'text',
					'label' => $this->l('Menu Class'),
					'name' => 'menu_class',
					'display_image' => true,
					'default' => ''
				),
				array(
					'type' => 'text',
					'label' => $this->l('Menu Icon Font'),
					'name' => 'icon_class',
					'display_image' => true,
					'default' => '',
					'desc' => $this->context->smarty->fetch($this->local_path.'views/templates/admin/icon_front_guide.tpl'),				
				),
				array(
					'type' => 'file',
					'label' => $this->l('Or Menu Icon Image'),
					'name' => 'image',
					'display_image' => true,
					'default' => '',
					'desc' => $this->l('Use image icon if no use icon Class'),
					'thumb' => '',
					'title' => $this->l('Icon Preview'),
				),
				array(
					'type' => 'switch',
					'label' => $this->l('Group Submenu'),
					'name' => 'is_group',
					'values' => $soption,
					'default' => '0',
					'desc' => $this->l('Group all sub menu to display in same level')
				),
				array(
					'type' => 'text',
					'label' => $this->l('Column'),
					'name' => 'colums',
					'values' => $soption,
					'default' => '1',
					'desc' => $this->l('Set each sub menu item as column')
				),
				array(
					'type' => 'group',
					'label' => $this->l('Group access'),
					'name' => 'groupBox',
					'values' => Group::getGroups(Context::getContext()->language->id),
					'hint' => $this->l('Mark all of the customer groups which you would like to have access to this menu.'),
					'default' => '1',
				),
			),
			'submit' => array(
				'title' => $this->l('Save Menu Item'),
				'class' => 'button btn btn-danger'
			)
		);

		$helper = new HelperForm();
		$helper->module = $this;
		$helper->name_controller = $this->name;
		$helper->identifier = $this->identifier;
		$helper->token = Tools::getAdminTokenLite('AdminModules');
		foreach (Language::getLanguages(false) as $lang) {
			$helper->languages[] = array(
				'id_lang' => $lang['id_lang'],
				'iso_code' => $lang['iso_code'],
				'name' => $lang['name'],
				'is_default' => ($default_lang == $lang['id_lang'] ? 1 : 0)
			);
		}

		$helper->currentIndex = AdminController::$currentIndex.'&configure='.$this->name;
		$helper->default_form_language = $default_lang;
		$helper->allow_employee_form_lang = $default_lang;
		$helper->toolbar_scroll = true;
		$helper->title = $this->displayName;
		$helper->submit_action = 'save'.$this->name;
		$helper->tpl_vars = array(
			'fields_value' => $this->getConfigFieldsValues($obj),
			'languages' => $this->context->controller->getLanguages(),
			'id_language' => $this->context->language->id
		);
		$live_editor_url = AdminController::$currentIndex.'&configure='.$this->name.'&liveeditor=1&id_group='.$id_group.'&token='.Tools::getAdminTokenLite('AdminModules');

		$action = AdminController::$currentIndex.'&configure='.$this->name.'&editgroup=1&id_group='.$id_group.'&save'.$this->name.'&token='.Tools::getAdminTokenLite('AdminModules');
		$helper->toolbar_btn = array(
			'back' =>
				array(
					'href' => AdminController::$currentIndex.'&configure='.$this->name.'&token='.Tools::getAdminTokenLite('AdminModules'),
					'desc' => $this->l('Back to list')
				)
		);
		$successful = 0;
		if(Tools::getValue('successful') == 1)
		{
			$successful = 1;
		}
		$addnew = AdminController::$currentIndex.'&token='.Tools::getAdminTokenLite('AdminModules').'&configure='.$this->name.'&editgroup=1&id_group='.$id_group;
		
		// echo '<pre>';
		// print_r($output);die();
		$this->context->smarty->assign(array(
            'successful' => $successful,
            'html' => $this->_html,
            'live_editor_url' => $live_editor_url,            
            'addnew' => $addnew,
			'action' => $action,
            'tree' => $tree,
            'admin_widget_link' => Context::getContext()->link->getAdminLink('AdminLeoWidgets'),
			'helper_form' => $helper->generateForm($this->fields_form),
			'current_group_title' => $this->current_group['title'],
			'current_group_type' => $this->current_group['group_type'],
        ));
		
		$output = $this->context->smarty->fetch($this->local_path.'views/templates/admin/configure.tpl');
		return $output;
	}

    public function getConfigFieldsValues($obj)
    {
        $languages = Language::getLanguages(false);
        $fields_values = array();
        $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? 'https://' : 'http://';
        $this->image_base_url = Tools::htmlentitiesutf8($protocol.$_SERVER['HTTP_HOST'].__PS_BASE_URI__).'themes/'.$this->theme_name.'/modules/leobootstrapmenu/img/icons/';
//		$a = array();
		// echo '<pre>';
		// print_r($this->fields_form);die();
        foreach ($this->fields_form as $k => $f) {
            foreach ($f['form']['input'] as $j => $input) {

                if (isset($obj->{trim($input['name'])})) {
                    $data = $obj->{trim($input['name'])};

                    if ($input['name'] == 'image' && $data) {
                        $thumb = $this->image_base_url.$data;
                        $this->fields_form[$k]['form']['input'][$j]['thumb'] = $thumb;
                    }

                    if (isset($input['lang'])) {
                        foreach ($languages as $lang) {
                            # validate module
                            $fields_values[$input['name']][$lang['id_lang']] = isset($data[$lang['id_lang']]) ? $data[$lang['id_lang']] : $input['default'];
                        }
                    } else {
                        # validate module
                        $fields_values[$input['name']] = isset($data) ? $data : $input['default'];
                    }
                } else {
                    if (isset($input['lang'])) {
                        foreach ($languages as $lang) {
                            $v = Tools::getValue('title', Configuration::get($input['name'], $lang['id_lang']));
                            $fields_values[$input['name']][$lang['id_lang']] = $v ? $v : $input['default'];
                        }
                    } else {
                        $v = Tools::getValue($input['name'], Configuration::get($input['name']));
                        $fields_values[$input['name']] = $v ? $v : $input['default'];
                    }

                    if ($input['name'] == $obj->type.'_type') {
                        # validate module
                        $fields_values[$input['name']] = $obj->item;
						
                    }
					// echo '=====<pre>';
					// print_r($input['name']);
					// echo '<br/><pre>';
					// print_r($obj->type.'_type');
					if ($input['name'] == $obj->type.'_type_parameter') {
						$fields_values[$input['name']] = $obj->item_parameter;
					}
					
					
                }
            }
        }
		// die();

        $id_menu_groups= $obj->getGroups(null, true);
        $groups = Group::getGroups($this->context->language->id);
        foreach ($groups as $group) {
            $fields_values['groupBox_'.$group['id_group']] = Tools::getValue('groupBox_'.$group['id_group'], (in_array($group['id_group'], $id_menu_groups) || (empty($id_menu_groups) && !$obj->id) || in_array('all', $id_menu_groups)));
        }
		// echo '<pre>';
		// print_r($fields_values);die();
        return $fields_values;
    }

    /**
     * render menu tree using for editing
     */
    protected function ajxgenmenu()
    {
        $parent = '1';
        $params = array('params' => array());
		$get_params_widget = array();
		// $group_obj = new BtmegamenuGroup((int)Tools::getValue('id_group'));
		$list_root_menu = Btmegamenu::getMenusRoot((int)Tools::getValue('id_group'));
			// echo '<pre>';
			// print_r($list_root_menu);die();
        /* unset mega menu configuration */
        if (Tools::getValue('doreset')) {
            # validate module
            //Configuration::updateValue('LEO_MEGAMENU_PARAMS', '');
			
			// echo '<pre>';
			// print_r($list_root_menu);die();
			// if (count($list_root_menu) > 0)
			// {
				// foreach ($list_root_menu as $list_root_menu_item)
				// {
					// $menu_obj = new Btmegamenu($list_root_menu_item['id_btmegamenu']);
					// $menu_obj->resetParamsWidget();
				// }
			// }
			Btmegamenu::resetParamsWidget();
			// $group_obj->resetParamsWidget((int)Tools::getValue('id_shop'));
        }
		// echo '<pre>';
		// print_r(Configuration::get('LEO_MEGAMENU_PARAMS'));die();
		// $id_shop = $this->context->shop->id;
		if (count($list_root_menu) > 0)
		{
			foreach ($list_root_menu as $list_root_menu_item)
			{
				$menu_obj = new Btmegamenu($list_root_menu_item['id_btmegamenu']);
				$menu_params_widget = $menu_obj->getParamsWidget();
				if ($menu_params_widget != '')
				{
					$get_params_widget[$list_root_menu_item['id_btmegamenu']] = Tools::jsonDecode($this->base64Decode($menu_params_widget));
				}
				
			}
		}
		// echo '<pre>';
		// print_r($get_params_widget);die();
		
		// $get_params_widget = $group_obj->getParamsWidget($id_shop);
		$params['params'] = $get_params_widget;
		// $this->base64Decode
		// echo '<pre>';
		// print_r(Tools::jsonDecode($params['params']));die();
        // $params['params'] = Configuration::get('LEO_MEGAMENU_PARAMS');
		
        // if (isset($params['params']) && !empty($params['params'])) {
            // # validate module
            // $params['params'] = Tools::jsonDecode($params['params']);
        // }
        $obj = new Btmegamenu($parent);
		$obj->setModule($this);
        $tree = $obj->getFrontTree(0, true, $params['params'],Tools::getValue('id_group'));
        $this->context->smarty->assign(array(            
            'tree' => $tree,           
        ));
		
		echo $this->context->smarty->fetch($this->local_path.'views/templates/admin/ajxgenmenu.tpl');
    }
	
	/*
	* re-load list widget
	*/
	protected function loadwidget()
    {
		$id_shop = $this->context->shop->id;
        $model = $this->widget;
        $widgets = $model->getWidgets($id_shop);
        $type_menu = array('carousel', 'categoriestabs', 'manucarousel', 'map', 'producttabs', 'tab', 'accordion', 'specialcarousel');
        foreach ($widgets as $key => $widget) {
            if (in_array($widget['type'], $type_menu)) {
                unset($widgets[$key]);
            }
        }
		
		$return = '';
		$this->context->smarty->assign(array(            
            'widgets' => $widgets,           
        ));
		$return = $this->context->smarty->fetch($this->local_path.'views/templates/admin/list_widget.tpl');
		
		echo $return;
    }

    /**
     * Ajax Menu Information Action
     */
    public function ajxmenuinfo()
    {
        if (Tools::getValue('params')) {
            $params = trim(html_entity_decode(Tools::getValue('params')));
//			$a = Tools::jsonDecode(($params));
			// $group_obj = new BtmegamenuGroup((int)Tools::getValue('id_group'));			
			// $group_obj->updateParamsWidget($this->base64Encode($params),(int)Tools::getValue('id_shop'));
            // Configuration::updateValue('BTMEGAMENU_PARAMS', $params, true);
			$array_params = Tools::jsonDecode($params, true);
			if (count($array_params) > 0)
			{
				foreach ($array_params as $key => $value)
				{
					// print_r($key);
					// echo '<br/>';
					// print_r($value);
					// echo '<br/>';
					// print_r(Tools::jsonEncode($value));
					// echo '<br/>';
					// print_r($this->base64Encode(Tools::jsonEncode($value)));
					// echo '<br/>';
					$menu_obj = new Btmegamenu((int)$key);			
					$menu_obj->updateParamsWidget($this->base64Encode(Tools::jsonEncode($value)));
				}
				// die();
			}
            $this->clearCache();
        }
        return $this->ajxgenmenu();
    }

    /**
     * show live editor tools 
     */
    protected function showLiveEditorSetting()
    {
        $this->context->controller->addJS(__PS_BASE_URI__.'js/jquery/ui/jquery.ui.dialog.min.js');
        $this->context->controller->addJS(__PS_BASE_URI__.'js/jquery/ui/jquery.ui.draggable.min.js');
        $this->context->controller->addJS(__PS_BASE_URI__.'js/jquery/ui/jquery.ui.droppable.min.js');
        $this->context->controller->addJS(__PS_BASE_URI__.'modules/leobootstrapmenu/js/admin/form.js');
        $this->context->controller->addCss(__PS_BASE_URI__.'modules/leobootstrapmenu/css/admin/liveeditor.css');
        $this->context->controller->addJS(__PS_BASE_URI__.'modules/leobootstrapmenu/js/admin/liveeditor.js');
        $tcss = _PS_ROOT_DIR_.'/themes/'.$this->context->shop->theme->getName().'/modules/leobootstrapmenu/css/megamenu.css';

        if (file_exists($tcss)) {
            # validate module
            $this->context->controller->addCss(_THEMES_DIR_.$this->context->shop->theme->getName().'/modules/leobootstrapmenu/css/megamenu.css');
        } else {
            # validate module
            $this->context->controller->addCss(__PS_BASE_URI__.'modules/leobootstrapmenu/css/megamenu.css');
        }
		
		$id_group = Tools::getValue('id_group');
		// echo '<pre>';
		// print_r($id_group);die();
		$group_obj = new BtmegamenuGroup($id_group);

        $liveedit_action = $this->base_config_url.'&liveeditor=1&id_group='.$id_group.'&do=livesave';
        $action_backlink = $this->base_config_url.'&editgroup=1&id_group='.$id_group;
        $action_widget = _MODULE_DIR_.$this->name.'/widget.php';
        $action_addwidget = $this->base_config_url.'&liveeditor=1&do=addwidget';
		$action_loadwidget = $this->base_config_url.'&liveeditor=1&do=loadwidget';
        $ajxgenmenu = $this->base_config_url.'&liveeditor=1&id_group='.$id_group.'&do=ajxgenmenu';
        $ajxmenuinfo = $this->base_config_url.'&liveeditor=1&id_group='.$id_group.'&do=ajxmenuinfo';
		$group_title = $group_obj->title;
		
		$params = Tools::jsonDecode($this->base64Decode($group_obj->params), true);		
		$group_type = $params['group_type'];
		$group_type_sub = $params['type_sub'];
		// print_r($group_title);
		// print_r($group_type);die();
        $id_shop = $this->context->shop->id;
        $shop = Shop::getShop($id_shop);
        if (!empty($shop)) {
            $live_site_url = $shop['uri'];
        } else {
            $live_site_url = __PS_BASE_URI__;
        }
        $model = $this->widget;
        $widgets = $model->getWidgets($id_shop);
        $type_menu = array('carousel', 'categoriestabs', 'manucarousel', 'map', 'producttabs', 'tab', 'accordion', 'specialcarousel');
        foreach ($widgets as $key => $widget) {
            if (in_array($widget['type'], $type_menu)) {
                unset($widgets[$key]);
            }
        }
		
		$this->context->smarty->assign(
			array(
				'liveedit_action' => $liveedit_action,
				'widgets' => $widgets,
				'group_title' => $group_title,
				'group_type' => $group_type,
				'group_type_sub'=> $group_type_sub,
				'live_site_url' => $live_site_url,
				'action_backlink' => $action_backlink,
				'ajxgenmenu' => $ajxgenmenu,				
				'ajxmenuinfo' => $ajxmenuinfo,
				'action_widget' => $action_widget,
				'action_loadwidget' => $action_loadwidget,
				'id_shop' => $id_shop,
				'link'=>$this->context->link,
			)
		);
		
        return $this->display(__FILE__, 'liveeditor.tpl');
    }

    private function displayForm()
    {
		// echo '<pre>';
		// print_r('ddd');die();
        if (Tools::getValue('liveeditor')) {
			// echo '<pre>';
			// print_r('fff');die();
            if (Tools::getValue('do')) {
                switch (Tools::getValue('do')) {
                    case 'ajxmenuinfo':
                        echo $this->ajxmenuinfo();
                        break;
                    case 'ajxgenmenu':
                        echo $this->ajxgenmenu();
                        break;
					case 'loadwidget':
                        echo $this->loadwidget();
                        break;
                    default:
                        break;
                }
                die;
            } else {
                # validate module
				// print_r($this->current_group['title']);
				// print_r($this->current_group['group_type']);die();
                return $this->showLiveEditorSetting();
            }
        } else {
			// echo '<pre>';
			// print_r('eeee');die();
            # validate module
			if (Tools::getValue('id_group'))
			{
				// echo '<pre>';
				// print_r('ggg');die();
				// echo '<pre>';
				// print_r('test');die();
				$id_group = Tools::getValue('id_group');
				return $this->showFormSetting($id_group);
			}
			else
			{
				// echo '<pre>';
				// print_r('hhh');die();
				return $this->showFormSetting();
			}
            
        }
    }

    /**
     *
     */
    private function postProcess()
    {
//		$errors = array();
    }


    public function hookDisplayHeader()
    {
        $this->context->controller->addCSS($this->_path.'css/megamenu.css', 'all');
		$this->context->controller->addCSS($this->_path.'css/leomenusidebar.css', 'all');
		
		$this->context->controller->registerStylesheet('modules-leoboostrapmenu-fancybox', 'modules/leobootstrapmenu/js/fancybox/jquery.fancybox.css', ['media' => 'all', 'priority' => 150]);
		
		$this->context->controller->registerJavascript('modules-leoboostrapmenu-leoboostrapmenu', 'modules/leobootstrapmenu/js/leobootstrapmenu.js', ['position' => 'bottom', 'priority' => 150]);
		$this->context->controller->registerJavascript('modules-leoboostrapmenu-js-fancybox', 'modules/leobootstrapmenu/js/fancybox/jquery.fancybox.js', ['position' => 'bottom', 'priority' => 150]);
		$link = new Link();
		$current_link = $link->getPageLink('', false, $this->context->language->id);
		$this->smarty->assign('current_link', $current_link);
		return $this->display(__FILE__, 'views/templates/hook/javascript_parameter.tpl');
    }

	protected function getCacheId($name = null, $hook = '')
    {
        $cache_array = array(
            $name !== null ? $name : $this->name,
            $hook,
            date('Ymd'),
            (int)Tools::usingSecureMode(),
            (int)$this->context->shop->id,
            (int)Group::getCurrent()->id,
            (int)$this->context->language->id,
            (int)$this->context->currency->id,
            (int)$this->context->country->id,
            (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443)
        );
        return implode('|', $cache_array);
    }

    /**
     * render widgets
     */
    public function renderwidget($id_shop)
    {
        if (!$id_shop) {
            $id_shop = Context::getContext()->shop->id;
        }
        $widgets = Tools::getValue('widgets');

        $widgets = explode('|wid-', '|'.$widgets);
		$this->context->smarty->assign(array(
            'link' => $this->context->link,
			// 'PS_CATALOG_MODE' => Configuration::get('PS_CATALOG_MODE'),
			// 'priceDisplay' => Product::getTaxCalculationMethod((int) $this->context->cookie->id_customer),
        ));
        if (!empty($widgets)) {
            unset($widgets[0]);
            $model = $this->widget;
            $model->setTheme(Context::getContext()->shop->theme->getName());
            $model->langID = $this->context->language->id;
            $model->loadWidgets($id_shop);
            $model->loadEngines();
            $output = '';
            foreach ($widgets as $wid) {
                $content = $model->renderContent($wid);
                $output .= $this->getWidgetContent($wid, $content['type'], $content['data']);
            }
            echo $output;
        }
        die;
    }

    /**
     *
     */
    public function getWidgetContent($id, $type, $data, $show_widget_id = 1)
    {
		// print_r('views/widgets/widget_'.$type.'.tpl');die();
        $data['id_lang'] = $this->context->language->id;

        $this->smarty->assign($data);
        $id_text = '';
        if ($show_widget_id) {
            $id_text = ' id="wid-'.$id.'"';
        }
        $output = '<div class="leo-widget"'.$id_text.'>';
        $output .= $this->display(__FILE__, 'views/widgets/widget_'.$type.'.tpl');
        $output .= '</div>';
        return $output;
    }

    /**
     *
     */
    public function clearCache()
    {
        $tpl = 'views/templates/hook/megamenu.tpl';
        // $this->_clearCache($tpl);
		foreach ($this->hook_support as $val) {
			$group = BtmegamenuGroup::getActiveGroupByHook($val);
			foreach ($group as $group_val)
			{
				$this->_clearCache($tpl, $val.'_'.$this->name.'_'.$group_val['id_btmegamenu_group']);
			}
            
        }
		
		//DONGND:: clear cache for appagebuilder
		$list_group = BtmegamenuGroup::getGroups(null);
		foreach ($list_group as $list_group_val)
		{		
			if (isset($list_group_val['form_id']) && $list_group_val['form_id'] != '')
			{				
				$this->_clearCache($tpl, $list_group_val['id_btmegamenu_group'].'_'.$list_group_val['form_id'].'_'.$this->name);
			}
			
		}
    }

    /**
     *
     */
    public function headerHTML()
    {
        if (Tools::getValue('controller') != 'AdminModules' && Tools::getValue('configure') != $this->name) {
            return;
        }
        $this->context->controller->addJqueryUI('ui.sortable');
        $html = '';
        return $html;
    }

    public function checkVersion($version)
    {
        $versions = array(
            '3.0.0'
        );
        if ($version && $version == $versions[count($versions) - 1]) {
            return;
        }
        foreach ($versions as $ver) {
            if (!$version || ($version && $version < $ver)) {
                if ($this->checktable()) {
                    $checkcolumn = Db::getInstance()->executeS("
        				SELECT * FROM INFORMATION_SCHEMA.COLUMNS
        					WHERE TABLE_SCHEMA = '"._DB_NAME_."'
        						AND TABLE_NAME='"._DB_PREFIX_."btmegamenu_lang'
        						AND COLUMN_NAME ='url'
    				");
                    if (count($checkcolumn) < 1) {
                        Db::getInstance()->execute('
    						ALTER TABLE `'._DB_PREFIX_.'btmegamenu_lang` 
    							ADD `url` varchar(255) DEFAULT NULL');
                        $menus = Db::getInstance()->executeS('SELECT `id_btmegamenu`,`id_parent`,`url` FROM `'._DB_PREFIX_.'btmegamenu`');
                        if ($menus) {
                            foreach ($menus as $menu) {
                                if ($menu['id_parent'] != 0) {
                                    $megamenu = new Btmegamenu((int)$menu['id_btmegamenu']);
                                    foreach ($megamenu->url as &$url) {
                                        $url = $menu['url'] ? $menu['url'] : '';
                                        # validate module
                                        $validate_module = $url;
                                        unset($validate_module);
                                    }
                                    $megamenu->update();
                                }
                            }
                        }
                        Db::getInstance()->execute('ALTER TABLE `'._DB_PREFIX_.'btmegamenu` DROP `url`');
                        Configuration::updateValue('BTMEGAMENU_VERSION', $ver);
                    }
                }
            }
        }
    }

    public function checktable()
    {
        $checktable = Db::getInstance()->executeS("
						SELECT * FROM INFORMATION_SCHEMA.COLUMNS
						WHERE TABLE_SCHEMA = '"._DB_NAME_."'
						AND TABLE_NAME='"._DB_PREFIX_."btmegamenu_lang'
				");
        if (count($checktable) < 1) {
            return false;
        } else {
            return true;
        }
    }

    public function checkFolderIcon()
    {
        if (file_exists($this->img_path) && is_dir($this->img_path)) {
            return;
        }
        if (!file_exists($this->img_path) && !is_dir($this->img_path)) {
            @mkdir(_PS_ALL_THEMES_DIR_.$this->theme_name.'/modules/', 0777, true);
            @mkdir(_PS_ALL_THEMES_DIR_.$this->theme_name.'/modules/'.$this->name.'/', 0777, true);
			
			if(!file_exists(_PS_ALL_THEMES_DIR_.$this->theme_name.'/modules/'.$this->name.'/index.php') && file_exists(_PS_IMG_DIR_.'index.php')) 
			{
				@copy(_PS_IMG_DIR_.'index.php', _PS_ALL_THEMES_DIR_.$this->theme_name.'/modules/'.$this->name.'/index.php');
			}			
			
			@mkdir(_PS_ALL_THEMES_DIR_.$this->theme_name.'/modules/'.$this->name.'/img/', 0777, true);
			
			if(!file_exists(_PS_ALL_THEMES_DIR_.$this->theme_name.'/modules/'.$this->name.'/img/index.php') && file_exists(_PS_IMG_DIR_.'index.php')) 
			{
				@copy(_PS_IMG_DIR_.'index.php', _PS_ALL_THEMES_DIR_.$this->theme_name.'/modules/'.$this->name.'/img/index.php');
			}
			
            @mkdir($this->img_path, 0777, true);
			
			if(!file_exists($this->img_path.'index.php') && file_exists(_PS_IMG_DIR_.'index.php')) 
			{
				@copy(_PS_IMG_DIR_.'index.php', $this->img_path.'index.php');
			}
        }
    }
	
	public function displayGStatus($id_group, $active)
    {
        # Status Image
        $title = ((int)$active == 0 ? $this->l('Click to Enabled') : $this->l('Click to Disabled'));
        $img = ((int)$active == 0 ? 'disabled.gif' : 'enabled.gif');

        # Status Link
        if ($active == BtmegamenuGroup::GROUP_STATUS_DISABLE) {
            $change_group_status = BtmegamenuGroup::GROUP_STATUS_ENABLE;
        } elseif ($active == BtmegamenuGroup::GROUP_STATUS_ENABLE) {
            $change_group_status = BtmegamenuGroup::GROUP_STATUS_DISABLE;
        }

        $html = '<a href="'.AdminController::$currentIndex.'&configure='.$this->name.'&token='.Tools::getAdminTokenLite('AdminModules').'&changeGStatus='.$change_group_status.'&id_group='.(int)$id_group.'" title="'.$title.'"><img src="'._PS_ADMIN_IMG_.''.$img.'" alt="" /></a>';
        return $html;
    }
	
	public function postValidation()
    {
        $errors = array();

        if (Tools::isSubmit('submitGroup')) {
            if (Tools::isSubmit('id_group')) {
                if (!Validate::isInt(Tools::getValue('id_group')) && !BtmegamenuGroup::groupExists(Tools::getValue('id_group'))) {
                    $errors[] = $this->l('Invalid id_group');
                }
            }
           
        }

        /* Display errors if needed */
        if (count($errors)) {
            $this->error_text .= implode('<br>', $errors);
            $this->html .= $this->displayError(implode('<br />', $errors));
            return false;
        }

        /* Returns if validation is ok */
        return true;
    }

    private function _postProcess()
    {
		// print_r('test3');die();
        $errors = array();
        if (Tools::isSubmit('submitGroup')) {
            # ACTION - add,edit for GROUP
            /* Sets ID if needed */
            if (Tools::getValue('id_group')) {
                $mod_group = new BtmegamenuGroup((int)Tools::getValue('id_group'));
                if (!Validate::isLoadedObject($mod_group)) {
                    $this->html .= $this->displayError($this->l('Invalid id_group'));
                    return;
                }
            } else {
                $mod_group = new BtmegamenuGroup();
            }

            /* Sets position */
            $mod_group->title = Tools::getValue('title_group');
            /* Sets active */
            $mod_group->active = (int)Tools::getValue('active_group');
            $context = Context::getContext();
            $mod_group->id_shop = $context->shop->id;
            $mod_group->hook = Tools::getValue('hook_group');
			if (!Tools::getValue('id_group')) {
				$mod_group->position = $mod_group->getLastPosition($context->shop->id);
				$mod_group->randkey = LeoBtmegamenuHelper::genKey();
			}
            $params = Tools::getValue('group');
			// echo '<pre>';
			// print_r(Tools::jsonEncode($params));die();
            $mod_group->params = $this->base64Encode(Tools::jsonEncode($params));


            /* Adds */
            if (!Tools::getValue('id_group')) {
                if (!$mod_group->add()) {
                    $errors[] = $this->displayError($this->l('The group could not be added.'));
                } else {
                    $this->clearCache();
                    Tools::redirectAdmin(AdminController::$currentIndex.'&configure='.$this->name.'&token='.Tools::getAdminTokenLite('AdminModules').'&success=add&editgroup=1&id_group='.$mod_group->id);
                }
            } else {
                # Update
                if (!$mod_group->update()) {
                    $errors[] = $this->displayError($this->l('The group could not be updated.'));
                } else {
                    $this->clearCache();
                    Tools::redirectAdmin(AdminController::$currentIndex.'&configure='.$this->name.'&token='.Tools::getAdminTokenLite('AdminModules').'&success=update&editgroup=1&id_group='.$mod_group->id);
                }
            }
			
            # Save in config to edit next time
            $this->clearCache();
			/* Display errors if needed */
			if (count($errors)) {
				$this->html .= $this->displayError(implode('<br />', $errors));
			} elseif (Tools::isSubmit('submitGroup')) {
				$this->html .= $this->displayConfirmation($this->l('Group added'));
			} else
			{
				$this->html .= $this->displayConfirmation($this->l('Group updated'));
			}
			
        } elseif (Tools::isSubmit('changeGStatus') && Tools::isSubmit('id_group')) {
            # ACTION - Change status for GROUP : enable or disable a group
            $mod_group = new BtmegamenuGroup((int)Tools::getValue('id_group'));
            $change_status = Tools::getValue('changeGStatus');
            $mod_group->update_flag = false;

            if ($change_status == BtmegamenuGroup::GROUP_STATUS_DISABLE && $mod_group->active != $change_status) {
                $mod_group->active = BtmegamenuGroup::GROUP_STATUS_DISABLE;
                $mod_group->update_flag = true;
            } elseif ($change_status == BtmegamenuGroup::GROUP_STATUS_ENABLE && $mod_group->active != $change_status) {
                $mod_group->active = BtmegamenuGroup::GROUP_STATUS_ENABLE;
                $mod_group->update_flag = true;
            }

            if (true == $mod_group->update_flag) {
                $res = $mod_group->update();
                $this->clearCache();
                $this->html .= ($res ? $this->displayConfirmation($this->l('Change status of group was successful')) : $this->displayError($this->l('The configuration could not be updated.')));
            }
        } elseif (Tools::isSubmit('deletegroup')) {
            $mod_group = new BtmegamenuGroup((int)Tools::getValue('id_group'));
            # Delete slider of group
            // $slider = $this->getSlides((int)Tools::getValue('id_group'));

            // foreach ($slider as $value) {
                // $mod_slide = new LeoSlideshowSlide($value['id_leoslideshow_slides']);
                // $mod_slide->delete();
            // }

            $res = $mod_group->delete();

            $this->clearCache();
            if (!$res) {
                $this->html .= $this->displayError($this->l('Could not delete'));
            } else {
							
				$res = $this->removeAllMenuOfGroup(Tools::getValue('id_group'));
				
				if (!$res)
				{
					$this->html .= $this->displayError($this->l('Could not delete'));
				}
				else
				{
					$this->html .= $this->displayConfirmation($this->l('Group deleted'));
					Configuration::updateValue('BTMEGAMENU_GROUP_DE', '');
					Tools::redirectAdmin('index.php?controller=AdminModules&token='.Tools::getAdminTokenLite('AdminModules').'&configure=leobootstrapmenu&success=delete');
				}
                
            }
			// print_r($this->html);die();
            
        } elseif (Tools::isSubmit('duplicategroup')) {
			if (!$id_group = Tools::getValue('id_group'))
			{
				$this->html .= $this->displayError($this->l('An error occurred while attempting to duplicate.'));			
			}
			else
			{
				$mod_group = new BtmegamenuGroup((int)Tools::getValue('id_group'));
				// echo '<pre>';
				// print_r(Tools::getValue('id_btmegamenu'));
				// echo '<pre>';
				// print_r($mod_group);die();
				$mod_new_group = new BtmegamenuGroup();

				$defined = $mod_new_group->getDefinition('BtmegamenuGroup');
				// echo '<pre>';
				// print_r($defined);die();
				foreach ($defined['fields'] as $ke => $val) {
					# module validation
					unset($val);

					if ($ke == 'id') {
						continue;
					}

					if ($ke == 'title') {
						// $tmp = array();
						// foreach ($mod_group->title as $kt => $vt) {
							// $tmp[$kt] = $this->l('Duplicate of').' '.$vt;
						// }

						$mod_new_group->{$ke} = $this->l('Duplicate of').' '.$mod_group->{$ke};
					}
					elseif ($ke == 'position'){
						$mod_new_group->{$ke} = BtmegamenuGroup::getLastPosition(Context::getContext()->shop->id);
					}
					elseif ($ke == 'randkey'){
						$mod_new_group->{$ke} = LeoBtmegamenuHelper::genKey();
					}					
					else {
						$mod_new_group->{$ke} = $mod_group->{$ke};
					}								
				}
				$list_menu = BtmegamenuGroup::getMenuByGroup($id_group);
				// echo '<pre>';
				// print_r($list_menu);die();
				if (!$mod_new_group->add()) {					
					$this->html .= $this->displayError($this->l('The group could not be duplicate.'));						
				} else {
					// echo '<pre>';
					// print_r($mod_new_group);die();
					//DONGND:: copy menu of old group to new group
					$list_menu = BtmegamenuGroup::getMenuByGroup($id_group);
					
					$res = true;
					if (count($list_menu) > 0)
					{
						$list_new_id = array();
						foreach ($list_menu as $key => $list_menu_item)
						{
							$mod_menu = new Btmegamenu($list_menu_item['id_btmegamenu']);							
							$mod_new_menu = new Btmegamenu();

							$defined = $mod_new_menu->getDefinition('Btmegamenu');
							// echo '<pre>';
							// print_r($defined);die();
							foreach ($defined['fields'] as $ke => $val) {
								# module validation
								unset($val);

								if ($ke == 'id') {
									continue;
								}
								
								if ($ke == 'id_group'){
									$mod_new_menu->{$ke} = $mod_new_group->id;
								}
								elseif ($ke == 'id_parent')
								{
									if ($mod_menu->{$ke} != 0)
									{
										$mod_new_menu->{$ke} = $list_new_id[$mod_menu->{$ke}];
									}
									else
									{
										$mod_new_menu->{$ke} = $mod_menu->{$ke};
									}
									
								}
								else {
									$mod_new_menu->{$ke} = $mod_menu->{$ke};
								}
																
							}
							if (!$mod_new_menu->add()) {
								$res = false;
							}
							else
							{
								$list_new_id[$list_menu_item['id_btmegamenu']] = $mod_new_menu->id;
							}
						}
					}
					// echo '<pre>';
					// print_r($list_new_id);die();
					
					if ($res)
					{	
						
						//DONGND:: update widget with new menu id
						// if ($mod_new_group->params_widget != '')
						// {
							// $params_widget = Tools::jsonDecode($this->base64Decode($mod_new_group->params_widget),true);
							
							// foreach ($params_widget as $key => $params_widget_item)
							// {
								// $params_widget[$key]['id'] = $list_new_id[$params_widget_item['id']];
							// }						
							// $mod_new_group->params_widget = $this->base64Encode(Tools::jsonEncode($params_widget));
							// $mod_new_group->save();
							
						// }
						// $this->clearCache();
						$this->html .= $this->displayConfirmation($this->l('Group duplicated'));
						Configuration::updateValue('BTMEGAMENU_GROUP_DE', '');
						// Tools::redirectAdmin(AdminController::$currentIndex.'&editgroup=1&id_group='.$id_group.'&successful=1&configure='.$this->name.'&token='.Tools::getAdminTokenLite('AdminModules'));
						Tools::redirectAdmin('index.php?controller=AdminModules&token='.Tools::getAdminTokenLite('AdminModules').'&configure=leobootstrapmenu&success=duplicategroup');
					}
					else
					{
						$this->html .= $this->displayError($this->l('The group could not be duplicate.'));
					}
					
				}			
			}
		}
		elseif (Tools::isSubmit('importgroup'))
		{
			if ($this->importGroup())
			{
				//return false;
				$this->clearCache();
				Configuration::updateValue('BTMEGAMENU_GROUP_DE', '');
				// print_r('aaa');die();
				Tools::redirectAdmin('index.php?controller=AdminModules&token='.Tools::getAdminTokenLite('AdminModules').'&configure=leobootstrapmenu&success=importgroup');
			}
			else
			{
				$this->html .= $this->displayError($this->l('The file could not be import.'));
			}
		}
		elseif (Tools::isSubmit('importwidgets'))
		{
			if ($this->importWidgets())
			{
				//return false;
				$this->clearCache();
				Configuration::updateValue('BTMEGAMENU_GROUP_DE', '');
				// print_r('aaa');die();
				Tools::redirectAdmin('index.php?controller=AdminModules&token='.Tools::getAdminTokenLite('AdminModules').'&configure=leobootstrapmenu&success=importwidgets');
			}
			else
			{
				$this->html .= $this->displayError($this->l('The file could not be import.'));
			}
		}
       
    }
	
	public static function base64Decode($data)
    {
        return call_user_func('base64_decode', $data);
    }

    public static function base64Encode($data)
    {
        return call_user_func('base64_encode', $data);
    }
	
	//DONGND:: list hook
	public function hookDisplayTop()
    {
        return $this->_processHook('displayTop');
    }
	
	public function hookDisplayNav1()
    {
        return $this->_processHook('displayNav1');
    }
	
	public function hookDisplayNav2()
    {
        return $this->_processHook('displayNav2');
    }
	
	public function hookDisplayNavFullWidth()
    {
        return $this->_processHook('displayNavFullWidth');
    }
	
	public function hookDisplayLeftColumn()
    {
        return $this->_processHook('displayLeftColumn');
    }
	
	public function hookDisplayHome()
    {
        return $this->_processHook('displayHome');
    }
	
	public function hookDisplayRightColumn()
    {
        return $this->_processHook('displayRightColumn');
    }
	
	public function hookDisplayFooterBefore()
    {
        return $this->_processHook('displayFooterBefore');
    }
	
	public function hookDisplayFooter()
    {
        return $this->_processHook('displayFooter');
    }
	
	public function hookDisplayFooterAfter()
    {
        return $this->_processHook('displayFooterAfter');
    }
	
	public function hookDisplayLeftColumnProduct()
    {
        return $this->_processHook('displayLeftColumnProduct');
    }
	
	public function hookDisplayFooterProduct()
    {
        return $this->_processHook('displayFooterProduct');
    }
	
	public function hookDisplayRightColumnProduct()
    {
        return $this->_processHook('displayRightColumnProduct');
    }
	
	public function hookDisplayProductButtons()
    {
        return $this->_processHook('displayProductButtons');
    }
	
	public function hookDisplayReassurance()
    {
        return $this->_processHook('displayReassurance');
    }

	
	public function _processHook($hookName)
    {
		$tpl = 'views/templates/hook/megamenu.tpl';
		$group = BtmegamenuGroup::getActiveGroupByHook($hookName);
		if (!$group) {
            return false;
        }
		$hook_html = '';
		// $link = new Link();
		// $current_link = $link->getPageLink('', false, $this->context->language->id);
		// $this->smarty->assign('current_link', $current_link);
		// $hook_html .= $this->display(__FILE__, 'views/templates/hook/javascript_parameter.tpl');
		foreach ($group as $group_val)
		{
			if (!$this->_prepareHook($hookName, $group_val)) {			
				return false;
				//$hook_html .= '';
			}
			
			$hook_html .= $this->display(__FILE__, $tpl, $this->getCacheId($hookName.'_'.$this->name.'_'.$group_val['id_btmegamenu_group']));
			
		}
        return $hook_html;
    }
	
	private function _prepareHook($hook_name, $group)
    {
		
		$tpl = 'views/templates/hook/megamenu.tpl';
        if ($this->isCached($tpl, $this->getCacheId($hook_name.'_'.$this->name.'_'.$group['id_btmegamenu_group']))) {
			
            return true;
        }
		// print_r(_PS_ROOT_DIR_);die();
        if (!is_dir(_PS_ROOT_DIR_.'/cache/'.$this->name)) {
            mkdir(_PS_ROOT_DIR_.'/cache/'.$this->name, 0755);
        }
       
        // $group = BtmegamenuGroup::getActiveGroupByHook($hook_name);
		// print_r($group);die();
        // if (!$group) {
            // return false;
        // }
		// echo '<pre>';
		// print_r($group);die();
		$params_group = Tools::jsonDecode($this->base64Decode($group['params']), true);
		// echo '<pre>';
		// print_r($params_group);die();
        
		$params = array();
		
		$show_cavas = $params_group['show_cavas'];
		$type_sub = $params_group['type_sub'];
		$group_type = $params_group['group_type'];
		$group_class = $params_group['group_class'];
		// $params['params'] = Configuration::get('LEO_MEGAMENU_PARAMS');
		// $show_cavas = Configuration::get('LEO_MEGAMENU_CAVAS');
			
		// $params['params'] = $this->base64Decode($group['params_widget']);
		
		// $current_link = $link->getPageLink('', false, $this->context->language->id);
		// if (isset($params['params']) && !empty($params['params'])) {
			// # validate module
			// $params['params'] = Tools::jsonDecode($params['params']);
		// }
		$list_root_menu = Btmegamenu::getMenusRoot($group['id_btmegamenu_group']);
		
		$get_params_widget = array();
		if (count($list_root_menu) > 0)
		{
			foreach ($list_root_menu as $list_root_menu_item)
			{
				$menu_obj = new Btmegamenu($list_root_menu_item['id_btmegamenu']);
				$menu_params_widget = $menu_obj->getParamsWidget();
				if ($menu_params_widget != '')
				{
					$get_params_widget[$list_root_menu_item['id_btmegamenu']] = Tools::jsonDecode($this->base64Decode($menu_params_widget));
				}
				
			}
		}
		
		$params['params'] = $get_params_widget;

		$obj = new Btmegamenu();
		$obj->setModule($this);
		$boostrapmenu = trim($obj->getFrontTree(0, false, $params['params'],$group['id_btmegamenu_group'],$hook_name));
		// echo '<pre>';
		// print_r($boostrapmenu);
		$this->smarty->assign('boostrapmenu', $boostrapmenu);
		//$this->smarty->assign('current_link', $current_link);
		$this->smarty->assign('show_cavas', $show_cavas);
		$this->smarty->assign('type_sub', $type_sub);
		$this->smarty->assign('group_type', $group_type);
		$this->smarty->assign('group_class', $group_class);
		$this->smarty->assign('megamenu_id', $group['id_btmegamenu_group']);
		
        return true;
    }
	
	//DONGND:: function get list group for ApPageBuilder
	public function getGroups()
    {
        $this->context = Context::getContext();
        $id_shop = $this->context->shop->id;
        $sql = 'SELECT *
                    FROM '._DB_PREFIX_.'btmegamenu_group gr
                    WHERE gr.id_shop = '.(int)$id_shop.' ORDER BY gr.id_btmegamenu_group';
        return Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);
    }

	//DONGND:: function callback for ApPageBuilder
	public function processHookCallBack($group_id, $form_id)
    {
		$tpl = 'views/templates/hook/megamenu.tpl';
        // $this->context->controller->addCSS($this->_path.'css/megamenu.css', 'all');
		// $this->context->controller->addCSS($this->_path.'css/leomenusidebar.css', 'all');
        
		//DONGND:: remove menu group from hook, only display with appagebuilder
		$megamenu_group_obj = new BtmegamenuGroup($group_id);
		$megamenu_group_obj->form_id = $form_id;
		if ($megamenu_group_obj->active_ap != 1)
		{
			$megamenu_group_obj->hook = '';
			$megamenu_group_obj->active_ap = 1;			
		}
        
        if($megamenu_group_obj->id){
            $megamenu_group_obj->save();
        }
		
		
        // $this->context->controller->addJS($this->_path.'js/jquery.themepunch.tools.min.js');
        // $this->context->controller->addCSS(($this->_path).'views/css/typo/typo.css', 'all');
		
		// Configuration::updateValue('BTMEGAMENU_ADD_HOOK',1);
		
		// if(Configuration::get('BTMEGAMENU_ADD_HOOK') == 1)
		// {
			// $sql = 'SELECT `id_hook` FROM `'._DB_PREFIX_.'hook_module` WHERE `id_module` = '.(int)$this->id;
			
			// $result = Db::getInstance()->executeS($sql);
			
			// foreach ($result as $row) {
				// $this->unregisterHook((int)$row['id_hook']);
				// $this->unregisterExceptions((int)$row['id_hook']);
			// }
			// Configuration::updateValue('BTMEGAMENU_ADD_HOOK',0);
			// $this->clearCache();
		// }
		// $this->clearCache();
			
        $res = $this->prepareHookForApPageBuilder($group_id, $form_id);
		// echo '<pre>';
		// print_r($res);die();
        if (!$res) {
            return false;
        }elseif($res === 2){
            return 'If you load this Megamenu (not active) from ApPageBuilder module, please access ApPageBuilder module then delete it';
        }
		// echo '<pre>';
		// print_r($res.'aaaaa');die();

        return $this->display(__FILE__, $tpl, $this->getCacheId($group_id.'_'.$form_id.'_'.$this->name));
    }
	
	//DONGND:: function callback for ApPageBuilder
	private function prepareHookForApPageBuilder($group_id, $form_id)
    {
        $tpl = 'views/templates/hook/megamenu.tpl';
        if (!$this->isCached($tpl, $this->getCacheId($group_id.'_'.$form_id.'_'.$this->name))) {
            if (!is_dir(_PS_ROOT_DIR_.'/cache/'.$this->name)) {
                mkdir(_PS_ROOT_DIR_.'/cache/'.$this->name, 0755);
            }

            //get slider via hookname
            $group = $this->getMegamenuGroupById($group_id);
            if (!$group) {
                return false;
            }elseif($group['active'] != 1){
                return 2;
            }
            $params_group = Tools::jsonDecode($this->base64Decode($group['params']), true);
			// echo '<pre>';
			// print_r($params_group);die();
			// $link = new Link();
			$params = array();
			
			$show_cavas = $params_group['show_cavas'];
			$type_sub = $params_group['type_sub'];
			$group_type = $params_group['group_type'];
			$group_class = $params_group['group_class'];
			// $params['params'] = Configuration::get('LEO_MEGAMENU_PARAMS');
			// $show_cavas = Configuration::get('LEO_MEGAMENU_CAVAS');
				
			// $params['params'] = $this->base64Decode($group['params_widget']);
			
			// $current_link = $link->getPageLink('', false, $this->context->language->id);
			// if (isset($params['params']) && !empty($params['params'])) {
				// # validate module
				// $params['params'] = Tools::jsonDecode($params['params']);
			// }
			
			$list_root_menu = Btmegamenu::getMenusRoot($group['id_btmegamenu_group']);
		
			$get_params_widget = array();
			if (count($list_root_menu) > 0)
			{
				foreach ($list_root_menu as $list_root_menu_item)
				{
					$menu_obj = new Btmegamenu($list_root_menu_item['id_btmegamenu']);
					$menu_params_widget = $menu_obj->getParamsWidget();
					if ($menu_params_widget != '')
					{
						$get_params_widget[$list_root_menu_item['id_btmegamenu']] = Tools::jsonDecode($this->base64Decode($menu_params_widget));
					}
					
				}
			}
			
			$params['params'] = $get_params_widget;

			$obj = new Btmegamenu();
			$obj->setModule($this);
			$boostrapmenu = $obj->getFrontTree(0, false, $params['params'],$group['id_btmegamenu_group']);
			$this->smarty->assign('boostrapmenu', $boostrapmenu);
			// $this->smarty->assign('current_link', $current_link);
			$this->smarty->assign('show_cavas', $show_cavas);
			$this->smarty->assign('type_sub', $type_sub);
			$this->smarty->assign('group_type', $group_type);
			$this->smarty->assign('group_class', $group_class);
			// $this->smarty->assign('group_id', $group['id_btmegamenu_group']);
			$this->smarty->assign('megamenu_id', $form_id);
        }

        return true;
    }
	
	public function getMegamenuGroupById($id)
    {
        $this->context = Context::getContext();
        $id_shop = $this->context->shop->id;
        return Db::getInstance(_PS_USE_SQL_SLAVE_)->getRow('
			SELECT *
			FROM '._DB_PREFIX_.'btmegamenu_group gr
			WHERE gr.id_shop = '.(int)$id_shop.'
			AND gr.id_btmegamenu_group = '.(int)$id);
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
        if (file_exists(_PS_MODULE_DIR_.'appagebuilder/libs/LeoDataSample.php')){
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
        $install_module = (int)Configuration::get('AP_INSTALLED_LEOBOOTSTRAPMENU', 0);
        if($install_module)
        {
            Configuration::updateValue('AP_INSTALLED_LEOBOOTSTRAPMENU', '0');    // next : allow restore sample
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
        foreach ($this->hook_support as $value) {
            $res &= $this->registerHook($value);
        }
        # Multishop create new shop
        $res &= $this->registerHook('actionAdminShopControllerSaveAfter');
		
        return $res;
        
    }
	//DONGND:: import group
	public function importGroup()
    {
        $type = Tools::strtolower(Tools::substr(strrchr($_FILES['import_file']['name'], '.'), 1));
		// print_r($type);die();
        if (isset($_FILES['import_file']) && $type == 'txt' && isset($_FILES['import_file']['tmp_name']) && !empty($_FILES['import_file']['tmp_name'])) {
 
            $content = Tools::file_get_contents($_FILES['import_file']['tmp_name']);
            $content = Tools::jsonDecode($this->base64Decode($content), true);
			// echo '<pre>';
			// print_r($content);die();
			if (!is_array($content) || !isset($content['id_btmegamenu_group']) || $content['id_btmegamenu_group'] == '')
			{
				// print_r('test');die();
				return false;
			}
            $language_field = array('title', 'text', 'url', 'description', 'content_text', 'submenu_content_text');
            $languages = Language::getLanguages();
			$shop_id = $this->context->shop->id;
            $lang_list = array();
            foreach ($languages as $lang) {
                # module validation
                $lang_list[$lang['iso_code']] = $lang['id_lang'];
            }

            $override_group = Tools::getValue('override_group');
			$override_widget = Tools::getValue('override_widget');
			// print_r($override_group);die();
            //override or edit
            if ($override_group && BtmegamenuGroup::groupExists($content['id_btmegamenu_group'], $shop_id)) {
				// print_r('test');die();
                $mod_group = new BtmegamenuGroup($content['id_btmegamenu_group']);
                //edit group
                $mod_group = BtmegamenuGroup::setDataForGroup($mod_group, $content, true);
                if (!$mod_group->update()) {
                    # module validation
                    return false;
                }
                // LeoSlideshowGroup::deleteAllSlider($content['id_btmegamenu_group']);
				$this->removeAllMenuOfGroup($content['id_btmegamenu_group']);

				if (count($content['list_menu']) > 0)
				{
					$list_new_id = array();
					foreach ($content['list_menu'] as $menu) {
						
						$mod_menu = new Btmegamenu();
						foreach ($menu as $key => $val) {
							if (in_array($key, $language_field)) {
								foreach ($val as $key_lang => $val_lang) {
									# module validation
									$mod_menu->{$key}[$lang_list[$key_lang]] = $val_lang;
								}
							} else {
								# module validation
								if ($key == 'id_group'){
									$mod_menu->{$key} = $mod_group->id;
								}
								elseif ($key == 'id_parent')
								{
									if ($val != 0)
									{
										$mod_menu->{$key} = $list_new_id[$val];
									}
									else
									{
										$mod_menu->{$key} = $val;
									}
									
								}
								else
								{
									$mod_menu->{$key} = $val;
								}
								
							}
						}
						
						$mod_menu->id = 0;
						if (!$mod_menu->add())
						{
							return false;
						}
						$list_new_id[$menu['id_btmegamenu']] = $mod_menu->id;
					}
				}
            } else {
				// print_r('test1');die();
                $mod_group = new BtmegamenuGroup();
                $mod_group = BtmegamenuGroup::setDataForGroup($mod_group, $content, false);
				// echo '<pre>';
				// print_r($mod_group);die();
                if (!$mod_group->add()) {
                    # module validation
                    return false;
                }
				
				if (count($content['list_menu']) > 0)
				{
					$list_new_id = array();
					foreach ($content['list_menu'] as $menu) {
						
						$mod_menu = new Btmegamenu();
						foreach ($menu as $key => $val) {
							if (in_array($key, $language_field)) {
								foreach ($val as $key_lang => $val_lang) {
									# module validation
									$mod_menu->{$key}[$lang_list[$key_lang]] = $val_lang;
								}
							} else {
								# module validation
								if ($key == 'id_group'){
									$mod_menu->{$key} = $mod_group->id;
								}
								elseif ($key == 'id_parent')
								{
									if ($val != 0)
									{
										$mod_menu->{$key} = $list_new_id[$val];
									}
									else
									{
										$mod_menu->{$key} = $val;
									}
									
								}
								else
								{
									$mod_menu->{$key} = $val;
								}
								
							}
						}
						
						$mod_menu->id = 0;
						if (!$mod_menu->add())
						{
							return false;
						}
						$list_new_id[$menu['id_btmegamenu']] = $mod_menu->id;
					}
									
					//DONGND:: update new id of menu in params widgets group
					// if ($mod_group->params_widget != '')
					// {
						// $params_widget = Tools::jsonDecode($this->base64Decode($mod_group->params_widget),true);
						
						// foreach ($params_widget as $key => $params_widget_item)
						// {
							// $params_widget[$key]['id'] = $list_new_id[$params_widget_item['id']];
						// }
						
						// $mod_group->params_widget = $this->base64Encode(Tools::jsonEncode($params_widget));
						// $mod_group->save();
						
					// }
				}
								            
            }
			
			//DONGND:: import widget
			if (count($content['list_widget']) > 0)
			{
				if (!$this->processImportWidgets($content['list_widget'], $override_widget, $shop_id))
				{
					return false;
				}
				
			}
			// die();
            //add new
            return true;
        }
        //Tools::redirectAdmin('index.php?controller=AdminModules&token='.Tools::getAdminTokenLite('AdminModules').'&configure=leoslideshow&tab_module=leotheme&module_name=leoslideshow&conf=4');
        return false;
    }
	
	//DONGND:: import widgets
	public function importWidgets()
    {
		$type = Tools::strtolower(Tools::substr(strrchr($_FILES['import_widgets_file']['name'], '.'), 1));
		// print_r($type);die();
        if (isset($_FILES['import_widgets_file']) && $type == 'txt' && isset($_FILES['import_widgets_file']['tmp_name']) && !empty($_FILES['import_widgets_file']['tmp_name'])) 
		{
 
            $content = Tools::file_get_contents($_FILES['import_widgets_file']['tmp_name']);
            $content = Tools::jsonDecode($this->base64Decode($content), true);
			$override_import_widgets = Tools::getValue('override_import_widgets');
			// print_r($override_import_widgest);die();
			$shop_id = $this->context->shop->id;
			if (count($content) > 0)
			{
				if (!$this->processImportWidgets($content, $override_import_widgets, $shop_id))
				{
					return false;
				}
			}
			
			// echo '<pre>';
			// print_r($content);die();
			return true;
        }        
        return false;
	}
	
	//DONGND:: process import widgets
	public function processImportWidgets($list_widget, $override, $shop_id)
    {
		$languages = Language::getLanguages();
		
		if (!is_array($list_widget) || !isset($list_widget[0]['id_btmegamenu_widgets']) || $list_widget[0]['id_btmegamenu_widgets'] == '')
		{
			
			return false;
		}
		// print_r(!is_array($list_widget));die();
		// echo '<pre>';
		// print_r($list_widget);die();
		foreach ($list_widget as $widget)
		{
			
			$check_widget_exists = LeoWidget::getWidetByKey($widget['key_widget'], $shop_id);
			// echo $override.'<pre>';
			// print_r($check_widget_exists);
			if ($check_widget_exists['id'] != '' && $override)
			{
				$mod_widget = new LeoWidget($check_widget_exists['id']);
			}
			
			if (($override && $check_widget_exists['id'] == '') || (!$override && $check_widget_exists['id'] == ''))
			{
				$mod_widget = new LeoWidget();
			}
			$mod_widget->name = $widget['name'];
			$mod_widget->type = $widget['type'];
									
			$params_widget = $this->base64Decode($widget['params']);	
			
			foreach ($languages as $lang) {
				# module validation								
				if (strpos($params_widget, '_'.$lang['iso_code'].'"') !== false)
				{							
					$params_widget = str_replace('_'.$lang['iso_code'].'"', '_'.$lang['id_lang'].'"', $params_widget);
				}
			}
			
			$mod_widget->params = $this->base64Encode($params_widget);
			
			if ($check_widget_exists['id'] != '' && $override)
			{
				
				if (!$mod_widget->save())
				{									
					return false;
				}
			}
			
			if (($override && $check_widget_exists['id'] == '') || (!$override && $check_widget_exists['id'] == ''))
			{
				
				$mod_widget->key_widget = $widget['key_widget'];
				$mod_widget->id_shop = $shop_id;
				$mod_widget->id = 0;
			
				if (!$mod_widget->add())
				{
					return false;
				}
			}
		}
		// die();
		return true;
	}
	
	//DONGND:: remove all menu of group when delete group or when import override
	public function removeAllMenuOfGroup($id_group)
	{
		$res = true;
		
		$list_menu = BtmegamenuGroup::getMenuParentByGroup($id_group);
		if (count($list_menu) > 0)
		{
			$list_new_id = array();
			foreach ($list_menu as $key => $list_menu_item)
			{
				$mod_menu = new Btmegamenu($list_menu_item['id_btmegamenu']);
				$res = $mod_menu->delete();
				
			}
			$this->clearCache();
		}
		
		return $res;
	}
	
	//DONGND:: correct module
	public function correctModule()
	{
		Configuration::updateValue('BTMEGAMENU_GROUP_DE', '');
		//DONGND:: change table leowidgets to btmegamenu_widgets
		$correct_widget_table = Db::getInstance()->executeS('SELECT table_name FROM INFORMATION_SCHEMA.tables WHERE TABLE_SCHEMA = "'._DB_NAME_.'" AND TABLE_NAME = "'._DB_PREFIX_.'btmegamenu_widgets"');
		// echo '<pre>';
		// print_r($correct_widget);die();
		if (count($correct_widget_table) < 1)
		{
			$correct_old_widget_table = Db::getInstance()->executeS('SELECT table_name FROM INFORMATION_SCHEMA.tables WHERE TABLE_SCHEMA = "'._DB_NAME_.'" AND TABLE_NAME = "'._DB_PREFIX_.'leowidgets"');
			// echo '<pre>';
			// print_r($correct_old_widget_table);die();
			if (count($correct_old_widget_table) == 1)
			{
				Db::getInstance()->execute('RENAME TABLE `'._DB_PREFIX_.'leowidgets` TO `'._DB_PREFIX_.'btmegamenu_widgets`');
				Db::getInstance()->execute('ALTER TABLE `'._DB_PREFIX_.'btmegamenu_widgets` CHANGE `id_leowidgets` `id_btmegamenu_widgets` int(11) NOT NULL AUTO_INCREMENT');
			}
			else
			{
				Db::getInstance()->execute('
					CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'btmegamenu_widgets`(
					  `id_btmegamenu_widgets` int(11) NOT NULL AUTO_INCREMENT,
					  `name` varchar(250) NOT NULL,
					  `type` varchar(250) NOT NULL,
					  `params` LONGTEXT,
					  `id_shop` int(11) unsigned NOT NULL,
					  `key_widget` int(11)  NOT NULL,
					  PRIMARY KEY (`id_btmegamenu_widgets`,`id_shop`)
					) ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=utf8;
				');
			}
		}
		
		//DONGND:: change id_parent of root menu to 0
		$correct_root_id = Db::getInstance()->getRow('SELECT `id_btmegamenu` FROM `'._DB_PREFIX_.'btmegamenu` WHERE `id_group` = 0 AND `id_parent` = 0');
			
		if ($correct_root_id)
		{
			// echo '<pre>';
			// print_r($correct_root_id);die();
			Db::getInstance()->execute('DELETE FROM `'._DB_PREFIX_.'btmegamenu` WHERE `id_btmegamenu` = '.(int)$correct_root_id['id_btmegamenu']);
			Db::getInstance()->execute('UPDATE `'._DB_PREFIX_.'btmegamenu` SET `id_parent` = 0 WHERE `id_parent` = '.(int)$correct_root_id['id_btmegamenu']);
		}
		
		//DONGND:: move params widget from group to menu
		$correct_params_widgets_group = Db::getInstance()->executeS('SELECT * FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = "'._DB_NAME_.'" AND TABLE_NAME="'._DB_PREFIX_.'btmegamenu_group" AND column_name="params_widget"');
		
		// print_r(count($correct_params_widgets_group));die();
		if (count($correct_params_widgets_group) == 1)
		{
			$correct_params_widgets_menu = Db::getInstance()->executeS('SELECT * FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = "'._DB_NAME_.'" AND TABLE_NAME="'._DB_PREFIX_.'btmegamenu" AND column_name="params_widget"');
			// print_r(count($correct_params_widgets_menu).'aa');die();
			if (count($correct_params_widgets_menu) < 1)
			{
				Db::getInstance()->execute('ALTER TABLE `'._DB_PREFIX_.'btmegamenu` ADD `params_widget` LONGTEXT');
				$list_group = Db::getInstance()->executeS('SELECT * FROM `'._DB_PREFIX_.'btmegamenu_group`');
				
				foreach ($list_group as $list_group_item)
				{
					$group_param_widget = Tools::jsonDecode($this->base64Decode($list_group_item['params_widget']),true);
					
					if (count($group_param_widget) > 0)
					{
						foreach ($group_param_widget as $group_param_widget_item)
						{
							$id_menu = $group_param_widget_item['id'];
							
							unset($group_param_widget_item['id']);
							
							$new_param_widget = $this->base64Encode(Tools::jsonEncode($group_param_widget_item));
							
							Db::getInstance()->execute('UPDATE `'._DB_PREFIX_.'btmegamenu` SET `params_widget` = "'.pSQL($new_param_widget).'" WHERE `id_btmegamenu` = '.(int)$id_menu);
						}
					}
				}
				
			}
			
			Db::getInstance()->execute('ALTER TABLE `'._DB_PREFIX_.'btmegamenu_group` DROP `params_widget`');
		}
		
		//DONGND:: correct randkey
		$correct_randkey = Db::getInstance()->executeS('SELECT * FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = "'._DB_NAME_.'" AND TABLE_NAME="'._DB_PREFIX_.'btmegamenu_group" AND column_name="randkey"');
		if (count($correct_randkey) < 1)
		{
			Db::getInstance()->execute('ALTER TABLE `'._DB_PREFIX_.'btmegamenu_group` ADD `randkey` varchar(255) DEFAULT NULL');
		}
		
		//DONGND:: correct form id for appagebuilder
		$correct_form_id = Db::getInstance()->executeS('SELECT * FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = "'._DB_NAME_.'" AND TABLE_NAME="'._DB_PREFIX_.'btmegamenu_group" AND column_name="form_id"');
		if (count($correct_form_id) < 1)
		{
			Db::getInstance()->execute('ALTER TABLE `'._DB_PREFIX_.'btmegamenu_group` ADD `form_id` varchar(255) DEFAULT NULL');
		}
		
		//DONGND:: auto add randkey for group
		BtmegamenuGroup::autoCreateKey();
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
                LeoBtmegamenuHelper::$id_shop = $shop->id;
                $sample->_id_shop = $shop->id;
                $sample->processImport('leobootstrapmenu');
            }
        }
    }
	
}
