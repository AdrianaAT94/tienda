{**
 *  PrestaShop
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
 * @copyright  PrestaShop SA
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}
<div class="userinfo-selector dropdown js-dropdown popup-over">
  <a href="javascript:void(0)" data-toggle="dropdown" class="popup-title" title="{l s='Account' d='Shop.Theme.Global'}">
    <i class="fa fa-user"></i>
    <span class="hidden-md-down">{l s='My account' d='Shop.Theme.Global'}</span>
    <i class="fa fa-angle-down" aria-hidden="true"></i>
  </a>
  <ul class="popup-content dropdown-menu user-info">
    {if $logged}
      <li>
        <a
          class="account" 
          href="{$my_account_url}"
          title="{l s='View my customer account' d='Shop.Theme.Customeraccount'}"
          rel="nofollow"
        >
          <i class="fa fa-user"></i>
          <span>{l s='Hello' d='Shop.Theme.Global'} {$customerName}</span>
        </a>
      </li>
      <li>
        <a
          class="logout"
          href="{$logout_url}"
          rel="nofollow"
        >
          <i class="fa fa-unlock-alt"></i>
          {l s='Sign out' d='Shop.Theme.Actions'}
        </a>
      </li>
    {else}
      <li>
        <a
          class="signin leo-quicklogin"
          data-enable-sociallogin="enable"
          data-type="popup"
          data-layout="login"
          href="javascript:void(0)"
          title="{l s='Log in to your customer account' d='Shop.Theme.Customeraccount'}"
          rel="nofollow"
        >
          <i class="fa fa-lock"></i>
          <span>{l s='Sign in' d='Shop.Theme.Actions'}</span>
        </a>
      </li>
    {/if}

    {*
    <li>
      <a
        class="myacount"
        href="{$my_account_url}"
        title="{l s='My account' d='Shop.Theme.Global'}"
        rel="nofollow"
      >
        <i class="fa fa-user"></i>
        <span>{l s='My account' d='Shop.Theme.Global'}</span>
      </a>
    </li>
    *}
    {if $logged}
    <li>
      <a
        class="checkout"
        href="{url entity='cart' params=['action' => show]}"
        title="{l s='Checkout' d='Shop.Theme.Customeraccount'}"
        rel="nofollow"
      >
        <i class="fa fa-share-square-o"></i>
        <span>{l s='Checkout' d='Shop.Theme.Actions'}</span>
      </a>
    </li>
    {/if}
  </ul>
</div>