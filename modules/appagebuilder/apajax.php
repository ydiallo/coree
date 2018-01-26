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

require_once(dirname(__FILE__).'/../../config/config.inc.php');
require_once(dirname(__FILE__).'/../../init.php');
include_once(dirname(__FILE__).'/appagebuilder.php');
include_once(dirname(__FILE__).'/classes/shortcodes.php');
include_once(dirname(__FILE__).'/classes/shortcodes/ApProductList.php');
$module = APPageBuilder::getInstance();
apPageHelper::setGlobalVariable(Context::getContext());
if (Tools::getValue('leoajax') == 1) {
    # process category
    $list_cat = Tools::getValue('cat_list');
    $product_list_image = Tools::getValue('product_list_image');
    $product_one_img = Tools::getValue('product_one_img');
    $leo_pro_cdown = Tools::getValue('pro_cdown');
    $leo_pro_color = Tools::getValue('pro_color');
    //add function wishlist compare
    $wishlist_compare = Tools::getValue('wishlist_compare');

    $result = array();

    //get number product of compare + wishlist
    if ($wishlist_compare) {
		$wishlist_products = 0;
		if (Configuration::get('LEOFEATURE_ENABLE_PRODUCTWISHLIST') && isset(Context::getContext()->cookie->id_customer))
		{
			$current_user = (int)Context::getContext()->cookie->id_customer;
			$list_wishlist = Db::getInstance()->executeS("SELECT id_wishlist FROM `"._DB_PREFIX_."leofeature_wishlist` WHERE id_customer = '$current_user'");
			foreach ($list_wishlist as $list_wishlist_item)
			{
				$number_product_wishlist = Db::getInstance()->getValue("SELECT COUNT(id_wishlist_product) FROM `"._DB_PREFIX_."leofeature_wishlist_product` WHERE id_wishlist = ".$list_wishlist_item['id_wishlist']);
				$wishlist_products += $number_product_wishlist;
			}
			// $wishlist_products = Db::getInstance()->getValue("SELECT COUNT(id_wishlist_product) FROM `"._DB_PREFIX_."wishlist_product` WHERE id_wishlist = '$id_wishlist'");
		}

        $compared_products = array();
        if (Configuration::get('LEOFEATURE_ENABLE_PRODUCTCOMPARE') && Configuration::get('LEOFEATURE_COMPARATOR_MAX_ITEM') > 0 && isset(Context::getContext()->cookie->id_compare)) {
            $compared_products = Db::getInstance()->executeS('
				SELECT DISTINCT `id_product`
				FROM `'._DB_PREFIX_.'leofeature_compare` c
				LEFT JOIN `'._DB_PREFIX_.'leofeature_compare_product` cp ON (cp.`id_compare` = c.`id_compare`)
				WHERE cp.`id_compare` = '.(int)(Context::getContext()->cookie->id_compare));
        }
        $result['wishlist_products'] = $wishlist_products;
        $result['compared_products'] = count($compared_products);
    }

    if ($list_cat) {
        $list_cat = explode(',', $list_cat);
		$list_cat = array_filter($list_cat);
        $list_cat = array_unique($list_cat);
        $list_cat = implode(',', $list_cat);

        $sql = 'SELECT COUNT(cp.`id_product`) AS total, cp.`id_category`
					FROM `'._DB_PREFIX_.'product` p
					'.Shop::addSqlAssociation('product', 'p').'
					LEFT JOIN `'._DB_PREFIX_.'category_product` cp ON p.`id_product` = cp.`id_product`
					WHERE cp.`id_category` IN ('.$list_cat.')
				AND product_shop.`visibility` IN ("both", "catalog")
				AND product_shop.`active` = 1
				GROUP BY cp.`id_category`';
        $cat = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);
        if ($cat) {
            $result['cat'] = $cat;
        }
    }

    if ($leo_pro_cdown) {
        $leo_pro_cdown = explode(',', $leo_pro_cdown);
        $leo_pro_cdown = array_unique($leo_pro_cdown);
        $leo_pro_cdown = implode(',', $leo_pro_cdown);
        $result['pro_cdown'] = $module->hookProductCdown($leo_pro_cdown);
    }

    if ($leo_pro_color) {
        $leo_pro_color = explode(',', $leo_pro_color);
        $leo_pro_color = array_unique($leo_pro_color);
        $leo_pro_color = implode(',', $leo_pro_color);
        $result['pro_color'] = $module->hookProductColor($leo_pro_color);
    }


    if ($product_list_image) {
        $product_list_image = explode(',', $product_list_image);
        $product_list_image = array_unique($product_list_image);
        $product_list_image = implode(',', $product_list_image);

        # $leocustomajax = new Leocustomajax();
        $result['product_list_image'] = $module->hookProductMoreImg($product_list_image);
    }
    if ($product_one_img) {
        $product_one_img = explode(',', $product_one_img);
        $product_one_img = array_unique($product_one_img);
        $product_one_img = implode(',', $product_one_img);

        $result['product_one_img'] = $module->hookProductOneImg($product_one_img);
    }

    if ($result) {
        die(Tools::jsonEncode($result));
    }
}
else {
    $obj = new ApProductList();
    $result = $obj->ajaxProcessRender($module);
    die(Tools::jsonEncode($result));
}
