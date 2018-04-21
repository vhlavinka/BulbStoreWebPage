<?php
/* Smarty version 3.1.30, created on 2018-04-11 03:50:44
  from "C:\Users\la_le\OneDrive\Documents\NetBeansProjects\BulbStore\BulbStore\templates\myBags.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5acd69f43c8980_77902102',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ab92a940971c8598c351c4858fadfe8399abe88d' => 
    array (
      0 => 'C:\\Users\\la_le\\OneDrive\\Documents\\NetBeansProjects\\BulbStore\\BulbStore\\templates\\myBags.tpl',
      1 => 1523411439,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_5acd69f43c8980_77902102 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18244064345acd69f43bb8b2_43652708', "localstyle");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5947654205acd69f43c81b2_23438195', "main");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "localstyle"} */
class Block_18244064345acd69f43bb8b2_43652708 extends Smarty_Internal_Block
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
class Block_5947654205acd69f43c81b2_23438195 extends Smarty_Internal_Block
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
      </tr> 
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
  
  </table>

<?php
}
}
/* {/block "main"} */
}
