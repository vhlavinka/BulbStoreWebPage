<?php
/* Smarty version 3.1.30, created on 2018-04-18 04:17:45
  from "C:\Users\Val\Documents\NetBeansProjects\BulbStore\BulbStore\templates\showBag.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad6aac91d8998_74632904',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cea33b1164e4c0f3ce74059ba88a80dcb79b4ac7' => 
    array (
      0 => 'C:\\Users\\Val\\Documents\\NetBeansProjects\\BulbStore\\BulbStore\\templates\\showBag.tpl',
      1 => 1524017858,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_5ad6aac91d8998_74632904 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_session_get_flash')) require_once 'C:\\Users\\Val\\Documents\\NetBeansProjects\\BulbStore\\BulbStore\\include\\myplugins\\function.session_get_flash.php';
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7531521745ad6aac91d7f36_91579097', "main");
?>


<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "main"} */
class Block_7531521745ad6aac91d7f36_91579097 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<h2>Bag #<?php echo $_smarty_tpl->tpl_vars['bag_id']->value;?>
</h2>

  <?php if ($_smarty_tpl->tpl_vars['session']->value->login && $_smarty_tpl->tpl_vars['session']->value->login->is_admin) {?>
    User: <?php echo $_smarty_tpl->tpl_vars['user']->value->name;?>

    <br/>
    Email: <?php echo $_smarty_tpl->tpl_vars['user']->value->email;?>

  <?php }?>
  
   <table class="table table-hover table-condensed">
    <tr> 
        <th>name</th>
        <th>id</th>
        <th>type</th>
        <th>price</th>
        <th>amount</th>
        <?php if ($_smarty_tpl->tpl_vars['session']->value->login && $_smarty_tpl->tpl_vars['session']->value->login->is_admin) {?>
          <th>stock</th>
        <?php }?>
        <th>sub-total</th>
    </tr>   
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
    <tr> 
        <td><?php echo $_smarty_tpl->tpl_vars['item']->value->bulb->name;?>
</a></td>
        <td><?php echo $_smarty_tpl->tpl_vars['item']->value->bulb_id;?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['item']->value->bulb->type->name;?>
</td>
        <td>$<?php echo number_format($_smarty_tpl->tpl_vars['item']->value->bulb->price,2);?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['item']->value->amount;?>
</td>
        <?php if ($_smarty_tpl->tpl_vars['session']->value->login && $_smarty_tpl->tpl_vars['session']->value->login->is_admin) {?>
            <td><?php echo $_smarty_tpl->tpl_vars['item']->value->bulb->in_stock;?>
</td>
        <?php }?>
        <td>$<?php echo number_format($_smarty_tpl->tpl_vars['item']->value->amount*$_smarty_tpl->tpl_vars['item']->value->bulb->price,2);?>
</td>       
    </tr>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


    <tr>
        <th>Total:</th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <?php if ($_smarty_tpl->tpl_vars['session']->value->login && $_smarty_tpl->tpl_vars['session']->value->login->is_admin) {?>
          <th></th>
        <?php }?>
        <th>$<?php echo number_format($_smarty_tpl->tpl_vars['total']->value,2);?>
</th>
    </tr>
  </table>
  <br/>
  
  <?php if ($_smarty_tpl->tpl_vars['session']->value->login && $_smarty_tpl->tpl_vars['session']->value->login->is_admin) {?>
  <form action="processBag.php" method="get"> 
      <input type='hidden' name='bag_id' value="<?php echo $_smarty_tpl->tpl_vars['bag_id']->value;?>
" />
      <button type="submit"><?php echo $_smarty_tpl->tpl_vars['button_title']->value;?>
</button>
      <input type='hidden' name='confirm' 
        value='<?php echo smarty_function_session_get_flash(array('var'=>'confirm'),$_smarty_tpl);?>
' />
  </form>
  <?php }?>

  <h4 class="message"><?php echo smarty_function_session_get_flash(array('var'=>'message'),$_smarty_tpl);?>
</h4>
<?php
}
}
/* {/block "main"} */
}
