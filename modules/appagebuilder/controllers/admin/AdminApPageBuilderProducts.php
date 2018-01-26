<?php
/**
 * 2007-2015 Apollotheme
 *
 * NOTICE OF LICENSE
 *
 * ApPageBuilder is module help you can build content for your shop
 *
 * DISCLAIMER
 *
 *  @Module Name: AP Page Builder
 *  @author    Apollotheme <apollotheme@gmail.com>
 *  @copyright 2007-2015 Apollotheme
 *  @license   http://apollotheme.com - prestashop template provider
 */

if (!defined('_PS_VERSION_')) {
    # module validation
    exit;
}

require_once(_PS_MODULE_DIR_.'appagebuilder/classes/ApPageBuilderProductsModel.php');

class AdminApPageBuilderProductsController extends ModuleAdminControllerCore
{
    private $theme_name = '';
    public $module_name = 'appagebuilder';
    public $tpl_save = '';
    public $file_content = array();
    public $explicit_select;
    public $order_by;
    public $order_way;
    public $profile_css_folder;
    public $module_path;
//    public $module_path_resource;
    public $str_search = array();
    public $str_relace = array();
    public $theme_dir;

    public function __construct()
    {
        $this->bootstrap = true;
        $this->table = 'appagebuilder_products';
        $this->className = 'ApPageBuilderProductsModel';
        $this->lang = false;
        $this->explicit_select = true;
        $this->allow_export = true;
        $this->context = Context::getContext();
        $this->_join = '
			INNER JOIN `'._DB_PREFIX_.'appagebuilder_products_shop` ps ON (ps.`id_appagebuilder_products` = a.`id_appagebuilder_products`)';
        $this->_select .= ' ps.active as active, ';

        $this->order_by = 'id_appagebuilder_products';
        $this->order_way = 'DESC';
        parent::__construct();
        $this->fields_list = array(
            'id_appagebuilder_products' => array(
                'title' => $this->l('ID'),
                'align' => 'center',
                'width' => 50,
                'class' => 'fixed-width-xs'
            ),
            'name' => array(
                'title' => $this->l('Name'),
                'width' => 140,
                'type' => 'text',
                'filter_key' => 'a!name'
            ),
            'plist_key' => array(
                'title' => $this->l('Product List Key'),
                'filter_key' => 'a!plist_key',
                'type' => 'text',
                'width' => 140,
            ),
            'class' => array(
                'title' => $this->l('Class'),
                'width' => 140,
                'type' => 'text',
                'filter_key' => 'a!class',
                'orderby' => false
            ),
            'active' => array(
                'title' => $this->l('Is Default'),
                'active' => 'status',
                'filter_key' => 'ps!active',
                'align' => 'text-center',
                'type' => 'bool',
                'class' => 'fixed-width-sm',
                'orderby' => false
            ),
        );
        $this->bulk_actions = array(
            'delete' => array(
                'text' => $this->l('Delete selected'),
                'confirm' => $this->l('Delete selected items?'),
                'icon' => 'icon-trash'
            )
        );
        $this->theme_dir = _PS_THEME_DIR_;

        $this->_where = ' AND ps.id_shop='.(int)$this->context->shop->id;
        $this->theme_name = _THEME_NAME_;
        $this->profile_css_folder = $this->theme_dir.'modules/'.$this->module_name.'/';
        $this->module_path = __PS_BASE_URI__.'modules/'.$this->module_name.'/';
//        $this->module_path_resource = $this->module_path.'views/';
        $this->str_search = array('_APAMP_', '_APQUOT_', '_APAPOST_', '_APTAB_', '_APNEWLINE_', '_APENTER_', '_APOBRACKET_', '_APCBRACKET_');
        $this->str_relace = array('&', '\"', '\'', '\t', '\r', '\n', '[', ']');
    }

    public function renderView()
    {
        $object = $this->loadObject();
        if ($object->page == 'product_detail') {
            $this->redirect_after = Context::getContext()->link->getAdminLink('AdminApPageBuilderProductDetail');
        } else {
            $this->redirect_after = Context::getContext()->link->getAdminLink('AdminApPageBuilderHome');
        }
        $this->redirect_after .= '&id_appagebuilder_products='.$object->id;
        $this->redirect();
    }

