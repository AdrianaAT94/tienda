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
 * @copyright PrestaShop SA
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}

<div id="blockEmailSubscription_{$hookName}" class="block_newsletter block row">
    <div class="main-text-newsletter col-lg-4 col-md-12">
        <h3 class="title_block text-xs-center" id="block-newsletter-label">{l s='Subscribe to Newsletter' d='Shop.Theme.Global'}</h3>
        {if $conditions}
            <p>{$conditions}</p>
        {/if}
    </div>
    <div class="block_content col-lg-8 col-md-12">
        <form action="{$urls.current_url}#blockEmailSubscription_{$hookName}" method="post">
            {*{if $msg}*}
                {*<p class="alert {if $nw_error}alert-danger{else}alert-success{/if}">*}
                    {*{$msg}*}
                {*</p>*}
            {*{/if}*}
            <div class="input-wrapper">
                <input
                        name="email" required
                        type="email"
                        value="{$value}"
                        placeholder="{l s='Your email address' d='Shop.Theme.Global'}"
                        aria-labelledby="block-newsletter-label"
                        >
                <button
                        class="btn"
                        name="submitNewsletter"
                        type="submit"
                        value="{l s='Subscribe' d='Shop.Theme.Global'}"
                        >
                    <span>{l s='Sign up' d='Shop.Theme.Global'}</span>
                </button>
            </div>
            <input type="hidden" name="blockHookName" value="{$hookName}" /> <input type="hidden" name="action" value="0">
            <div class="clearfix"></div>
            <div>
                {if $conditions}
                    <p>{$conditions}</p>
                {/if}
                {if $msg}
                    <p class="alert {if $nw_error}alert-danger{else}alert-success{/if}">
                        {$msg}
                    </p>
                {/if}
                {if isset($id_module)}
                    {hook h='displayGDPRConsent' id_module=$id_module}
                {/if}
            </div>
        </form>
    </div>
</div>
