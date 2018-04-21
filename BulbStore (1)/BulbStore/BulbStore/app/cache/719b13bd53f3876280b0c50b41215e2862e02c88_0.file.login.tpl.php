<?php
/* Smarty version 3.1.30, created on 2018-04-11 02:43:47
  from "C:\Users\la_le\OneDrive\Documents\NetBeansProjects\BulbStore\BulbStore\templates\login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5acd5a43b79d12_07417716',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '719b13bd53f3876280b0c50b41215e2862e02c88' => 
    array (
      0 => 'C:\\Users\\la_le\\OneDrive\\Documents\\NetBeansProjects\\BulbStore\\BulbStore\\templates\\login.tpl',
      1 => 1523407421,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_5acd5a43b79d12_07417716 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_session_get_flash')) require_once 'C:\\Users\\la_le\\OneDrive\\Documents\\NetBeansProjects\\BulbStore\\BulbStore\\include\\myplugins\\function.session_get_flash.php';
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

 

 
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7895863555acd5a43a0c399_38562351', "localstyle");
?>

 
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1316566845acd5a43b793d4_66470055', "main");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "localstyle"} */
class Block_7895863555acd5a43a0c399_38562351 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <style>
    th {
      width: 10px;
    }
  </style>
<?php
}
}
/* {/block "localstyle"} */
/* {block "main"} */
class Block_1316566845acd5a43b793d4_66470055 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<h2>Login</h2>
 
<p>Please enter access information</p>
<form action="validate.php" method="post" autocomplete="off">
  <table class="table table-condensed borderless">
    <tr>
      <th>user:</th>
      <td><input class="form-control" type="text" name="username"
                 value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['username']->value, ENT_QUOTES, 'UTF-8', true);?>
" /></td>
    </tr>
    <tr>
      <th>password:</th>
      <td><input class="form-control" type="password" name="password" /></td>
    </tr>
    <tr>
      <td></td>
      <td><button type="submit">Access</button></td>
    </tr>
  </table>
 
  <h4 class="message"><?php echo smarty_function_session_get_flash(array('var'=>'message'),$_smarty_tpl);?>
</h4>
</form>
<?php
}
}
/* {/block "main"} */
}
