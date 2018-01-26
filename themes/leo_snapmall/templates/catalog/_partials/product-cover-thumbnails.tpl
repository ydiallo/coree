{**
 * 2007-2017 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2017 PrestaShop SA
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}
<div class="images-container">
  {block name='product_cover'}
    <div class="product-cover">
      {block name='product_flags'}
        <ul class="product-flags">
          {foreach from=$product.flags item=flag}
            <li class="product-flag {$flag.type}">{$flag.label}</li>
          {/foreach}
        </ul>
      {/block}
      <img class="js-qv-product-cover img-fluid" src="{$product.cover.bySize.large_default.url}" alt="{$product.cover.legend}" title="{$product.cover.legend}" itemprop="image">
      <div class="layer hidden-sm-down" data-toggle="modal" data-target="#product-modal">
        <i class="material-icons zoom-in">&#xE8FF;</i>
      </div>
    </div>
  {/block}

  <div class="thumb-block">
    {block name='product_images'}
      <div class="js-qv-mask mask">
        <ul class="product-images js-qv-product-images">
          {foreach from=$product.images item=image}
            <li class="thumb-container">
              <img
                class="thumb js-thumb {if $image.id_image == $product.cover.id_image} selected {/if}"
                data-image-medium-src="{$image.bySize.medium_default.url}"
                data-image-large-src="{$image.bySize.large_default.url}"
                src="{$image.bySize.small_default.url}"
                alt="{$image.legend}"
                title="{$image.legend}"
                itemprop="image"
              >
            </li>
          {/foreach}
        </ul>
      </div>
      <div class="scroll-box-arrows scroll arrows js-arrows">
        <i class="material-icons left arrow-down js-arrow-down">&#xE314;</i>
        <i class="material-icons right arrow-up js-arrow-up">&#xE315;</i>
      </div>
    {/block}
  </div>

</div>
{hook h='displayAfterProductThumbs'}
