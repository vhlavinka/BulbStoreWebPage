<?php
/* Smarty version 3.1.30, created on 2018-04-18 04:11:13
  from "C:\Users\Val\Documents\NetBeansProjects\BulbStore\BulbStore\templates\myBags.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad6a94149f374_40594432',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '15a165c54f40418aa705173140b7da643332afa5' => 
    array (
      0 => 'C:\\Users\\Val\\Documents\\NetBeansProjects\\BulbStore\\BulbStore\\templates\\myBags.tpl',
      1 => 1523994200,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_5ad6a94149f374_40594432 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19933433955ad6a940c68e15_07238839', "localstyle");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12989287575ad6a94149cf57_26667108', "main");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "localstyle"} */
class Block_19933433955ad6a940c68e15_07238839 extends Smarty_Internal_Block
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
class Block_12989287575ad6a94149cf57_26667108 extends Smarty_Internal_Block
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