    public function postProcess()
    {
        parent::postProcess();
        if (Tools::getIsset('duplicateappagebuilder_products')) {
            
            if (!$this->access('add')) {
                $this->errors[] = $this->trans('You do not have permission to duplicate (permision add).', array(), 'Admin.Notifications.Error');
            }else{
                $id = Tools::getValue('id_appagebuilder_products');
                $model = new ApPageBuilderProductsModel($id);
                $duplicate_object = $model->duplicateObject();
                $duplicate_object->name = $this->l('Duplicate of').' '.$duplicate_object->name;
                $old_key = $duplicate_object->plist_key;
                $duplicate_object->plist_key = 'plist'.ApPageSetting::getRandomNumber();
                if ($duplicate_object->add()) {
                    //duplicate shortCode
                    $filecontent = Tools::file_get_contents($this->theme_dir.'profiles/'.$old_key.'.tpl');
                    ApPageSetting::writeFile($this->theme_dir.'profiles/', $duplicate_object->plist_key.'.tpl', $filecontent);
                    $this->redirect_after = self::$currentIndex.'&token='.$this->token;
                    $this->redirect();
                } else {
                    Tools::displayError('Can not duplicate Profiles');
                }
            }
        }
        if (Tools::isSubmit('saveELement')) {
            $filecontent = Tools::getValue('filecontent');
            $fileName = Tools::getValue('fileName');
            if (!is_dir($this->theme_dir.'modules/appagebuilder/views/templates/front/products/')) {
                if (!is_dir($this->theme_dir.'modules/appagebuilder/')) {
                    mkdir($this->theme_dir.'modules/appagebuilder/', 0755, true);
                }
                if (!is_dir($this->theme_dir.'modules/appagebuilder/views')) {
                    mkdir($this->theme_dir.'modules/appagebuilder/views', 0755, true);
                }
                if (!is_dir($this->theme_dir.'modules/appagebuilder/views/templates/')) {
                    mkdir($this->theme_dir.'modules/appagebuilder/views/templates/', 0755, true);
                }
                if (!is_dir($this->theme_dir.'modules/appagebuilder/views/templates/front/')) {
                    mkdir($this->theme_dir.'modules/appagebuilder/views/templates/front/', 0755, true);
                }
                if (!is_dir($this->theme_dir.'modules/appagebuilder/views/templates/front/products/')) {
                    mkdir($this->theme_dir.'modules/appagebuilder/views/templates/front/products/', 0755, true);
                }
            }
            ApPageSetting::writeFile($this->theme_dir.'modules/appagebuilder/views/templates/front/products/', $fileName.'.tpl', $filecontent);
        }
    }

    public function convertObjectToTpl($object_form)
    {
        $tpl = '';
        foreach ($object_form as $object) {
            if ($object['name'] == 'functional_buttons') {
                $tpl .= ApPageSetting::getProductFunctionalButtons();
                $tpl .= $this->convertObjectToTpl($object['element']);
                $tpl .= '</div>';
            } else if ($object['name'] == 'code') {
                $tpl .= $object['code'];
            } else {
                if (!isset($this->file_content[$object['name']])) {
                    $this->returnFileContent($object['name']);
                }
                $tpl .= $this->file_content[$object['name']];
            }
        }
        return $tpl;
    }

    public function returnFileContent($pelement)
    {
        $tpl_dir = $this->theme_dir.'modules/appagebuilder/views/templates/front/products/'.$pelement.'.tpl';
        if (!file_exists($tpl_dir)) {
            $tpl_dir = _PS_MODULE_DIR_.'appagebuilder/views/templates/front/products/'.$pelement.'.tpl';
        }
        $this->file_content[$pelement] = Tools::file_get_contents($tpl_dir);
        return $this->file_content[$pelement];
    }

    public function renderList()
    {
        if (Tools::getIsset('pelement')) {
            $helper = new HelperForm();
            $helper->submit_action = 'saveELement';
            $inputs = array(
                array(
                    'type' => 'textarea',
                    'name' => 'filecontent',
                    'label' => $this->l('File Content'),
                    'desc' => $this->l('Please carefully when edit tpl file'),
                ),
                array(
                    'type' => 'hidden',
                    'name' => 'fileName',
                )
            );
            $fields_form = array(
                'form' => array(
                    'legend' => array(
                        'title' => sprintf($this->l('You are Editing file: %s'), Tools::getValue('pelement').'.tpl'),
                        'icon' => 'icon-cogs'
                    ),
                    'action' => Context::getContext()->link->getAdminLink('AdminApPageBuilderShortcodes'),
                    'input' => $inputs,
                    'name' => 'importData',
                    'submit' => array(
                        'title' => $this->l('Save'),
                        'class' => 'button btn btn-default pull-right'
                    ),
                    'tinymce' => false,
                ),
            );
            $helper->tpl_vars = array(
                'fields_value' => $this->getFileContent()
            );
            return $helper->generateForm(array($fields_form));
        }
        $this->initToolbar();
        $this->addRowAction('edit');
        $this->addRowAction('duplicate');
        $this->addRowAction('delete');
        return parent::renderList();
    }

