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

class BtmegamenuGroup extends ObjectModel
{
    public $title;
    public $active;
    public $hook;
    public $position;
    public $id_shop;
    public $params;
    
    //DONGD:: check call via appagebuilder
    public $active_ap;
    public $randkey;
    public $data = array();
	public $form_id;
	
	const GROUP_STATUS_DISABLE = '0';
    const GROUP_STATUS_ENABLE = '1';
    /**
     * @see ObjectModel::$definition
     */
    public static $definition = array(
        'table' => 'btmegamenu_group',
        'primary' => 'id_btmegamenu_group',
        'fields' => array(
            'title' => array('type' => self::TYPE_STRING, 'lang' => false, 'validate' => 'isCleanHtml', 'required' => true, 'size' => 255),
            'active' => array('type' => self::TYPE_BOOL, 'validate' => 'isBool', 'required' => true),
            //'hook' => array('type' => self::TYPE_STRING, 'lang' => false, 'validate' => 'isCleanHtml', 'required' => true, 'size' => 64),
            'hook' => array('type' => self::TYPE_STRING, 'lang' => false, 'validate' => 'isCleanHtml', 'size' => 64),
            'position' => array('type' => self::TYPE_INT),
            'id_shop' => array('type' => self::TYPE_INT, 'validate' => 'isunsignedInt', 'required' => true),
            'params' => array('type' => self::TYPE_HTML, 'lang' => false),
            
            'active_ap' => array('type' => self::TYPE_BOOL, 'validate' => 'isBool'),
            'randkey' => array('type' => self::TYPE_STRING, 'lang' => false, 'size' => 255),
			'form_id' => array('type' => self::TYPE_STRING, 'lang' => false, 'size' => 255),
        )
    );

    public function add($autodate = true, $null_values = false)
    {
        $res = parent::add($autodate, $null_values);

        return $res;
    }

    public static function groupExists($id_group, $id_shop = null)
    {
        $req = 'SELECT gr.`id_btmegamenu_group` as id_group 
				FROM `'._DB_PREFIX_.'btmegamenu_group` gr 
				WHERE gr.`id_btmegamenu_group` = '.(int)$id_group;
		if ($id_shop != null)
		{
			$req .= ' AND gr.`id_shop` = '.(int)$id_shop;
		}
        $row = Db::getInstance(_PS_USE_SQL_SLAVE_)->getRow($req);
        return ($row);
    }

    public static function getGroups($active, $id_shop = null)
    {
        // $this->context = Context::getContext();
        if (!isset($id_shop)) {
            $id_shop = Context::getContext()->shop->id;
        }
        $req = 'SELECT * 
				FROM `'._DB_PREFIX_.'btmegamenu_group` gr 
				WHERE (`id_shop` = '.(int)$id_shop.')'.
                ($active ? ' AND gr.`active` = 1' : ' ').' ORDER BY gr.position';
        return Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($req);
    }

    // public static function deleteAllSlider($id_group)
    // {
        // $sql = 'SELECT sl.`id_leoslideshow_slides` as id
				// FROM `'._DB_PREFIX_.'leoslideshow_slides` sl
				// WHERE sl.`id_group` = '.(int)$id_group;
        // $sliders = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);

        // if ($sliders) {
            // $where = '';
            // foreach ($sliders as $sli) {
                // # module validation
                // $where .= $where ? ','.$sli['id'] : $sli['id'];
            // }
            // $sql = 'DELETE FROM `'._DB_PREFIX_.'leoslideshow_slides_lang` '
                    // .'WHERE `id_leoslideshow_slides` IN ('.$where.')';
            // Db::getInstance()->execute($sql);   # module validation
        // }
    // }

    public function delete()
    {
        $res = true;

        $sql = 'DELETE FROM `'._DB_PREFIX_.'btmegamenu_group` '
                .'WHERE `id_btmegamenu_group` = '.(int)$this->id;
        $res &= Db::getInstance()->execute($sql);
		// Db::getInstance()->execute('DELETE FROM `'._DB_PREFIX_.'btmegamenu` '
                // .'WHERE `id_btmegamenu_group` = '.(int)$this->id);
        //$this->deleteAllSlider((int)$this->id);
		$sql = 'SELECT bt.`id_btmegamenu` as id
				FROM `'._DB_PREFIX_.'btmegamenu` bt
				WHERE bt.`id_group` = '.(int)$this->id;
        $btmegamenu = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);

