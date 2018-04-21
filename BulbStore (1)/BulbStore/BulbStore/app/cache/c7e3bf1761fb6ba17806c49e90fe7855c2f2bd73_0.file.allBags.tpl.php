<?php
/* Smarty version 3.1.30, created on 2018-04-17 21:52:52
  from "C:\Users\Val\Documents\NetBeansProjects\BulbStore\BulbStore\templates\allBags.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad6509423ecd5_85636846',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c7e3bf1761fb6ba17806c49e90fe7855c2f2bd73' => 
    array (
      0 => 'C:\\Users\\Val\\Documents\\NetBeansProjects\\BulbStore\\BulbStore\\templates\\allBags.tpl',
      1 => 1523994200,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_5ad6509423ecd5_85636846 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_session_get_flash')) require_once 'C:\\Users\\Val\\Documents\\NetBeansProjects\\BulbStore\\BulbStore\\include\\myplugins\\function.session_get_flash.php';
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13230138235ad6509422c8f2_40057155', "localstyle");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21071725825ad6509423e6d8_00031180', "main");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "localstyle"} */
class Block_13230138235ad6509422c8f2_40057155 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <style type="text/css">
    td:first-child {
      width: 10px;
    }
  </style>
<?php
}
}
/* {/block "localstyle"} */
/* {block "main"} */
class Block_21071725825ad6509423e6d8_00031180 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<h2>My Bags</h2>
  <table style="width:100%">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['bags']->value, 'bag');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['bag']->value) {
?>  
      <tr>
        <th><a href="showBag.php?bag_id=<?php echo $_smarty_tpl->tpl_vars['bag']->value->id;?>
">BagID #<?php echo $_smarty_tpl->tpl_vars['bag']->value->id;?>
</a></th>
        <th>ordered: <?php echo $_smarty_tpl->tpl_vars['bag']->value->made_on;?>
 </th>
        <th>by: <?php echo $_smarty_tpl->tpl_vars['bag']->value->user->name;?>
</th>
      </tr> 
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
  
  </table>
<h4 class="message"><?php echo smarty_function_session_get_flash(array('var'=>'message'),$_smarty_tpl);?>
</h4>
<?php
}
}
/* {/block "main"} */
}
