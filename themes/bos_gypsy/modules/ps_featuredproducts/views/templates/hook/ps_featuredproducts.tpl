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
<section class="featured-products clearfix block">
  <h2 class="h2 products-section-title text-uppercase title_block">
    {l s='Popular Products' d='Shop.Theme.Catalog'}
  </h2>
  <div class="block_content">
    <div class="products">
      {include file="catalog/_partials/miniatures/leo_col_products.tpl" products=$products}
    </div>
    <a class="all-product-link float-xs-left float-md-right btn btn-outline" href="{$allProductsLink}">
      {l s='All products' d='Shop.Theme.Catalog'}<i class="material-icons">&#xE315;</i>
    </a>
  </div>
</section>
