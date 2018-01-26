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

class ApBlockCarousel extends ApShortCodeBase
{
    public $name = 'ApBlockCarousel';

    public function getInfo()
    {
        return array('label' => $this->l('Block Carousel'), 'position' => 6,
            'desc' => $this->l('Show block in Carousel'),
            'icon_class' => 'icon icon-chevron-right',
            'tag' => 'content slider');
    }

    public function getConfigList()
    {
        $href = Context::getContext()->link->getAdminLink('AdminApPageBuilderImages').'&ajax=1&action=manageimage&imgDir=images';
        $ad = __PS_BASE_URI__.basename(_PS_ADMIN_DIR_);
        $iso_tiny_mce = Context::getContext()->language->iso_code;
        $iso_tiny_mce = (file_exists(_PS_JS_DIR_.'tiny_mce/langs/'.$iso_tiny_mce.'.js') ? $iso_tiny_mce : 'en');
        $list_slider = '<button type="button" id="btn-add-slider" class="btn btn-default">
				<i class="icon-plus-sign-alt"></i> '.$this->l('Add slider').'</button><hr/>';
        $list_slider_button = '<div id="frm-slider" class="hide">
							<div class="form-group">
								<div class="col-lg-12 ">
									<button type="button" class="btn btn-primary btn-save-slider" 
									data-error="'.$this->l('Please enter the title and description').'">'.$this->l('Save').'</button>
									<button type="button" class="btn btn-default btn-reset-slider">'.$this->l('Reset').'</button>
									<button type="button" class="btn btn-default btn-cancel-slider">'.$this->l('Cancel').'</button>
								</div>
							</div>
							<script>
								var ad = "'.$ad.'";
								var iso = "'.$iso_tiny_mce.'";
							</script>
							<hr/>
						</div>';
        $input = array(
            array(
                'type' => 'text',
                'name' => 'title',
                'label' => $this->l('Title'),
                'desc' => $this->l('Auto hide if leave it blank'),
                'lang' => 'true',
                'default' => ''
            ),
            array(
                'type' => 'textarea',
                'name' => 'sub_title',
                'label' => $this->l('Sub Title'),
                'lang' => true,
                'values' => '',
                'autoload_rte' => false,
                'default' => ''
            ),
            array(
                'type' => 'text',
                'name' => 'class',
                'label' => $this->l('CSS Class'),		
                'default' => '',
            ),
            array(
                'type' => 'text',
                'name' => 'description',
                'label' => $this->l('Description'),
            ),
            array(
                'type' => 'switch',
                'label' => $this->l('Open new tab'),
                'desc' => $this->l('Open new tab when click to link in slider'),
                'name' => 'is_open',
                'values' => ApPageSetting::returnYesNo(),
                'default' => '0',
            ),
            array(
                'type' => 'html',
                'name' => 'default_html',
                'html_content' => '<div class="alert alert-info">'.$this->l('Step 1: Select type').'</div>'
            ),
            array(
                'type' => 'select',
                'label' => $this->l('Carousel Type'),
                'class' => 'form-action',
                'name' => 'carousel_type',
                'options' => array(
                    'query' => array(
                        array('id' => 'boostrap', 'name' => $this->l('Bootstrap')),
                        array('id' => 'owlcarousel', 'name' => $this->l('Owl Carousel')),
                    ),
                    'id' => 'id',
                    'name' => 'name'
                ),
                'default' => 'boostrap'
            ),
            //Owl Carousel begin
            array(
                'type' => 'html',
                'name' => 'default_html',
                'html_content' => '<div class="space" style="font-size:13px">'.$this->l('Items per Row').'</div>',
                'form_group_class' => 'carousel_type_sub carousel_type-owlcarousel',
            ),
            array(
                'type' => 'text',
                'name' => 'items',
                'label' => $this->l('Items'),
                'desc' => $this->l('Typing number of items. Default'),
                'form_group_class' => 'carousel_type_sub carousel_type-owlcarousel',
                'default' => '5',
            ),
            array(
                'type' => 'text',
                'name' => 'itemsdesktop',
                'label' => $this->l('Items_Desktop'),
                'desc' => $this->l('Typing number of items ( with Screen < 1200 )'),
                'default' => '4',
                'form_group_class' => 'carousel_type_sub carousel_type-owlcarousel',
            ),
            array(
                'type' => 'text',
                'name' => 'itemsdesktopsmall',
                'label' => $this->l('Items_Desktop_Small'),
                'desc' => $this->l('Typing number of items ( with Screen < 992 )'),
                'default' => '3',
                'form_group_class' => 'carousel_type_sub carousel_type-owlcarousel',
            ),
            array(
                'type' => 'text',
                'name' => 'itemstablet',
                'label' => $this->l('Items_Tablet'),
                'desc' => $this->l('Typing number of items ( with Screen < 768 )'),
                'default' => '2',
                'form_group_class' => 'carousel_type_sub carousel_type-owlcarousel',
            ),
            array(
                'type' => 'text',
                'name' => 'itemsmobile',
                'label' => $this->l('Items_Mobile'),
                'desc' => $this->l('Typing number of items ( with Screen < 576 )'),
                'default' => '1',
                'form_group_class' => 'carousel_type_sub carousel_type-owlcarousel',
            ),
            array(
                'type' => 'text',
                'name' => 'itemscustom',
                'label' => $this->l('Items_Custom'),
                'desc' => $this->l('(Advance User) Example: [[0, 2], [576, 3], [768, 4], [992, 5], [1200, 6]]. The format is [x,y] whereby x=browser width and y=number of slides displayed'),
                'default' => '',
                'form_group_class' => 'carousel_type_sub carousel_type-owlcarousel',
            ),
            array(
                'type' => 'text',
                'name' => 'itempercolumn',
                'label' => $this->l('Items per Column'),
                'desc' => $this->l('Number of item per one column. Same with number of line for one page'),
                'default' => '1',
                'form_group_class' => 'carousel_type_sub carousel_type-owlcarousel',
            ),
            array(
                'type' => 'html',
                'name' => 'default_html',
                'html_content' => '<div class="space" style="font-size:13px">'.$this->l('Effect').'</div>',
                'form_group_class' => 'carousel_type_sub carousel_type-owlcarousel',
            ),
            array(
                'type' => 'switch',
                'label' => $this->l('Autoplay'),
                'name' => 'autoplay',
                'is_bool' => true,
                'desc' => $this->l('Yes - scroll per page. No - scroll per item. This affect next/prev buttons and mouse/touch dragging.'),
                'values' => ApPageSetting::returnYesNo(),
                'default' => '0',
                'form_group_class' => 'carousel_type_sub carousel_type-owlcarousel',
            ),
            array(
                'type' => 'switch',
                'label' => $this->l('Stop on Hover'),
                'name' => 'stoponhover',
                'is_bool' => true,
                'desc' => $this->l('Stop autoplay on mouse hover'),
                'values' => ApPageSetting::returnYesNo(),
                'default' => '0',
                'form_group_class' => 'carousel_type_sub carousel_type-owlcarousel',
            ),
            array(
                'type' => 'switch',
                'label' => $this->l('Responsive'),
                'name' => 'responsive',
                'is_bool' => true,
                'desc' => $this->l('You can use Owl Carousel on desktop-only websites too! Just change that to "false" to disable resposive capabilities'),
                'values' => ApPageSetting::returnYesNo(),
                'default' => '1',
                'form_group_class' => 'carousel_type_sub carousel_type-owlcarousel',
            ),
            array(
                'type' => 'switch',
                'label' => $this->l('Navigation'),
                'name' => 'navigation',
                'is_bool' => true,
                'desc' => $this->l('Display "next" and "prev" buttons.'),
                'values' => ApPageSetting::returnYesNo(),
                'default' => '0',
                'form_group_class' => 'carousel_type_sub carousel_type-owlcarousel',
            ),
            array(
                'type' => 'switch',
                'label' => $this->l('Auto Height'),
                'name' => 'autoHeight',
                'is_bool' => true,
                'desc' => $this->l('Add height to owl-wrapper-outer so you can use diffrent heights on slides. Use it only for one item per page setting.'),
                'values' => ApPageSetting::returnYesNo(),
                'default' => '0',
                'form_group_class' => 'carousel_type_sub carousel_type-owlcarousel',
            ),
            array(
                'type' => 'switch',
                'label' => $this->l('Mouse Drag'),
                'name' => 'mouseDrag',
                'is_bool' => true,
                'desc' => $this->l('On DeskTop - Turn off/on mouse events.'),
                'values' => ApPageSetting::returnYesNo(),
                'default' => '1',
                'form_group_class' => 'carousel_type_sub carousel_type-owlcarousel',
            ),
            array(
                'type' => 'switch',
                'label' => $this->l('Touch Drag'),
                'name' => 'touchdrag',
                'is_bool' => true,
                'desc' => $this->l('On Mobile - Turn off/on touch events.'),
                'values' => ApPageSetting::returnYesNo(),
                'default' => '1',
                'form_group_class' => 'carousel_type_sub carousel_type-owlcarousel',
            ),
            array(
                'type' => 'html',
                'name' => 'default_html',
                'html_content' => '<div class="space" style="font-size:13px">'.$this->l('Lazy Load: This function is only work when have one item per column').'</div>',
                'form_group_class' => 'carousel_type_sub carousel_type-owlcarousel',
            ),
            array(
                'type' => 'switch',
                'label' => $this->l('Lazy Load'),
                'name' => 'lazyload',
                'values' => ApPageSetting::returnYesNo(),
                'desc' => $this->l('Delays loading of images. Images outside of viewport will not be loaded before user scrolls to them. Great for mobile devices to speed up page loadings'),
                'default' => '0',
                'form_group_class' => 'carousel_type_sub carousel_type-owlcarousel',
            ),
            array(
                'type' => 'switch',
                'label' => $this->l('Lazy Follow'),
                'name' => 'lazyfollow',
                'is_bool' => true,
                'desc' => $this->l('When pagination used, it skips loading the images from pages that got skipped. It only loads the images that get displayed in viewport. If set to false, all images get loaded when pagination used. It is a sub setting of the lazy load function.'),
                'values' => ApPageSetting::returnYesNo(),
                'default' => '0',
                'form_group_class' => 'carousel_type_sub carousel_type-owlcarousel',
            ),
            array(
                'type' => 'select',
                'label' => $this->l('Lazy Effect'),
                'name' => 'lazyeffect',
                'options' => array(
                    'query' => array(
                        array('id' => 'fade', 'name' => $this->l('fade')),
                        array('id' => 'false', 'name' => $this->l('No')),
                    ),
                    'id' => 'id',
                    'name' => 'name'
                ),
                'desc' => $this->l('Default is fadeIn on 400ms speed. Use false to remove that effect.'),
                'default' => 'fade',
                'form_group_class' => 'carousel_type_sub carousel_type-owlcarousel',
            ),
            array(
                'type' => 'switch',
                'label' => $this->l('Pagination Enable'),
                'name' => 'pagination',
                'is_bool' => true,
                'values' => ApPageSetting::returnYesNo(),
                'default' => '0',
                'desc' => $this->l('Show Pagination below owl-carousel.'),
                'form_group_class' => 'carousel_type_sub carousel_type-owlcarousel',
            ),
            array(
                'type' => 'switch',
                'label' => $this->l('Pagination Numbers'),
                'name' => 'paginationnumbers',
                'is_bool' => true,
                'desc' => $this->l('Show numbers inside Pagination'),
                'values' => ApPageSetting::returnYesNo(),
                'default' => '0',
                'form_group_class' => 'carousel_type_sub carousel_type-owlcarousel',
            ),
            array(
                'type' => 'html',
                'name' => 'default_html',
                'html_content' => '<div class="space" style="font-size:13px">'.$this->l('NEXT PAGE').'</div>',
                'form_group_class' => 'carousel_type_sub carousel_type-owlcarousel',
            ),
            array(
                'type' => 'switch',
                'label' => $this->l('Scroll per Page'),
                'name' => 'scrollPerPage',
                'is_bool' => true,
                'desc' => $this->l('Yes - scroll per Page. No - scroll per Item. This affect next/prev buttons and mouse/touch dragging.'),
                'values' => ApPageSetting::returnYesNo(),
                'default' => '0',
                'form_group_class' => 'carousel_type_sub carousel_type-owlcarousel',
            ),
            array(
                'type' => 'text',
                'label' => $this->l('Scroll Page Speed'),
                'name' => 'paginationspeed',
                'desc' => $this->l('Time to next page. Ex 800 ( Milliseconds )'),
                'default' => '800',
                'form_group_class' => 'carousel_type_sub carousel_type-owlcarousel',
            ),
            array(
                'type' => 'text',
                'label' => $this->l('Scroll Item Speed'),
                'name' => 'slidespeed',
                'desc' => $this->l('Time to next item. Ex 200 (Milliseconds)'),
                'default' => '200',
                'form_group_class' => 'carousel_type_sub carousel_type-owlcarousel',
            ),
            //Owl Carousel end
            //boostrap carousel begin
            array(
                'type' => 'text',
                'name' => 'nbitemsperpage',
                'label' => $this->l('Number of Item per Page'),
                'desc' => $this->l('How many product you want to display in a Page. Divisible by Item per Line (Desktop, Table, mobile)(default:12)'),
                'form_group_class' => 'carousel_type_sub carousel_type-boostrap carousel_type-desc',
                'default' => '12',
            ),
            array(
                'type' => 'html',
                'name' => 'default_html',
                'html_content' => '<div class="space">'.$this->l('Items per Row').'</div>',
                'form_group_class' => 'carousel_type_sub carousel_type-boostrap',
            ),
            array(
                'type' => 'select',
                'label' => $this->l('Items_Desktop ( >= 1200 )'),
                'name' => 'nbitemsperline_desktop',
                'default' => '',
                'options' => array('query' => array(
                        array('id' => '', 'name' => $this->l('Default')),
                        array('id' => '1', 'name' => $this->l('1 item')),
                        array('id' => '2', 'name' => $this->l('2 items')),
                        array('id' => '3', 'name' => $this->l('3 items')),
                        array('id' => '4', 'name' => $this->l('4 items')),
                        array('id' => '5', 'name' => $this->l('5 items')),
                        array('id' => '6', 'name' => $this->l('6 items')),
                        array('id' => '12', 'name' => $this->l('12 items')),
                    ),
                    'id' => 'id',
                    'name' => 'name'),
                'desc' => $this->l('How many product you want to display in a row of page. Default 4'),
                'form_group_class' => 'carousel_type_sub carousel_type-boostrap carousel_type-desc',
            ),
            array(
                'type' => 'select',
                'label' => $this->l('Items_SmallDesktop ( >= 992 )'),
                'name' => 'nbitemsperline_smalldesktop',
                'default' => '',
                'options' => array('query' => array(
                        array('id' => '', 'name' => $this->l('Default')),
                        array('id' => '1', 'name' => $this->l('1 item')),
                        array('id' => '2', 'name' => $this->l('2 items')),
                        array('id' => '3', 'name' => $this->l('3 items')),
                        array('id' => '4', 'name' => $this->l('4 items')),
                        array('id' => '5', 'name' => $this->l('5 items')),
                        array('id' => '6', 'name' => $this->l('6 items')),
                        array('id' => '12', 'name' => $this->l('12 items')),
                    ),
                    'id' => 'id',
                    'name' => 'name'),
                'desc' => $this->l('How many product you want to display in a row of page. Default 3'),
                'form_group_class' => 'carousel_type_sub carousel_type-boostrap carousel_type-desc',
            ),
            array(
                'type' => 'select',
                'label' => $this->l('Items_Tablet ( >= 768 )'),
                'name' => 'nbitemsperline_tablet',
                'default' => '',
                'options' => array('query' => array(
                        array('id' => '', 'name' => $this->l('Default')),
                        array('id' => '1', 'name' => $this->l('1 item')),
                        array('id' => '2', 'name' => $this->l('2 items')),
                        array('id' => '3', 'name' => $this->l('3 items')),
                        array('id' => '4', 'name' => $this->l('4 items')),
                        array('id' => '5', 'name' => $this->l('5 items')),
                        array('id' => '6', 'name' => $this->l('6 items')),
                        array('id' => '12', 'name' => $this->l('12 items')),
                    ),
                    'id' => 'id',
                    'name' => 'name'),
                'desc' => $this->l('How many product you want to display in a row of page. Default 3'),
                'form_group_class' => 'carousel_type_sub carousel_type-boostrap carousel_type-desc',
            ),
            array(
                'type' => 'select',
                'label' => $this->l('Items_SmallDevices ( >= 576 )'),
                'name' => 'nbitemsperline_smalldevices',
                'default' => '',
                'options' => array('query' => array(
                        array('id' => '', 'name' => $this->l('Default')),
                        array('id' => '1', 'name' => $this->l('1 item')),
                        array('id' => '2', 'name' => $this->l('2 items')),
                        array('id' => '3', 'name' => $this->l('3 items')),
                        array('id' => '4', 'name' => $this->l('4 items')),
                        array('id' => '5', 'name' => $this->l('5 items')),
                        array('id' => '6', 'name' => $this->l('6 items')),
                    ),
                    'id' => 'id',
                    'name' => 'name'),
                'desc' => $this->l('How many product you want to display in a row of page. Default 2'),
                'form_group_class' => 'carousel_type_sub carousel_type-boostrap carousel_type-desc',
            ),
            array(
                'type' => 'select',
                'label' => $this->l('Items_ExtraSmallDevices ( >= 480 )'),
                'name' => 'nbitemsperline_extrasmalldevices',
                'default' => '',
                'options' => array('query' => array(
                        array('id' => '', 'name' => $this->l('Default')),
                        array('id' => '1', 'name' => $this->l('1 item')),
                        array('id' => '2', 'name' => $this->l('2 items')),
                        array('id' => '3', 'name' => $this->l('3 items')),
                        array('id' => '4', 'name' => $this->l('4 items')),
                        array('id' => '5', 'name' => $this->l('5 items')),
                        array('id' => '6', 'name' => $this->l('6 items')),
                    ),
                    'id' => 'id',
                    'name' => 'name'),
                'desc' => $this->l('How many product you want to display in a row of page. Default 1'),
                'form_group_class' => 'carousel_type_sub carousel_type-boostrap carousel_type-desc',
            ),
            array(
                'type' => 'select',
                'label' => $this->l('Items_Smartphone ( < 480 )'),
                'name' => 'nbitemsperline_smartphone',
                'default' => '',
                'options' => array('query' => array(
                        array('id' => '', 'name' => $this->l('Default')),
                        array('id' => '1', 'name' => $this->l('1 item')),
                        array('id' => '2', 'name' => $this->l('2 items')),
                        array('id' => '3', 'name' => $this->l('3 items')),
                        array('id' => '4', 'name' => $this->l('4 items')),
                        array('id' => '5', 'name' => $this->l('5 items')),
                        array('id' => '6', 'name' => $this->l('6 items')),
                    ),
                    'id' => 'id',
                    'name' => 'name'),
                'desc' => $this->l('How many product you want to display in a row of page. Default 1'),
                'form_group_class' => 'carousel_type_sub carousel_type-boostrap carousel_type-desc',
            ),
            array(
                'type' => 'text',
                'name' => 'interval',
                'label' => $this->l('interval'),
                'desc' => $this->l('The amount of time to delay between automatically cycling an item. If false, carousel will not automatically cycle.'),
                'default' => '5000',
                'form_group_class' => 'carousel_type_sub carousel_type-boostrap carousel_type-desc',
            ),
            array(
                'type' => 'html',
                'name' => 'default_html',
                'html_content' => '<div class="alert alert-info">'.$this->l('Step 2: Add content for sliders').'</div>'
            ),
            array(
                'type' => 'html',
                'name' => 'default_html',
                'html_content' => $list_slider
            ),
            array(
                'label' => $this->l('Image'),
                'type' => 'selectImg',
                'href' => $href,
                'name' => 'temp_image',
                'lang' => true,
                'class' => 'item-add-slide ignore-lang',
                'form_group_class' => 'apfullslider-row select-img',
            ),
            array(
                'type' => 'text',
                'name' => 'temp_title',
                'label' => $this->l('Title'),
                'lang' => 'true',
                'default' => '',
                'class' => 'item-add-slide ignore-lang',
                'form_group_class' => 'apfullslider-row title-slide',
            ),
            array(
                'type' => 'text',
                'name' => 'temp_link',
                'label' => $this->l('Link'),
                'lang' => 'true',
                'default' => '',
                'class' => 'item-add-slide ignore-lang',
                'form_group_class' => 'apfullslider-row link-slide',
            ),
            array(
                'type' => 'textarea',
                'label' => $this->l('Description'),
                'name' => 'temp_descript',
                'cols' => 40,
                'rows' => 10,
                'value' => true,
                'lang' => true,
                'default' => '',
                'class' => 'item-add-slide ignore-lang',
                'form_group_class' => 'apfullslider-row description-slide',
            ),
            array(
                'type' => 'html',
                'name' => 'default_html',
                'html_content' => $list_slider_button
            ),
            array(
                'type' => 'hidden',
                'name' => 'total_slider',
                'default' => ''
            ),
        );
        return $input;
    }

