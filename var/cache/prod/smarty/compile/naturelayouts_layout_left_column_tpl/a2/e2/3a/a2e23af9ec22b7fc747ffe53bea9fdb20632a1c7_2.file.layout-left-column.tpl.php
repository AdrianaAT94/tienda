<?php
/* Smarty version 3.1.34-dev-7, created on 2021-04-01 17:16:32
  from 'C:\xampp\htdocs\webs\tienda\themes\nature\templates\layouts\layout-left-column.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6065e3d0e3c5c0_40195232',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a2e23af9ec22b7fc747ffe53bea9fdb20632a1c7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\webs\\tienda\\themes\\nature\\templates\\layouts\\layout-left-column.tpl',
      1 => 1616780395,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6065e3d0e3c5c0_40195232 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15623934796065e3d0e38dd7_46428581', 'right_column');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4840602166065e3d0e3a7f7_95714875', 'content_wrapper');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/layout-both-columns.tpl');
}
/* {block 'right_column'} */
class Block_15623934796065e3d0e38dd7_46428581 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'right_column' => 
  array (
    0 => 'Block_15623934796065e3d0e38dd7_46428581',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'right_column'} */
/* {block 'content'} */
class Block_10199252856065e3d0e3b345_08852660 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <p>Hello world! This is HTML5 Boilerplate.</p>
    <?php
}
}
/* {/block 'content'} */
/* {block 'content_wrapper'} */
class Block_4840602166065e3d0e3a7f7_95714875 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
    0 => 'Block_4840602166065e3d0e3a7f7_95714875',
  ),
  'content' => 
  array (
    0 => 'Block_10199252856065e3d0e3b345_08852660',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div id="content-wrapper" class="left-column col-xs-12 col-sm-8 col-md-9">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10199252856065e3d0e3b345_08852660', 'content', $this->tplIndex);
?>

  </div>
<?php
}
}
/* {/block 'content_wrapper'} */
}
