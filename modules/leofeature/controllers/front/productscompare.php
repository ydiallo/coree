<?php
/**
 * 2007-2017 Leotheme
 *
 * NOTICE OF LICENSE
 *
 * Leo feature for prestashop 1.7: ajax cart, review, compare, wishlist at product list 
 *
 * DISCLAIMER
 *
 *  @Module Name: Leo Feature
 *  @author    leotheme <leotheme@gmail.com>
 *  @copyright 2007-2017 Leotheme
 *  @license   http://leotheme.com - prestashop template provider
 */
require_once(_PS_MODULE_DIR_.'leofeature/classes/CompareProduct.php');
require_once(_PS_MODULE_DIR_.'leofeature/classes/LeofeatureProduct.php');

class LeofeatureProductsCompareModuleFrontController extends ModuleFrontController
{
    public $php_self;

    // public function setMedia()
    // {
        // parent::setMedia();
        // $this->addCSS(_THEME_CSS_DIR_.'comparator.css');
    // }

    /**
     * Display ajax content (this function is called instead of classic display, in ajax mode)
     */
    public function displayAjax()
    {
        // Add or remove product with Ajax
        if (Tools::getValue('ajax') && Tools::getValue('id_product') && Tools::getValue('action')) {
            if (Tools::getValue('action') == 'add') {
                $id_compare = isset($this->context->cookie->id_compare) ? $this->context->cookie->id_compare: false;
                if (CompareProduct::getNumberProducts($id_compare) < Configuration::get('LEOFEATURE_COMPARATOR_MAX_ITEM')) {
                    CompareProduct::addCompareProduct($id_compare, (int)Tools::getValue('id_product'));
                } else {
                    $this->ajaxDie('0');
                }
            } elseif (Tools::getValue('action') == 'remove') {
                if (isset($this->context->cookie->id_compare)) {
                    CompareProduct::removeCompareProduct((int)$this->context->cookie->id_compare, (int)Tools::getValue('id_product'));
                } else {
                    $this->ajaxDie('0');
                }
            } else {
                $this->ajaxDie('0');
            }
            $this->ajaxDie('1');
        }
        $this->ajaxDie('0');
    }

    /**
     * Assign template vars related to page content
     * @see FrontController::initContent()
     */
    public function initContent()
    {
		$this->php_self = 'productscompare';
		// print_r($this->php_self);die();
		
        if (Tools::getValue('ajax')) {
            return;
        }
        parent::initContent();     
        CompareProduct::cleanCompareProducts('week');
        $hasProduct = false;

        if (!Configuration::get('LEOFEATURE_COMPARATOR_MAX_ITEM') || !Configuration::get('LEOFEATURE_ENABLE_PRODUCTCOMPARE')) {
            return Tools::redirect('index.php?controller=404');
        }

        $ids = null;
        
		if (isset($this->context->cookie->id_compare)) {
			$ids = CompareProduct::getCompareProducts($this->context->cookie->id_compare);
		}
		
        if ($ids) {
            if (count($ids) > 0) {
                if (count($ids) > Configuration::get('LEOFEATURE_COMPARATOR_MAX_ITEM')) {
                    $ids = array_slice($ids, 0, Configuration::get('LEOFEATURE_COMPARATOR_MAX_ITEM'));
                }

                $listProducts = array();
                $listFeatures = array();

                foreach ($ids as $k => &$id) {
                    $curProduct = new Product((int)$id, true, $this->context->language->id);
                    if (!Validate::isLoadedObject($curProduct) || !$curProduct->active || !$curProduct->isAssociatedToShop()) {
                        if (isset($this->context->cookie->id_compare)) {
                            CompareProduct::removeCompareProduct($this->context->cookie->id_compare, $id);
                        }
                        unset($ids[$k]);
                        continue;
                    }

                    foreach ($curProduct->getFrontFeatures($this->context->language->id) as $feature) {
                        $listFeatures[$curProduct->id][$feature['id_feature']] = $feature['value'];
                    }

                    // $cover = Product::getCover((int)$id);

                    // $curProduct->id_image = Tools::htmlentitiesUTF8(Product::defineProductImage(array('id_image' => $cover['id_image'], 'id_product' => $id), $this->context->language->id));
                    // $curProduct->allow_oosp = Product::isAvailableWhenOutOfStock($curProduct->out_of_stock);
					$product_object = new LeofeatureProduct();
					$curProduct = $product_object->getTemplateVarProduct1($id);
					// $curProduct['product_attribute_minimal_quantity'] = Attribute::getAttributeMinimalQty($curProduct['id_product_attribute']);
                    $listProducts[] = $curProduct;
					
                }
				// echo '<pre>';
				// print_r($listProducts);die();
				
                if (count($listProducts) > 0) {
                    $width = 80 / count($listProducts);

                    $hasProduct = true;
                    $ordered_features = $this->getFeaturesForComparison($ids, $this->context->language->id);
					// echo '<pre>';
					// print_r($listProducts);die();
                    $this->context->smarty->assign(array(
                        'ordered_features' => $ordered_features,
                        'product_features' => $listFeatures,
                        'products' => $listProducts,
                        'width' => $width,
                        // 'HOOK_COMPARE_EXTRA_INFORMATION' => Hook::exec('displayCompareExtraInformation', array('list_ids_product' => $ids)),
                        // 'HOOK_EXTRA_PRODUCT_COMPARISON' => Hook::exec('displayProductComparison', array('list_ids_product' => $ids)),
                        'homeSize' => Image::getSize(ImageType::getFormattedName('home')),
						'list_product' => $ids,
                    ));
                } elseif (isset($this->context->cookie->id_compare)) {
                    $object = new CompareProduct((int)$this->context->cookie->id_compare);
                    if (Validate::isLoadedObject($object)) {
                        $object->delete();
                    }
                }
            }
        }
        $this->context->smarty->assign('hasProduct', $hasProduct);

        $this->setTemplate('module:leofeature/views/templates/front/leo_products_compare.tpl');
    }
	
