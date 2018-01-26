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

class ApColumn extends ApShortCodeBase
{
    public $name = 'ApColumn';
    public $for_module = 'manage';

    public function getInfo()
    {
        return array('label' => $this->l('Column'), 'position' => 2, 'desc' => $this->l('A column can have one or more widget'),
            'tag' => 'content structure');
    }

    public function getAdditionConfig()
    {
        return array(
            array(
                'type' => '',
                'name' => 'xl',
                'default' => '12'
            ),
            array(
                'type' => '',
                'name' => 'lg',
                'default' => '12'
            ),
            array(
                'type' => '',
                'name' => 'md',
                'default' => '12'
            ),
            array(
                'type' => '',
                'name' => 'sm',
                'default' => '12'
            ),
            array(
                'type' => '',
                'name' => 'xs',
                'default' => '12'
            ),
            array(
                'type' => '',
                'name' => 'sp',
                'default' => '12'
            )
        );
    }

    public function getConfigList()
    {
        $input = array(
            array(
                'type' => 'tabConfig',
                'name' => 'title',
                'values' => array(
                    'aprow_general' => $this->l('General'),
                    'aprow_style' => $this->l('Width'),
                    'aprow_animation' => $this->l('Animation'),
                    'aprow_exceptions' => $this->l('Exceptions'))
            ),
            array(
                'type' => 'text',
                'name' => 'title',
                'label' => $this->l('Title'),
                'desc' => $this->l('Auto hide if leave it blank'),
                'lang' => 'true',
                'form_group_class' => 'aprow_general',
                'default' => ''
            ),
            array(
                'type' => 'textarea',
                'name' => 'sub_title',
                'label' => $this->l('Sub Title'),
                'lang' => true,
                'values' => '',
                'autoload_rte' => false,
                'form_group_class' => 'aprow_general',
                'default' => ''
            ),
            array(
                'type' => 'text',
                'name' => 'id',
                'label' => $this->l('ID'),
                'form_group_class' => 'aprow_general',
                'desc' => $this->l('Use for css and javascript'),
                'default' => ''
            ),
            array(
                'type' => 'ApColumnclass',
                'name' => 'class',
                'leolabel' => $this->l('CSS Class'),
                'values' => '',
                'default' => '',
                'form_group_class' => 'aprow_general',
            ),
            array(
                'type' => 'column_width',
                'name' => 'width',
                'values' => '',
                'columnGrids' => ApPageSetting::getColumnGrid(),
                'form_group_class' => 'aprow_style',
            ),
            array(
                'type' => 'select',
                'label' => $this->l('Animations'),
                'name' => 'animation',
                'class' => 'animation-select',
                'options' => array(
                    'optiongroup' => array(
                        'label' => 'name',
                        'query' => ApPageSetting::getAnimations(),
                    ),
                    'options' => array(
                        'id' => 'id',
                        'name' => 'name',
                        'query' => 'query',
                    ),
                ),
                'form_group_class' => 'aprow_animation',
            ),
            array(
                'type' => 'html',
                'name' => 'default_html',
                'html_content' => '<div id="animationSandbox">Prestashop.com</div>',
                'form_group_class' => 'aprow_animation animate_sub',
            ),
            array(
                'type' => 'text',
                'label' => $this->l('Delay'),
                'name' => 'animation_delay',
                'default' => '2',
                'suffix' => 's',
                'class' => 'fixed-width-xs',
                'form_group_class' => 'aprow_animation animate_sub',
            ),
            array(
                'type' => 'select',
                'label' => $this->l('Specific Controller'),
                'name' => 'specific_type',
                'class' => 'form-action',
                'options' => array(
                    'query' => array(
                        array(
                            'id' => 'all',
                            'name' => $this->l('Show on all Page Controller'),
                        ),
                        array(
                            'id' => 'index',
                            'name' => $this->l('Show on only Index'),
                        ),
                        array(
                            'id' => 'category',
                            'name' => $this->l('Show on only Category'),
                        ),
                        array(
                            'id' => 'product',
                            'name' => $this->l('Show on only Product'),
                        ),
                        array(
                            'id' => 'cms',
                            'name' => $this->l('Show on only CMS'),
                        )
                    ),
                    'id' => 'id',
                    'name' => 'name'
                ),
                'form_group_class' => 'aprow_exceptions',
                'default' => 'all'
            ),
            array(
                'type' => 'reloadControler',
                'label' => $this->l('AJAX Reload Controller'),
                'name' => 'reloadControler',
                'default' => '',
                'form_group_class' => 'aprow_exceptions specific_type_sub specific_type-all',
                'hint' => 'If website have new a Controller, click to generate Controller again.',
            ),
            array(
                'type' => 'text',
                'label' => $this->l('Controller ID'),
                'name' => 'controller_id',
                'desc' => $this->l('Example: 1,2,3'),
                'default' => '',
                'form_group_class' => 'aprow_exceptions specific_type_sub specific_type-category specific_type-product specific_type-cms',
            ),
            array(
                'type' => 'apExceptions',
                'name' => 'controller_pages',
                'form_group_class' => 'aprow_exceptions specific_type_sub specific_type-all',
            ),
        );
        return $input;
    }
    
    public function endRenderForm()
    {
        $this->helper->module = new $this->module_name();
        $this->helper->tpl_vars['exception_list'] = $this->displayModuleExceptionList();
    }
    
