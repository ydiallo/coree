<?php
/**
 *  Leo Theme for Prestashop 1.6.x
 *
 * @author    http://www.leotheme.com
 * @copyright Copyright (C) October 2013 LeoThemes.com <@emai:leotheme@gmail.com>
 *               <info@leotheme.com>.All rights reserved.
 * @license   GNU General Public License version 2
 */

$mod_group_sample = new BtmegamenuGroup();
$context = Context::getContext();

$mod_group_sample->title = 'Sample Megamenu';
$mod_group_sample->hook = 'displayTop';
$mod_group_sample->position = 0;
$mod_group_sample->id_shop = $context->shop->id;
$mod_group_sample->active = 1;
$mod_group_sample->params = 'eyJncm91cF90eXBlIjoiaG9yaXpvbnRhbCIsInNob3dfY2F2YXMiOiIxIiwidHlwZV9zdWIiOiJhdXRvIiwiZ3JvdXBfY2xhc3MiOiIifQ==';
$mod_group_sample->randkey = 'ac70e5b81cccd4671f8c75a464e569bd';
$mod_group_sample->add();

$id_group_sample = $mod_group_sample->id;

// $list_group_customer = Group::getGroups($context->language->id);
// $tmp_array = array();
// $groupBox = '';
// foreach ($list_group_customer as $list_group_customer_val)
// {
	// array_push($tmp_array,$list_group_customer_val['id_group']);
// }
//$groupBox = implode(',', $tmp_array);

$languages = Language::getLanguages(false);
for ($i = 1; $i <= 3; ++$i) {
	
	$mod_menu_sample = new Btmegamenu();
	// $mod_menu_sample->id_btmegamenu = 0;
	$mod_menu_sample->id_parent = 0;	
	$mod_menu_sample->id_group = $id_group_sample;
	$mod_menu_sample->sub_with = 'submenu';
	$mod_menu_sample->is_group = 0;
	$mod_menu_sample->item = 'index';
	$mod_menu_sample->colums = 1;
	$mod_menu_sample->type = 'controller';
	$mod_menu_sample->is_content = 0;
	$mod_menu_sample->show_title = 1;
	$mod_menu_sample->level_depth = 1;
	$mod_menu_sample->active = 1;
	$mod_menu_sample->position = $i;
	$mod_menu_sample->show_sub = 0;
	$mod_menu_sample->target = '_self';
	$mod_menu_sample->privacy = 0;
	$mod_menu_sample->level = 0;
	$mod_menu_sample->left = 0;
	$mod_menu_sample->right = 0;
	$mod_menu_sample->is_cattree = 1;

	//$mod_menu_sample->groupBox = $groupBox;
		
	foreach ($languages as $language) {
		$mod_menu_sample->title[$language['id_lang']] = 'Sample menu '.$i;
		
	}
	
	$mod_menu_sample->save();
	
}