{* 
* @Module Name: AP Page Builder
* @Website: apollotheme.com - prestashop template provider
* @author Apollotheme <apollotheme@gmail.com>
* @copyright Apollotheme
* @description: ApPageBuilder is module help you can build content for your shop
*}
    {if Configuration::get('LEOFEATURE_ENABLE_PRODUCTWISHLIST')}      <a        class="ap-btn-wishlist"        href="{url entity='module' name='leofeature' controller='mywishlist'}"        title="{l s='Wishlist' d='Shop.Theme.Global'}"      >        <i class="fa fa-heart"></i>    <span class="ap-total-wishlist ap-total"></span>      </a>    {/if}