        if ($btmegamenu) {
            $where = '';
            foreach ($btmegamenu as $bt) {
                # module validation
                $where .= $where ? ','.(int)$bt['id'] : (int)$bt['id'];
            }
			$sql = 'DELETE FROM `'._DB_PREFIX_.'btmegamenu` '
                    .'WHERE `id_btmegamenu` IN ('.$where.')';
            Db::getInstance()->execute($sql);   # module validation
            $sql = 'DELETE FROM `'._DB_PREFIX_.'btmegamenu_lang` '
                    .'WHERE `id_btmegamenu` IN ('.$where.')';
            Db::getInstance()->execute($sql);   # module validation
			$sql = 'DELETE FROM `'._DB_PREFIX_.'btmegamenu_shop` '
                    .'WHERE `id_btmegamenu` IN ('.$where.')';
            Db::getInstance()->execute($sql);   # module validation
        }
		
        $res &= parent::delete();
        return $res;
    }

    /**
     * Get and validate StartWithSlide field.
     */
    public static function showStartWithSlide($start_with_slide = 0, $slider = array())
    {
        $result = 1;
        if (is_array($slider)) {
            $start_with_slide = (int)$start_with_slide;
            $slider_num = count($slider);
            // 1 <= $start_with_slide <= $slider_num
            if (1 <= $start_with_slide && $start_with_slide <= $slider_num) {
                $result = $start_with_slide;
            }
        }

        $result--; // index begin from 0
        return $result;
    }

    public function getDelay()
    {
        $temp_result = Tools::jsonDecode(LeoSlideshowSlide::base64Decode($this->params), true);
        $result = $temp_result['delay'];

        return $result;
    }

    // public static function getGroupOption()
    // {
        // $result = array();
        // $mod_group = new LeoSlideshowGroup();
        // $groups = $mod_group->getGroups(null, null);

        // foreach ($groups as $group) {
            // $temp = array();
            // $temp['id'] = $group['id_leoslideshow_groups'];
            // $temp['name'] = $group['title'];
            // $result[] = $temp;
        // }
        // return $result;
    // }

    /**
     * Get group to frontend
     */
    public static function getActiveGroupByHook($hook_name = '', $active = 1)
    {
        $id_shop = Context::getContext()->shop->id;
        $sql = '
				SELECT *
				FROM '._DB_PREFIX_.'btmegamenu_group gr
				WHERE gr.id_shop = '.(int)$id_shop.'
				AND gr.hook = "'.pSQL($hook_name).'"'.
                ($active ? ' AND gr.`active` = 1' : ' ').'
				ORDER BY gr.position';

        return Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);
    }

    /**
     * Get group to preview
     */
    public static function getGroupByID($id_group)
    {
        $sql = '
			SELECT *
			FROM '._DB_PREFIX_.'btmegamenu_group gr
			WHERE gr.id_btmegamenu_group = '.(int)$id_group;

        return Db::getInstance(_PS_USE_SQL_SLAVE_)->getRow($sql);
    }

    // public function setData($data = array())
    // {
        // if (is_array($data)) {
            // $this->data = $data;
        // }
        // return $this;
    // }

    // public function getData()
    // {
        // return $this->data;
    // }

    // public function beforeLoad()
    // {
        // $data = $this->data;

        // #Timer
        // if ($data['timer_show'] == LeoSlideshowConfig::TIMER_HIDE_AUTO) {
            // $data['autoAdvance'] = 1;
        // } elseif ($data['timer_show'] == LeoSlideshowConfig::TIMER_HIDE_STOP)
            // $data['autoAdvance'] = 0;
        // elseif ($data['timer_show'] == LeoSlideshowConfig::TIMER_SHOW_AUTO)
            // $data['autoAdvance'] = 1;
        // elseif ($data['timer_show'] == LeoSlideshowConfig::TIMER_SHOW_STOP)
            // $data['autoAdvance'] = 0;

        // # Navigator
        // if ($data['navigator_type'] == LeoSlideshowConfig::IVIEW_NAV_THUMBNAIL) {
            // $data['controlNavThumbs'] = 1;
        // } elseif ($data['navigator_type'] == LeoSlideshowConfig::IVIEW_NAV_BULLET)
            // $data['controlNavThumbs'] = 0;

        // # Multi language
        // $data['playLabel'] = LeoSlideshowHelper::l('Play');
        // $data['pauseLabel'] = LeoSlideshowHelper::l('Pause');
        // $data['closeLabel'] = LeoSlideshowHelper::l('Close');
        // $data['nextLabel'] = LeoSlideshowHelper::l('Next');
        // $data['previousLabel'] = LeoSlideshowHelper::l('Previous');

        // $this->data = $data;
        // return $this;
    // }

    // public function loadFrontEnd()
    // {
        // return $this->getData();
    // }
    
    public function count(){
        $sql = 'SELECT id_btmegamenu_group FROM '._DB_PREFIX_.'btmegamenu_group';
        $groups = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);        
        $number_groups = count($groups);
        return $number_groups;
    }
	
	//DONGND:: reset params widget by group
	// public function resetParamsWidget($id_shop = null)
	// {
		// $sql = '
				// UPDATE `'._DB_PREFIX_.'btmegamenu_group` 
				// SET `params_widget`= "" 
				// WHERE `id_btmegamenu_group` = '.(int)$this->id.' AND `id_shop` = '.$id_shop.'';

        // return Db::getInstance(_PS_USE_SQL_SLAVE_)->execute($sql);
	// }
	
	//DONGND:: get params widget by group
	// public function getParamsWidget($id_shop = null)
	// {
		// $sql = 'SELECT `params_widget` FROM `'._DB_PREFIX_.'btmegamenu_group`				
				// WHERE `id_btmegamenu_group` = '.(int)$this->id.' AND `id_shop` = '.$id_shop;

        // return Db::getInstance(_PS_USE_SQL_SLAVE_)->getRow($sql);
	// }
	
    //DONGND:: get params widget by group
    // public function updateParamsWidget($params, $id_shop = null)
    // {
        // $sql = 'UPDATE `'._DB_PREFIX_.'btmegamenu_group`
				// SET `params_widget`= "'.$params.'"
				// WHERE `id_btmegamenu_group` = '.(int)$this->id.' AND `id_shop` = '.$id_shop;

        // return Db::getInstance(_PS_USE_SQL_SLAVE_)->execute($sql);
    // }
	
	//DONGND:: get last position of group
	public static function getLastPosition($id_shop)
    {
        return (Db::getInstance()->getValue('SELECT MAX(position)+1 FROM `'._DB_PREFIX_.'btmegamenu_group` WHERE `id_shop` = '.(int)$id_shop));
    }
	
	//DONGND:: get all menu of group
	public static function getMenuByGroup($id_group)
	{
		$sql = 'SELECT `id_btmegamenu`,`id_parent` FROM `'._DB_PREFIX_.'btmegamenu`				
				WHERE `id_group` = '.(int)$id_group.'
				ORDER BY `id_parent` ASC';

        return Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);
	}
	
	//DONGND:: get all menu parent of group
	public static function getMenuParentByGroup($id_group)
	{
		$sql = 'SELECT `id_btmegamenu`,`id_parent` FROM `'._DB_PREFIX_.'btmegamenu`				
				WHERE `id_group` = '.(int)$id_group.' AND `id_parent` = 0';

        return Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);
	}
	
	//DONGND:: set data for group when import
	public static function setDataForGroup($group, $content, $override)
    {
        $group->title = $content['title'];
        $group->id_shop = Context::getContext()->shop->id;
        $group->hook = $content['hook'];
		if (!$override)
		{
			$group->position = self::getLastPosition(Context::getContext()->shop->id);
			include_once(_PS_MODULE_DIR_.'leobootstrapmenu/libs/Helper.php');            
			$group->randkey = LeoBtmegamenuHelper::genKey();
		}
        $group->active = $content['active'];
        $group->params = $content['params'];
		// $group->params_widget = $content['params_widget'];
        $group->active_ap = $content['active_ap'];
        return $group;
    }
    
    public static function autoCreateKey()
    {
        $sql = 'SELECT '.self::$definition['primary'].' FROM '._DB_PREFIX_.self::$definition['table'].
                ' WHERE randkey IS NULL OR randkey = ""';
        
        $rows = Db::getInstance()->executes($sql);
        foreach ($rows as $row)
        {
            $mod_group = new BtmegamenuGroup((int)$row[self::$definition['primary']]);
            include_once(_PS_MODULE_DIR_.'leobootstrapmenu/libs/Helper.php');
            $mod_group->randkey = LeoBtmegamenuHelper::genKey();
            $mod_group->update();
        }
    }
}
