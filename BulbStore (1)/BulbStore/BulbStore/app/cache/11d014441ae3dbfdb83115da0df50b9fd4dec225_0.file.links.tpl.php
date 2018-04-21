<?php
/* Smarty version 3.1.30, created on 2018-04-17 21:48:11
  from "C:\Users\Val\Documents\NetBeansProjects\BulbStore\BulbStore\templates\links.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad64f7b14fe90_05678748',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '11d014441ae3dbfdb83115da0df50b9fd4dec225' => 
    array (
      0 => 'C:\\Users\\Val\\Documents\\NetBeansProjects\\BulbStore\\BulbStore\\templates\\links.tpl',
      1 => 1523994200,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ad64f7b14fe90_05678748 (Smarty_Internal_Template $_smarty_tpl) {
?>


<?php if ($_smarty_tpl->tpl_vars['session']->value->login && $_smarty_tpl->tpl_vars['session']->value->login->is_admin) {?>
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
