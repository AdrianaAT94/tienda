{* 
* @Module Name: AP Page Builder
* @Website: apollotheme.com - prestashop template provider
* @author Apollotheme <apollotheme@gmail.com>
* @copyright Apollotheme
* @description: ApPageBuilder is module help you can build content for your shop
*}
{if Configuration::get('LEOFEATURE_ENABLE_PRODUCTCOMPARE')}      <a        class="ap-btn-compare"        href="{url entity='module' name='leofeature' controller='productscompare'}"        title="{l s='Compare' d='Shop.Theme.Global'}"      >        <i class="fa fa-refresh"></i>    <span class="ap-total-compare ap-total"></span>      </a>{/if}