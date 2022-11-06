<?php
/* Smarty version 3.1.34-dev-7, created on 2021-03-31 18:10:30
  from 'C:\xampp\htdocs\webs\tienda\themes\nature\templates\_partials\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60649ef6b088a6_05041227',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7b509c0603929980eb60f82a51df7bdafd146f50' => 
    array (
      0 => 'C:\\xampp\\htdocs\\webs\\tienda\\themes\\nature\\templates\\_partials\\footer.tpl',
      1 => 1616780395,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60649ef6b088a6_05041227 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
  <div class="row">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterBefore'),$_smarty_tpl ) );?>

  </div>
</div>
<div class="footer-container">
  <div class="container">
    <div class="row">
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooter'),$_smarty_tpl ) );?>

    </div>
    <div class="row">
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterAfter'),$_smarty_tpl ) );?>

    </div>
    <div class="row">
      <div class="col-md-12">
        <p>
          <a id="tecnoes" class="_blank" href="http://tecnoes.com" target="_blank">
		  <i class="fa fa-pagelines" aria-hidden="true"></i>
			<small>Tecnoes - Prestashop 1.7 free templates </small>
          </a>
        </p>
      </div>
    </div>
  </div>
</div>
<?php }
}