    public function getFileContent()
    {
        $pelement = Tools::getValue('pelement');
        $tpl_dir = $this->theme_dir.'modules/appagebuilder/views/templates/front/products/'.$pelement.'.tpl';
        if (!file_exists($tpl_dir)) {
            $tpl_dir = _PS_MODULE_DIR_.'appagebuilder/views/templates/front/products/'.$pelement.'.tpl';
        }
        return array('fileName' => $pelement, 'filecontent' => Tools::file_get_contents($tpl_dir));
    }

    public function setHelperDisplay(Helper $helper)
    {
        parent::setHelperDisplay($helper);
        $this->helper->module = APPageBuilder::getInstance();
    }

    public function processDelete()
    {
        $object = $this->loadObject();
        Tools::deleteFile($this->theme_dir.'profiles/'.$object->plist_key.'.tpl');
        parent::processDelete();
    }

    public function renderForm()
    {
        if (!$this->access('edit')) {
//            $this->errors[] = $this->trans('You do not have permission to edit.', array(), 'Admin.Notifications.Error');
            return;
        }
        $this->initToolbar();
        $this->context->controller->addJqueryUI('ui.sortable');
        $this->context->controller->addJqueryUI('ui.draggable');
        $this->context->controller->addJs(apPageHelper::getJsAdminDir().'admin/form.js');
        $this->context->controller->addJs(apPageHelper::getJsAdminDir().'admin/product-list.js');
        $this->context->controller->addCss(apPageHelper::getCssAdminDir().'admin/form.css');
        $source_file = Tools::scandir(_PS_MODULE_DIR_.'appagebuilder/views/templates/front/products/', 'tpl');
        if (is_dir($this->theme_dir.'modules/appagebuilder/views/templates/front/products/')) {
            $source_template_file = Tools::scandir($this->theme_dir.'modules/appagebuilder/views/templates/front/products/', 'tpl');
            $source_file = array_merge($source_file, $source_template_file);
        }
        $elements = array();
        $icon_list = ApPageSetting::getProductElementIcon();
        foreach ($source_file as $value) {
            $fileName = basename($value, '.tpl');
            if ($fileName == 'index') {
                continue;
            }
            $elements[$fileName] = array(
                'name' => str_replace('_', ' ', $fileName),
                'icon' => (isset($icon_list[$fileName]) ? $icon_list[$fileName] : 'icon-sun'));
        }
        $params = array('gridLeft' => array(), 'gridRight' => array());

        $this->object->params = str_replace($this->str_search, $this->str_relace, $this->object->params);

        if (isset($this->object->params)) {
            $params = Tools::jsonDecode($this->object->params, true);
        }

        //$params['gridLeft'] = $this->replaceSpecialStringToHtml($params['gridLeft']);
        //$params['gridRight'] = $this->replaceSpecialStringToHtml($params['gridRight']);

        $block_list = array(
            'gridLeft' => array('title'=> 'Product-Image', 'class'=>'left-block'),
            'gridRight' => array('title'=> 'Product-Meta', 'class'=>'right-block'),
        );
        $this->fields_form = array(
            'legend' => array(
                'title' => $this->l('Ap Profile Manage'),
                'icon' => 'icon-folder-close'
            ),
            'input' => array(
                array(
                    'type' => 'text',
                    'label' => $this->l('Name'),
                    'name' => 'name',
                    'required' => true,
                    'hint' => $this->l('Invalid characters:').' &lt;&gt;;=#{}'
                ),
                array(
                    'type' => 'text',
                    'label' => $this->l('Product List Key'),
                    'name' => 'plist_key',
                    'readonly' => 'readonly',
                    'desc' => $this->l('Tpl File name'),
                ),
                array(
                    'label' => $this->l('Class'),
                    'type' => 'text',
                    'name' => 'class',
                    'width' => 140
                ),
                array(
                    'type' => 'ap_proGrid',
                    'name' => 'ap_proGrid',
                    'label' => $this->l('Layout'),
                    'elements' => $elements,
                    'params' => $params,
                    'blockList' => $block_list
                ),
                array(
                    'type' => 'hidden',
                    'name' => 'params'
                ),
                array(
                    'type' => 'hidden',
                    'name' => 'submitAddappagebuilder_productsAndStay',
                )
            ),
            'buttons' => array(
                'save-and-stay' => array(
                    'title' => $this->l('Save and Stay'),
                    'id' => 'saveAndStay',
                    'type' => 'button',
                    'class' => 'btn btn-default pull-right ',
                    'icon' => 'process-icon-save')
            )
        );
        return parent::renderForm();
    }

