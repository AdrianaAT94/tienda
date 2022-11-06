<?php
/* Smarty version 3.1.34-dev-7, created on 2021-03-31 18:10:26
  from 'C:\xampp\htdocs\webs\tienda\themes\nature\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60649ef20ea248_94492718',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '447febde0aa1a37c4dbdb0807d5f41096855654e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\webs\\tienda\\themes\\nature\\templates\\index.tpl',
      1 => 1616780395,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60649ef20ea248_94492718 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3243914060649ef20e5829_96173571', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_60256330060649ef20e66d9_80210759 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_41645238860649ef20e7aa6_41276864 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_3243914060649ef20e5829_96173571 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_3243914060649ef20e5829_96173571',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_60256330060649ef20e66d9_80210759',
  ),
  'page_content' => 
  array (
    0 => 'Block_41645238860649ef20e7aa6_41276864',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_60256330060649ef20e66d9_80210759', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_41645238860649ef20e7aa6_41276864', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
