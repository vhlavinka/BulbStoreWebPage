<?php
/* Smarty version 3.1.30, created on 2018-04-15 00:12:39
  from "C:\Users\la_le\OneDrive\Documents\NetBeansProjects\BulbStore\BulbStore\templates\links.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad27cd744e6c0_75999766',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'acb5ef5666cd40d84053f8423a20e993f87424ad' => 
    array (
      0 => 'C:\\Users\\la_le\\OneDrive\\Documents\\NetBeansProjects\\BulbStore\\BulbStore\\templates\\links.tpl',
      1 => 1523743829,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ad27cd744e6c0_75999766 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['session']->value->login && $_smarty_tpl->tpl_vars['session']->value->login->is_admin) {?>
    <li><a href="allBags.php">All Bags</a></li>
    <li><a href="addBulbInitial.php">Add Bulb</a></li>
    <li><a href="addTypeInitial.php">Add Type</a></li>
<?php } else { ?>
    <li><a href="cart.php">Cart</a></li>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['session']->value->login && !$_smarty_tpl->tpl_vars['session']->value->login->is_admin) {?>
  <li><a href="myBags.php">My Bags</a></li>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['session']->value->login) {?> 
  <li><a href="logout.php">Logout</a></li>
<?php } else { ?>
  <li><a href="login.php">Login</a></li>
<?php }?>



<?php }
}
