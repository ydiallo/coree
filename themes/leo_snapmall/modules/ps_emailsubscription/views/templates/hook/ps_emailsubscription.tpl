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

<div id="block_newsletter" class="block_newsletter block block-toggler accordion_small_screen">
  <div class="popup-title-newsletter"></div> 
  <div class="popup-content-newsletter">
    <i class="close-popup fa fa-close"></i>
    <div class="box-title title clearfix" data-target="#block_newsletter_dropdown" data-toggle="collapse">
      <h3 class="title_block" id="block-newsletter-label">
        {l s='Newsletter' d='Shop.Theme.Global'}
      </h3>
      <span class="float-xs-right hidden-md-up">
        <span class="navbar-toggler collapse-icons">
          <i class="material-icons add">&#xE313;</i>
          <i class="material-icons remove">&#xE316;</i>
        </span>
      </span> 
    </div>
    <div class="block_content toggle-footer collapse" id="block_newsletter_dropdown">
      {if $conditions}
        <p class="description">{$conditions}</p>
      {/if} 
      <div class="row">
        <div class="col-xs-12">
          <form action="{$urls.pages.index}#footer" method="post">
            <div class="form-group">
              <div class="input-wrapper">
                <input
                  name="email"
                  type="text"
                  value="{$value}"
                  placeholder="{l s='Your email...' d='Shop.Theme.Global'}"
		  aria-labelledby="block-newsletter-label"
                >
              </div>
              <button
                class="btn btn-outline"
                name="submitNewsletter"
                type="submit"
              >
                <i class="fa fa-envelope"></i><span>{l s='Send' d='Shop.Theme.Global'}</span>
              </button>
              <input type="hidden" name="action" value="0">
            </div>
          </form>
        </div>
        <div class="col-xs-12">
          {if $msg}
            <p class="alert {if $nw_error}alert-danger{else}alert-success{/if}">
              {$msg}
            </p>
          {/if}
        </div>
      </div>
    </div>
  </div>
</div>