	public function getFeaturesForComparison($list_ids_product, $id_lang)
    {
        if (!Feature::isFeatureActive()) {
            return false;
        }

        $ids = '';
        foreach ($list_ids_product as $id) {
            $ids .= (int)$id.',';
        }

        $ids = rtrim($ids, ',');

        if (empty($ids)) {
            return false;
        }

        return Db::getInstance()->executeS('
			SELECT f.*, fl.*
			FROM `'._DB_PREFIX_.'feature` f
			LEFT JOIN `'._DB_PREFIX_.'feature_product` fp
				ON f.`id_feature` = fp.`id_feature`
			LEFT JOIN `'._DB_PREFIX_.'feature_lang` fl
				ON f.`id_feature` = fl.`id_feature`
			WHERE fp.`id_product` IN ('.$ids.')
			AND `id_lang` = '.(int)$id_lang.'
			GROUP BY f.`id_feature`
			ORDER BY f.`position` ASC
		');
    }
	
	//DONGND:: add meta title, meta description, meta keywords
	public function getTemplateVarPage()
    {
        $page = parent::getTemplateVarPage();		
		
        $page['meta']['title'] = Configuration::get('PS_SHOP_NAME').' - '.$this->l('Products Comparison', 'productscompare');
		$page['meta']['keywords'] = $this->l('products-comparison', 'productscompare');
		$page['meta']['description'] = $this->l('Products Comparison', 'productscompare');
        // echo '<pre>';
        // print_r($page);die();
        return $page;
    }
	
	//DONGND:: add breadcrumb
	public function getBreadcrumbLinks()
    {
        $breadcrumb = parent::getBreadcrumbLinks();
		// $link = LeoBlogHelper::getInstance()->getFontBlogLink();
        // $config = LeoBlogConfig::getInstance();	
        $breadcrumb['links'][] = [
            'title' => $this->l('Products Comparison', 'productscompare'),
            'url' => $this->context->link->getModuleLink('leofeature', 'productscompare'),
        ];

        return $breadcrumb;
    }
	
	//DONGND:: get layout
	public function getLayout()
    {
        $entity = 'module-leofeature-'.$this->php_self;
		
        $layout = $this->context->shop->theme->getLayoutRelativePathForPage($entity);
		
        if ($overridden_layout = Hook::exec(
            'overrideLayoutTemplate',
            array(
                'default_layout' => $layout,
                'entity' => $entity,
                'locale' => $this->context->language->locale,
                'controller' => $this,
            )
        )) {
            return $overridden_layout;
        }

        if ((int) Tools::getValue('content_only')) {
            $layout = 'layouts/layout-content-only.tpl';
        }

        return $layout;
    }
}
