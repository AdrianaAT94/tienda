<?php
/* Smarty version 3.1.34-dev-7, created on 2021-04-05 11:26:09
  from 'C:\xampp\htdocs\webs\tienda\panel\themes\default\template\controllers\modules\configuration_bar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_606ad7b18195f6_24148032',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7fac81cccf17c3661b1a3b059b118aec966fe04a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\webs\\tienda\\panel\\themes\\default\\template\\controllers\\modules\\configuration_bar.tpl',
      1 => 1616776621,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_606ad7b18195f6_24148032 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\webs\\tienda\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.regex_replace.php','function'=>'smarty_modifier_regex_replace',),));
?>

<?php $_smarty_tpl->_assignInScope('module_name', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_name']->value,'html','UTF-8' )));
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', null, null);
echo (('/&module_name=').($_smarty_tpl->tpl_vars['module_name']->value)).('/');
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (isset($_smarty_tpl->tpl_vars['display_multishop_checkbox']->value) && $_smarty_tpl->tpl_vars['display_multishop_checkbox']->value) {?>
<div class="bootstrap panel">
	<h3><i class="icon-cogs"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Configuration','d'=>'Admin.Global'),$_smarty_tpl ) );?>
</h3>
	<input type="checkbox" name="activateModule" value="1"<?php if ($_smarty_tpl->tpl_vars['module']->value->isEnabledForShopContext()) {?> checked="checked"<?php }?>
		onclick="location.href = '<?php echo smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['current_url']->value,$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'default'),'');?>
&amp;module_name=<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
&amp;enable=' + (($(this).attr('checked')) ? 1 : 0);" />
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Activate module for this shop context: %s.','sprintf'=>array($_smarty_tpl->tpl_vars['shop_context']->value),'d'=>'Admin.Modules.Notification'),$_smarty_tpl ) );?>

</div>
<?php }
}
}
