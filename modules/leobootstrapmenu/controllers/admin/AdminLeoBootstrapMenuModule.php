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

class AdminLeoBootstrapMenuModuleController extends ModuleAdminControllerCore
{

    public function __construct()
    {
        parent::__construct();
		if (!Tools::getValue('exportgroup') && !Tools::getValue('exportwidgets'))
		{
			if(Configuration::get('BTMEGAMENU_GROUP_DE') && Configuration::get('BTMEGAMENU_GROUP_DE') != '')
				$url = 'index.php?controller=AdminModules&configure=leobootstrapmenu&editgroup=1&id_group='.Configuration::get('BTMEGAMENU_GROUP_DE').'&tab_module=front_office_features&module_name=leobootstrapmenu&token='.Tools::getAdminTokenLite('AdminModules');
			else
				$url = 'index.php?controller=AdminModules&configure=leobootstrapmenu&tab_module=front_office_features&module_name=leobootstrapmenu&token='.Tools::getAdminTokenLite('AdminModules');
			Tools::redirectAdmin($url);
		}
		
    }
	
	public function postProcess()
    {
		// print_r($this->module);die();
        //DONGND:: export group process
        if (Tools::getValue('exportgroup')) {
            $group = BtmegamenuGroup::getGroupByID(Tools::getValue('id_group'));
			
			//DONGND:: add list menu of group
			$menus = $this->getMenusByGroup(Tools::getValue('id_group'));
			$language_field = array('title', 'text', 'url', 'description', 'content_text', 'submenu_content_text');

            $languages = Language::getLanguages();
            $lang_list = array();
            foreach ($languages as $lang) {
                # module validation
                $lang_list[$lang['id_lang']] = $lang['iso_code'];
            }
			// echo '<pre>';
			// print_r($menus);die();
			
			$list_widgets = '';
			
            foreach ($menus as $menus_item) {
                // $curent_lang = 'en';
				// echo '<pre>';
				// print_r($menus_item);
				if (Tools::getValue('widgets'))
				{
					if ($menus_item['params_widget'] != '')
					{
						$list_widgets .= $this->module->base64Decode($menus_item['params_widget']);
					}
				}
				else
				{
					$menus_item['params_widget'] = '';
				}
                foreach ($menus_item as $key => $value) {
                    if ($key == 'id_lang') {
                        $curent_lang = $lang_list[$value];
                        continue;
                    }
                    if (in_array($key, $language_field)) {
                        $group['list_menu'][$menus_item['id_btmegamenu']][$key][$curent_lang] = $value;
                    } else {
                        # module validation
                        $group['list_menu'][$menus_item['id_btmegamenu']][$key] = $value;
                    }
                }
				
				
            }
			
			// echo '<pre>';
			// print_r($list_widgets);die();
			if (Tools::getValue('widgets'))
			{
				$widget_include = 'with_widgets';
			}
			else
			{
				// $group['params_widget'] = '';
				$widget_include = 'without_widgets';
			}		
			// die();
			// echo '<pre>';		
			// print_r($group);die();
			//DONGND:: add list menu of group
			$group['list_widget'] = array();
			if ($list_widgets != '' && Tools::getValue('widgets'))
			{
				// $list_widget = array();
				// echo '<pre>';		
				// print_r($group);die();
				// $group_widget = $this->module->base64Decode($group['params_widget']);
				$model = new LeoWidget();
				$widget_shop = $model->getWidgets();
				// echo '<pre>';		
				// print_r($widget_shop);die();
				if (count($widget_shop) > 0)
				{
					foreach ($widget_shop as $key=>$widget_shop_item)
					{
						// print_r($widget_shop_item['key_widget']);
						// echo '<br/>';
						// print_r(strpos($group_widget, 'wid-'.$widget_shop_item['key_widget']));
						// echo '<br/>';
						if (strpos($list_widgets, 'wid-'.$widget_shop_item['key_widget']) !== false)
						{						
							$params_widget = $this->module->base64Decode($widget_shop_item['params']);						
							foreach ($languages as $lang) {
								# module validation								
								if (strpos($params_widget, '_'.$lang['id_lang'].'"') !== false)
								{							
									$params_widget = str_replace('_'.$lang['id_lang'].'"', '_'.$lang['iso_code'].'"', $params_widget);
								}
							}
							
							$widget_shop_item['params'] = $this->module->base64Encode($params_widget);
							$group['list_widget'][] = $widget_shop_item;
							// echo '<pre>';
							// print_r($params_widget);
							// echo '<br/>';
						}
					}
				}
				
			}
			// print_r(time());
			// echo '<pre>';		
			// print_r($group);die();
			// die();
			
            header('Content-Type: plain/text');
            header('Content-Disposition: Attachment; filename=export_megamenu_group_'.Tools::getValue('id_group').'_'.$widget_include.'_'.time().'.txt');
            header('Pragma: no-cache');
            die($this->module->base64Encode(Tools::jsonEncode($group)));
        }
		
		//DONGND:: export widgets process
        if (Tools::getValue('exportwidgets')) {		
			$languages = Language::getLanguages();	
			$model = new LeoWidget();	
			$widget_shop = $model->getWidgets();
			
			$widgets = array();
			if (count($widget_shop) > 0)
			{
				foreach ($widget_shop as $key=>$widget_shop_item)
				{
					$params_widget = $this->module->base64Decode($widget_shop_item['params']);						
					foreach ($languages as $lang) {
						# module validation								
						if (strpos($params_widget, '_'.$lang['id_lang'].'"') !== false)
						{							
							$params_widget = str_replace('_'.$lang['id_lang'].'"', '_'.$lang['iso_code'].'"', $params_widget);
						}
					}
					
					$widget_shop_item['params'] = $this->module->base64Encode($params_widget);
					$widgets[] = $widget_shop_item;
				}
			}
			
			header('Content-Type: plain/text');
            header('Content-Disposition: Attachment; filename=export_widgets_'.time().'.txt');
            header('Pragma: no-cache');		
			die($this->module->base64Encode(Tools::jsonEncode($widgets)));
		}

        parent::postProcess();
    }
	
	//DONGND:: get all data of menu by group
	public function getMenusByGroup($id_group)
    {
        return Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS('
                    SELECT btm.*,btml.*
                    FROM '._DB_PREFIX_.'btmegamenu btm
                    LEFT JOIN '._DB_PREFIX_.'btmegamenu_lang btml ON (btm.id_btmegamenu = btml.id_btmegamenu)
                    WHERE btm.id_group = '.(int)$id_group.'
                    ORDER BY btm.id_parent ASC');
    }
}
