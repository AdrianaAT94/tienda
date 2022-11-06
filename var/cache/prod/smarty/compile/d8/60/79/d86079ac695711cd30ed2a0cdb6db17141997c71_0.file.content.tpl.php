<?php
/* Smarty version 3.1.34-dev-7, created on 2021-03-31 18:12:07
  from 'C:\xampp\htdocs\webs\tienda\panel\themes\new-theme\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60649f57197673_82367774',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd86079ac695711cd30ed2a0cdb6db17141997c71' => 
    array (
      0 => 'C:\\xampp\\htdocs\\webs\\tienda\\panel\\themes\\new-theme\\template\\content.tpl',
      1 => 1616776609,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60649f57197673_82367774 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>


<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