    public function displayModuleExceptionList()
    {
        $controllers = array();
        $controllers_modules = array();
        $controllers_modules['admin'] = array();
        $controllers_modules['front'] = array();
        
        if(Tools::getValue('reloadControllerException'))
        {
            $controllers = Dispatcher::getControllers(_PS_FRONT_CONTROLLER_DIR_);
            $controllers_modules = array(
                'admin' => Dispatcher::getModuleControllers('admin'),
                'front' => Dispatcher::getModuleControllers('front'),
            );
            
            Configuration::updateValue('AP_CACHE_FRONT_CONTROLLER_EXCEPTION', apPageHelper::correctEnCodeData(Tools::jsonEncode($controllers)));
            Configuration::updateValue('AP_CACHE_FRONT_MODULE_EXCEPTION', apPageHelper::correctEnCodeData(Tools::jsonEncode($controllers_modules['admin'])));
            Configuration::updateValue('AP_CACHE_ADMIN_MODULE_EXCEPTION', apPageHelper::correctEnCodeData(Tools::jsonEncode($controllers_modules['front'])));
        }else{
            if(Configuration::get('AP_CACHE_FRONT_CONTROLLER_EXCEPTION') === false)
            {
                # First Time : write to config
                $controllers = Dispatcher::getControllers(_PS_FRONT_CONTROLLER_DIR_);
                Configuration::updateValue('AP_CACHE_FRONT_CONTROLLER_EXCEPTION', apPageHelper::correctEnCodeData(Tools::jsonEncode($controllers)));
            }else{
                # Second Time : read from config
                $controllers = Tools::jsonDecode(apPageHelper::correctDeCodeData(Configuration::get('AP_CACHE_FRONT_CONTROLLER_EXCEPTION')), true);
            }
            
            if(Configuration::get('AP_CACHE_FRONT_MODULE_EXCEPTION') === false)
            {
                # First Time : write to config
                $controllers_modules['admin'] = Dispatcher::getModuleControllers('admin');
                Configuration::updateValue('AP_CACHE_FRONT_MODULE_EXCEPTION', apPageHelper::correctEnCodeData(Tools::jsonEncode($controllers_modules['admin'])));
            }else{
                # Second Time : read from config
                $controllers_modules['admin'] = Tools::jsonDecode(apPageHelper::correctDeCodeData(Configuration::get('AP_CACHE_FRONT_MODULE_EXCEPTION')), true);
            }
            
            if(Configuration::get('AP_CACHE_ADMIN_MODULE_EXCEPTION') === false)
            {
                # First Time : write to config
                $controllers_modules['front'] = Dispatcher::getModuleControllers('front');
                Configuration::updateValue('AP_CACHE_ADMIN_MODULE_EXCEPTION', apPageHelper::correctEnCodeData(Tools::jsonEncode($controllers_modules['front'])));
            }else{
                # Second Time : read from config
                $controllers_modules['front'] = Tools::jsonDecode(apPageHelper::correctDeCodeData(Configuration::get('AP_CACHE_ADMIN_MODULE_EXCEPTION')), true);
            }
            
        }
        
        
        
        $controller = Tools::getValue('controller_pages');
        $arr_controllers = explode(',', $controller);
        $arr_controllers = array_map('trim', $arr_controllers);

        $content = '<p><input type="text" name="controller_pages" value="'.$controller.'" class="em_text"/></p>';
        $content .= '<p><select size="25" name="controller_pages_select" class="em_list" multiple="multiple">';
        
        
        $content .= '<option disabled="disabled">'.$this->l('________________________________________ CORE ________________________________________').'</option>';
        foreach ($controllers as $k => $v) {
            if( in_array($k, $arr_controllers)){
                $content .= '<option value="'.$k.'" selected="selected">'.$k.'</option>';
            }else{
                $content .= '<option value="'.$k.'">'.$k.'</option>';
            }
        }
        $modules_controllers_type = array('front' => $this->l('Front modules controller'), 'admin' => $this->l('Admin modules controller'));
        foreach ($modules_controllers_type as $type => $label) {
            $content .= '<option disabled="disabled">________________________________________ '.$label.' ________________________________________</option>';
            $all_modules_controllers = $controllers_modules[$type];
            foreach ($all_modules_controllers as $module => $modules_controllers) {
                foreach ($modules_controllers as $cont) {
                    $key = 'module-'.$module.'-'.$cont;
                    if( in_array($key, $arr_controllers)){
                        $content .= '<option value="module-'.$module.'-'.$cont.'" selected="selected">module__'.$module.'__'.$cont.'</option>';
                    }else{
                        $content .= '<option value="module-'.$module.'-'.$cont.'">module__'.$module.'__'.$cont.'</option>';
                    }
                }
            }
        }
        $content .= '</select></p>';
        return $content;
    }
    
    public function prepareFontContent($assign, $module = null)
    {
        // validate module
        unset($module);
        if (!isset($assign['formAtts']['animation']) || $assign['formAtts']['animation'] == 'none') {
            $assign['formAtts']['animation'] = 'none';
            $assign['formAtts']['animation_delay'] = '';
        } elseif ($assign['formAtts']['animation'] != 'none' && (int)$assign['formAtts']['animation_delay'] > 0) {
            // validate module
            $assign['formAtts']['animation_delay'] .= 's';
        } elseif ($assign['formAtts']['animation'] != 'none' && (int)$assign['formAtts']['animation_delay'] <= 0) {
            // Default delay
            $assign['formAtts']['animation_delay'] = '1s';
        }
        $assign['formAtts']['class'] = str_replace('.', '-', $assign['formAtts']['class']);
        return $assign;
    }
}
