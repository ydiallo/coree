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

<div class="block-contact block block-toggler accordion_small_screen wrapper">
  {assign var=_expand_id value=10|mt_rand:100000}
  <div class="title clearfix" data-target="#footer_sub_menu_{$_expand_id}" data-toggle="collapse">
    <h4 class="block-contact-title title_block">
      <a href="{$urls.pages.stores}">{l s='About us' d='Shop.Theme.Global'}</a>
    </h4>
    <span class="float-xs-right hidden-md-up">
      <span class="navbar-toggler collapse-icons">
        <i class="material-icons add">&#xE313;</i>
        <i class="material-icons remove">&#xE316;</i>
      </span>
    </span>
  </div>
  <div class="toggle-footer collapse" id="footer_sub_menu_{$_expand_id}">
    <div class="desc-block">
      {l s="If your question is not answered there, please use one of the contact methods below." d='Shop.Theme.Global'}
    </div>
    <ul class="list-block">
      {if $contact_infos.address && ($contact_infos.address.address1 || $contact_infos.address.address1)}
        {if $contact_infos.address.address1}
          <li>
            <i class="fa fa-map-marker"></i>
            <span>
              {* [1][/1] is for a HTML tag. *}
              {$contact_infos.address.address1}, 
              {if $contact_infos.address.city}
                {$contact_infos.address.city}, 
              {/if}
              {if $contact_infos.address.country}
                {$contact_infos.address.country}
              {/if}
            </span>
          </li>
        {/if}
        {if  $contact_infos.address.address2}
          <li>
            <i class="fa fa-map-marker"></i>
            <span>
              {* [1][/1] is for a HTML tag. *}
              {$contact_infos.address.address2}, 
              {if $contact_infos.address.city}
                {$contact_infos.address.city}, 
              {/if}
              {if $contact_infos.address.country}
                {$contact_infos.address.country}
              {/if}
            </span>
          </li>
        {/if}
      {else}
        <li>
          <i class="fa fa-map-marker"></i>
          <span>
            {* [1][/1] is for a HTML tag. *}
            {if $contact_infos.address.city}
              {$contact_infos.address.city}, 
            {/if}
            {if $contact_infos.address.country}
              {$contact_infos.address.country}
            {/if}
          </span>
        </li>
      {/if}

      {if $contact_infos.phone}
        <li>
          <i class="fa fa-phone"></i>
          {* [1][/1] is for a HTML tag. *}
          {l s='[1]%phone%[/1]'
            sprintf=[
            '[1]' => '<span>',
            '[/1]' => '</span>',
            '%phone%' => $contact_infos.phone
            ]
            d='Shop.Theme.Global'
          }
        </li>
      {/if}

      {if $contact_infos.fax}
        <li>
          <i class="fa fa-fax"></i>
          {* [1][/1] is for a HTML tag. *}
          {l s='[1]%fax%[/1]'
            sprintf=[
            '[1]' => '<span>',
            '[/1]' => '</span>',
            '%fax%' => $contact_infos.fax
            ]
            d='Shop.Theme.Global'
          }
        </li>
      {/if}

      {if $contact_infos.email}
        <li>
          <i class="fa fa-envelope"></i>
          {* [1][/1] is for a HTML tag. *}
          {l
            s='[1]%email%[/1]'
            sprintf=[
              '[1]' => '<span>',
              '[/1]' => '</span>',
              '%email%' => $contact_infos.email
            ]
            d='Shop.Theme.Global'
          }
        </li>
      {/if}
    </ul>
  </div>
</div>