    public function addConfigList($values)
    {
        // Get value with keys special
        $config_val = array();
        $total = isset($values['total_slider']) ? $values['total_slider'] : '';
        $arr = explode('|', $total);
        $inputs = array('tit', 'img', 'link', 'descript');
        $languages = Language::getLanguages(false);
        foreach ($arr as $i) {
            foreach ($inputs as $config) {
                foreach ($languages as $lang) {
                    $config_val[$config][$i][$lang['id_lang']] = str_replace($this->str_search, $this->str_relace_html_admin, Tools::getValue($config.'_'.$i.'_'.$lang['id_lang'], ''));
                    // print_r($config_val);
                    // echo '====';
                }
            }
        }
        $list_slider = '<ul id="list-slider">';
        $lang = new Language((int)Configuration::get('PS_LANG_DEFAULT'));
        $default_lang = $lang->id;
        foreach ($arr as $i) {
            if ($i) {
                $list_slider .= '<li id="'.$i.'">';
                foreach ($languages as $lang) {
                    $lbl = '';
                    if ($config_val['tit'][$i][$lang['id_lang']]) {
                        // validate module
                        $lbl .= '<div class="col-lg-5">'.$config_val['tit'][$i][$lang['id_lang']].'</div>';
                    }
                    if ($config_val['img'][$i][$lang['id_lang']]) {
                        // validate module
                        $lbl .= '<img src="'.apPageHelper::getImgThemeUrl().$config_val['img'][$i][$lang['id_lang']].'">';
                    }

                    $descript = str_replace('\r\n', '', htmlspecialchars($config_val['descript'][$i][$lang['id_lang']]));
                    $descript = Tools::stripslashes($descript); //htmlspecialchars($config_val['descript'][$i]);
                    if ($default_lang == $lang['id_lang']) {
                        $list_slider .= '<div class="col-lg-9">'.$lbl.'</div>';
                        $list_slider .= '<div class="col-lg-3">
                                        <button class="btn-edit-fullslider btn btn-info" type="button"><i class="icon-pencil"></i> '
                                .$this->l('Edit').'</button>
                                        <button class="btn-delete-fullslider btn btn-danger" type="button"><i class="icon-trash"></i> '
                                .$this->l('Delete').'</button>
                                    </div>';
                    }
                    $temp_name = $i.'_'.$lang['id_lang'];
                    $list_slider .= '<input type="hidden" id="tit_'.$temp_name.'" value="'
                            .htmlspecialchars($config_val['tit'][$i][$lang['id_lang']]).'" name="tit_'.$temp_name.'"/>';
                    $list_slider .= '<input type="hidden" id="img_'.$temp_name.'" value="'
                            .htmlspecialchars($config_val['img'][$i][$lang['id_lang']]).'" name="img_'.$temp_name.'"/>';
                    $list_slider .= '<input type="hidden" id="link_'.$temp_name.'" value="'
                            .htmlspecialchars($config_val['link'][$i][$lang['id_lang']]).'" name="link_'.$temp_name.'"/>';
                    $list_slider .= '<input type="hidden" id="descript_'.$temp_name
                            .'" value="'.$descript.'" name="descript_'.$temp_name.'"/>';
                }
                $list_slider .= '</li>';
            }
        }
        $list_slider .= '</ul>';
        $list_slider .= '<ul id="temp-list" class="hide">';
        $list_slider .= '<li id="">';
        $list_slider .= '<div class="col-lg-9"></div>';
        $list_slider .= '<div class="col-lg-3">
                            <button class="btn-edit-fullslider btn btn-info" type="button"><i class="icon-pencil"></i> '.$this->l('Edit').'</button>
                            <button class="btn-delete-fullslider btn btn-danger" type="button"><i class="icon-trash"></i> '.$this->l('Delete').'</button>
                        </div>';
        $list_slider .= '</li>';
        $input = array(
            'type' => 'html',
            'name' => 'default_html',
            'html_content' => $list_slider
        );
        // Append new input type html
        $this->config_list[] = $input;
    }
    public function endRenderForm()
    {
        $this->helper->module = new $this->module_name();
        
        // KEEP OLD DATA
        if( Tools::getIsset('nbitemsperline') && Tools::getValue('nbitemsperline') ){
            $this->helper->tpl_vars['fields_value']['nbitemsperline_desktop'] = Tools::getValue('nbitemsperline');
            $this->helper->tpl_vars['fields_value']['nbitemsperline_smalldesktop'] = Tools::getValue('nbitemsperline');
            $this->helper->tpl_vars['fields_value']['nbitemsperline_tablet'] = Tools::getValue('nbitemsperline');
        }
        
        if( Tools::getIsset('nbitemsperlinetablet') && Tools::getValue('nbitemsperlinetablet') ){
            $this->helper->tpl_vars['fields_value']['nbitemsperline_smalldevices'] = Tools::getValue('nbitemsperlinetablet');
        }
        
        if( Tools::getIsset('nbitemsperlinemobile') && Tools::getValue('nbitemsperlinemobile') ){
            $this->helper->tpl_vars['fields_value']['nbitemsperline_extrasmalldevices'] = Tools::getValue('nbitemsperlinemobile');
            $this->helper->tpl_vars['fields_value']['nbitemsperline_smartphone'] = Tools::getValue('nbitemsperlinemobile');
        }

    }
    public function prepareFontContent($assign, $module = null)
    {
        // validate module
        unset($module);
        
        if(isset ($assign['formAtts']['carousel_type']) && $assign['formAtts']['carousel_type'] == 'owlcarousel'){
            if (!Configuration::get('APPAGEBUILDER_LOAD_OWL'))
            {
                $assign['formAtts']['lib_has_error'] = true;
                $assign['formAtts']['lib_error'] = 'Can not show Block Carousel. Please enable Owl Carousel library in Appagebuilder Configuration.';
                return $assign;
            }
        }
        $list = explode('|', isset($assign['formAtts']['total_slider']) ? $assign['formAtts']['total_slider'] : '');
        $sliders = array();
        // $lang = Language::getLanguage(Context::getContext()->language->id);
        // $lang_default = $lang['id_lang'];
        // foreach ($list as $item)
        // 	if ($item)
        // 	{
        // 		$slider = array();
        // 		$slider['id'] = $item;
        // 		$slider['title'] = isset($assign['formAtts']['tit_'.$item]) ? $assign['formAtts']['tit_'.$item] : '';
        // 		$slider['image'] = isset($assign['formAtts']['image_'.$item]) ? $assign['formAtts']['image_'.$item] : '';
        // 		$slider['link'] = isset($assign['formAtts']['link_'.$item]) ? $assign['formAtts']['link_'.$item] : '';
        // 		$slider['descript'] = str_replace($this->str_search, $this->str_relace_html, isset($assign['formAtts']['descript_'.$item])
        // 		? $assign['formAtts']['descript_'.$item] : '');
        // 		$sliders[] = $slider;
        // 	}
        $lang = Language::getLanguage(Context::getContext()->language->id);
        $lang_default = $lang['id_lang'];
        foreach ($list as $item) {
            if ($item) {
                $temp = $item.'_'.$lang_default;
                $slider = array();
                $slider['id'] = $item;
                $slider['title'] = isset($assign['formAtts']['tit_'.$temp]) ? $assign['formAtts']['tit_'.$temp] : '';
                $slider['link'] = isset($assign['formAtts']['link_'.$temp]) ? $assign['formAtts']['link_'.$temp] : '';
                if (isset($assign['formAtts']['img_'.$temp]) && $assign['formAtts']['img_'.$temp]) {
                    // validate module
                    $slider['image'] =  apPageHelper::getImgThemeUrl().$assign['formAtts']['img_'.$temp];
                } else {
                    // validate module
                    $slider['image'] = '';
                }
                $desc = isset($assign['formAtts']['descript_'.$temp]) ? $assign['formAtts']['descript_'.$temp] : '';
                $slider['descript'] = str_replace($this->str_search, $this->str_relace_html, $desc);
                //$slider['descript'] = $assign['formAtts']['descript_'.$temp];
                $sliders[] = $slider;
            }
        }
        $assign['formAtts']['is_open'] = isset($assign['formAtts']['is_open']) ? $assign['formAtts']['is_open'] : 0;
        $assign['formAtts']['slides'] = $sliders;
        $assign['carouselName'] = 'carousel-'.ApPageSetting::getRandomNumber();
        if ($assign['formAtts']['carousel_type'] == 'boostrap') {
            
            if(isset($assign['formAtts']['nbitemsperline']) && $assign['formAtts']['nbitemsperline'] ){
                $assign['formAtts']['nbitemsperline_desktop'] = $assign['formAtts']['nbitemsperline'];
                $assign['formAtts']['nbitemsperline_smalldesktop'] = $assign['formAtts']['nbitemsperline'];
                $assign['formAtts']['nbitemsperline_tablet'] = $assign['formAtts']['nbitemsperline'];
            }
            if(isset($assign['formAtts']['nbitemsperlinetablet']) && $assign['formAtts']['nbitemsperlinetablet'] ){
                $assign['formAtts']['nbitemsperline_smalldevices'] = $assign['formAtts']['nbitemsperlinetablet'];
            }
            if(isset($assign['formAtts']['nbitemsperlinemobile']) && $assign['formAtts']['nbitemsperlinemobile'] ){
                $assign['formAtts']['nbitemsperline_extrasmalldevices'] = $assign['formAtts']['nbitemsperlinemobile'];
                $assign['formAtts']['nbitemsperline_smartphone'] = $assign['formAtts']['nbitemsperlinemobile'];
            }
            
            $assign['formAtts']['nbitemsperline_desktop'] = isset($assign['formAtts']['nbitemsperline_desktop']) && $assign['formAtts']['nbitemsperline_desktop']  ? (int)$assign['formAtts']['nbitemsperline_desktop'] : 4;
            $assign['formAtts']['nbitemsperline_smalldesktop'] = isset($assign['formAtts']['nbitemsperline_smalldesktop']) && $assign['formAtts']['nbitemsperline_smalldesktop'] ? (int)$assign['formAtts']['nbitemsperline_smalldesktop'] : 4;
            $assign['formAtts']['nbitemsperline_tablet'] = isset($assign['formAtts']['nbitemsperline_tablet']) && $assign['formAtts']['nbitemsperline_tablet'] ? (int)$assign['formAtts']['nbitemsperline_tablet'] : 3;
            $assign['formAtts']['nbitemsperline_smalldevices'] = isset($assign['formAtts']['nbitemsperline_smalldevices']) && $assign['formAtts']['nbitemsperline_smalldevices'] ? (int)$assign['formAtts']['nbitemsperline_smalldevices'] : 2;
            $assign['formAtts']['nbitemsperline_extrasmalldevices'] = isset($assign['formAtts']['nbitemsperline_extrasmalldevices']) && $assign['formAtts']['nbitemsperline_extrasmalldevices'] ? (int)$assign['formAtts']['nbitemsperline_extrasmalldevices'] : 1;
            $assign['formAtts']['nbitemsperline_smartphone'] = isset($assign['formAtts']['nbitemsperline_smartphone']) && $assign['formAtts']['nbitemsperline_smartphone'] ? (int)$assign['formAtts']['nbitemsperline_smartphone'] : 1;
            
            $assign['tabname'] = 'carousel-'.ApPageSetting::getRandomNumber();
            $assign['itemsperpage'] = (int)$assign['formAtts']['nbitemsperpage'];
            $assign['nbItemsPerLine'] = (int)$assign['formAtts']['nbitemsperline_desktop'];
            
            $assign['scolumn'] = '';
            
            if($assign['formAtts']['nbitemsperline_desktop'] == '5'){
                $assign['scolumn'] .= ' col-xl-2-4';    
            }else{
                $assign['scolumn'] .= ' col-xl-' .str_replace('.', '-', ''.(int)(12 / $assign['formAtts']['nbitemsperline_desktop']));
            }
            
            if($assign['formAtts']['nbitemsperline_smalldesktop'] == '5'){
                $assign['scolumn'] .= ' col-lg-2-4';    
            }else{
                $assign['scolumn'] .= ' col-lg-' .str_replace('.', '-', ''.(int)(12 / $assign['formAtts']['nbitemsperline_smalldesktop']));
            }
            
            if($assign['formAtts']['nbitemsperline_tablet'] == '5'){
                $assign['scolumn'] .= ' col-md-2-4';    
            }else{
                $assign['scolumn'] .= ' col-md-' .str_replace('.', '-', ''.(int)(12 / $assign['formAtts']['nbitemsperline_tablet']));
            }
            
            if($assign['formAtts']['nbitemsperline_smalldevices'] == '5'){
                $assign['scolumn'] .= ' col-sm-2-4';    
            }else{
                $assign['scolumn'] .= ' col-sm-' .str_replace('.', '-', ''.(int)(12 / $assign['formAtts']['nbitemsperline_smalldevices']));
            }
            
            if($assign['formAtts']['nbitemsperline_extrasmalldevices'] == '5'){
                $assign['scolumn'] .= ' col-xs-2-4';    
            }else{
                $assign['scolumn'] .= ' col-xs-' .str_replace('.', '-', ''.(int)(12 / $assign['formAtts']['nbitemsperline_extrasmalldevices']));
            }
            
            if($assign['formAtts']['nbitemsperline_smartphone'] == '5'){
                $assign['scolumn'] .= ' col-sp-2-4';    
            }else{
                $assign['scolumn'] .= ' col-sp-' .str_replace('.', '-', ''.(int)(12 / $assign['formAtts']['nbitemsperline_smartphone']));
            }
            
        }
		
		//DONGND:: create data for owl carousel with item custom
		if ($assign['formAtts']['carousel_type'] == 'owlcarousel')
		{			
			//DONGND:: build data for fake item loading
			$assign['formAtts']['number_fake_item'] = $assign['formAtts']['items'];
			$array_fake_item = array();
			$array_fake_item['m'] = $assign['formAtts']['itemsmobile'];
			$array_fake_item['sm'] = $assign['formAtts']['itemstablet'];
			$array_fake_item['md'] = $assign['formAtts']['itemsdesktopsmall'];
			$array_fake_item['lg'] = $assign['formAtts']['itemsdesktop'];
			$array_fake_item['xl'] = $assign['formAtts']['items'];
			$assign['formAtts']['array_fake_item'] = $array_fake_item;
			
			if (isset($assign['formAtts']['itemscustom']) && $assign['formAtts']['itemscustom'] != '')
			{
				$array_item_custom = Tools::jsonDecode($assign['formAtts']['itemscustom']);
				$array_item_custom_tmp = array();
				$array_number_item = array();
				foreach ($array_item_custom as $array_item_custom_val)
				{
					$size_window = $array_item_custom_val[0];
					$number_item = $array_item_custom_val[1];
					if (0 <= $size_window && $size_window < 576)
					{
						$array_item_custom_tmp['m'] = $number_item;
					} 
					else if (576 <= $size_window && $size_window < 768)
					{
						$array_item_custom_tmp['sm'] = $number_item;
					}
					else if (768 <= $size_window && $size_window < 992)
					{
						$array_item_custom_tmp['md'] = $number_item;
					}
					else if (992 <= $size_window && $size_window < 1200)
					{
						$array_item_custom_tmp['lg'] = $number_item;
					}
					else if ($size_window >= 1200)
					{
						$array_item_custom_tmp['xl'] = $number_item;
					}
					$array_item_custom_tmp[$size_window] = $number_item;
					$array_number_item[] = $number_item;
				};
				$assign['formAtts']['array_fake_item'] = array_merge($array_fake_item, $array_item_custom_tmp);
				
				if (max($array_number_item) > $assign['formAtts']['items'])
				{
					$assign['formAtts']['number_fake_item'] = max($array_number_item);
				}
			}			
		}
        return $assign;
    }
}
