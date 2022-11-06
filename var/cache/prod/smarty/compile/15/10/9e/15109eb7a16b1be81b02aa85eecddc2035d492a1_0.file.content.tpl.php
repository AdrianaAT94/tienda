<?php
/* Smarty version 3.1.34-dev-7, created on 2021-03-31 18:12:49
  from 'C:\xampp\htdocs\webs\tienda\panel\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60649f81c230a3_55086872',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '15109eb7a16b1be81b02aa85eecddc2035d492a1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\webs\\tienda\\panel\\themes\\default\\template\\content.tpl',
      1 => 1616776617,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60649f81c230a3_55086872 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>

<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
