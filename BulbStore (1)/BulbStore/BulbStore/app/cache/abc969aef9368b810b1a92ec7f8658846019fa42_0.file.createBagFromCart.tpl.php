<?php
/* Smarty version 3.1.30, created on 2018-04-14 03:38:06
  from "C:\Users\la_le\OneDrive\Documents\NetBeansProjects\BulbStore\BulbStore\templates\createBagFromCart.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad15b7e343a69_49724150',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'abc969aef9368b810b1a92ec7f8658846019fa42' => 
    array (
      0 => 'C:\\Users\\la_le\\OneDrive\\Documents\\NetBeansProjects\\BulbStore\\BulbStore\\templates\\createBagFromCart.tpl',
      1 => 1523669881,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_5ad15b7e343a69_49724150 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15926055375ad15b7e33aa31_62872738', "localstyle");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6601931175ad15b7e343387_96960574', "main");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "localstyle"} */
class Block_15926055375ad15b7e33aa31_62872738 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block "localstyle"} */
/* {block "main"} */
class Block_6601931175ad15b7e343387_96960574 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    
   
   
<h2>Sample</h2>

<pre>
<?php echo var_export($_smarty_tpl->tpl_vars['items']->value,true);?>

<?php echo $_smarty_tpl->tpl_vars['bag']->value;?>

</pre>

<?php
}
}
/* {/block "main"} */
}