    public function replaceSpecialStringToHtml($arr)
    {
        foreach ($arr as &$v) {
            if ($v['name'] == 'code') {
                // validate module
                $v['code'] = str_replace($this->str_search, $this->str_relace, $v['code']);
            } else {
                if ($v['name'] == 'functional_buttons') {
                    foreach ($v as &$f) {
                        if ($f['name'] == 'code') {
                            // validate module
                            $f['code'] = str_replace($this->str_search, $this->str_relace, $f['code']);
                        }
                    }
                }
            }
        }
        return $arr;
    }

    public function getFieldsValue($obj)
    {
        $file_value = parent::getFieldsValue($obj);
        if (!$obj->id) {
            $num = ApPageSetting::getRandomNumber();
            $file_value['plist_key'] = 'plist'.$num;
            $file_value['name'] = $file_value['plist_key'];
            $file_value['class'] = 'product-list-'.$num;
        }
        return $file_value;
    }

    public function processAdd()
    {
        if ($obj = parent::processAdd()) {
            $this->saveTplFile($obj->plist_key, $obj->params);
        }
    }

    public function processUpdate()
    {
        if ($obj = parent::processUpdate()) {
            $this->saveTplFile($obj->plist_key, $obj->params);
        }
    }

    public function saveTplFile($plist_key, $params)
    {
        // validate module
        unset($params);
        //if(Tools::get)
        $data_form = str_replace($this->str_search, $this->str_relace, Tools::getValue('params', ''));
        $data_form = Tools::jsonDecode($data_form, true);

        $grid_left = $data_form['gridLeft'];
        $grid_right = $data_form['gridRight'];
        $tpl_grid = ApPageSetting::getProductContainer();
        $tpl_grid .= ApPageSetting::getProductLeftBlock().$this->convertObjectToTpl($grid_left)."</div>\n";
        $tpl_grid .= ApPageSetting::getProductRightBlock().$this->convertObjectToTpl($grid_right)."</div>\n";
        $tpl_grid .= ApPageSetting::getProductContainerEnd();
        $folder = $this->theme_dir.'profiles/';
        if (!is_dir($folder)) {
            mkdir($folder, 0755, true);
        }
        $file = $plist_key.'.tpl';
        $tpl_grid = preg_replace('/\{\*[\s\S]*?\*\}/', '', $tpl_grid);
        $tpl_grid = str_replace(" mod='appagebuilder'", '', $tpl_grid);

        //die($tpl_grid."--");
        ApPageSetting::writeFile($folder, $file, $tpl_grid);
    }

    public function processStatus()
    {
        if (Validate::isLoadedObject($object = $this->loadObject())) {
            if ($object->toggleStatus()) {
                $matches = array();
                if (preg_match('/[\?|&]controller=([^&]*)/', (string)$_SERVER['HTTP_REFERER'], $matches) !== false && Tools::strtolower($matches[1]) != Tools::strtolower(preg_replace('/controller/i', '', get_class($this)))) {
                    $this->redirect_after = preg_replace('/[\?|&]conf=([^&]*)/i', '', (string)$_SERVER['HTTP_REFERER']);
                } else {
                    $this->redirect_after = self::$currentIndex.'&token='.$this->token;
                }
            }
        } else {
            $this->errors[] = Tools::displayError('An error occurred while updating the status for an object.')
                    .'<b>'.$this->table.'</b> '.Tools::displayError('(cannot load object)');
        }
        return $object;
    }
    
    public function displayDuplicateLink($token = null, $id, $name = null)
    {
        $controller = 'AdminApPageBuilderProducts';
        $token = Tools::getAdminTokenLite($controller);
        $html = '<a href="#" title="Duplicate" onclick="confirm_link(\'\', \'Duplicate Product List ID '.$id.'. If you wish to proceed, click &quot;Yes&quot;. If not, click &quot;No&quot;.\', \'Yes\', \'No\', \'index.php?controller='.$controller.'&amp;id_appagebuilder_products='.$id.'&amp;duplicateappagebuilder_products&amp;token='.$token.'\', \'#\')">
            <i class="icon-copy"></i> Duplicate
        </a>';
        return $html;
    }
}
