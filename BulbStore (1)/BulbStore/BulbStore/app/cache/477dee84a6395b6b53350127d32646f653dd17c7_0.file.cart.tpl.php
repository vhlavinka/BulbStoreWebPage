<?php
/* Smarty version 3.1.30, created on 2018-04-17 16:04:14
  from "C:\Users\la_le\OneDrive\Documents\NetBeansProjects\BulbStore\BulbStore\templates\cart.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad5fede168c60_57817085',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '477dee84a6395b6b53350127d32646f653dd17c7' => 
    array (
      0 => 'C:\\Users\\la_le\\OneDrive\\Documents\\NetBeansProjects\\BulbStore\\BulbStore\\templates\\cart.tpl',
      1 => 1523973852,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_5ad5fede168c60_57817085 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2134758365ad5fede1566a0_15567714', "localstyle");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14697831705ad5fede1685b7_52916733', "main");
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "localstyle"} */
class Block_2134758365ad5fede1566a0_15567714 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <style type="text/css">
    .top { 
      margin-bottom: 20px; 
    }
    .top h2 { 
      display: inline-block;
      margin: 0 30px 0 0;
      vertical-align: bottom;
    }
    .top form {
      display: inline-block;
      vertical-align: bottom;
    }
    .top .order {
      font-size: 70%;
      font-weight: normal;
    }
  </style>
<?php
}
}
/* {/block "localstyle"} */
/* {block "main"} */
class Block_14697831705ad5fede1685b7_52916733 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class ='top'>    
    <h2>My Cart</h2>
</div>
    
  <table style="width:100%">
    <tr> 
        <th>name</th>
        <th>id</th>
        <th>type</th>
        <th>price</th>
        <th>amount</th>
        <th></th>
    </tr>
    
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['session']->value->cart_info, 'ci');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ci']->value) {
?>
    <tr> 
        <td><a href="/default/BulbStore/BulbStore/showBulb.php?bulb_id=<?php echo $_smarty_tpl->tpl_vars['ci']->value['bulb_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['ci']->value['name'];?>
</a></td>
        <td><?php echo $_smarty_tpl->tpl_vars['ci']->value['bulb_id'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['ci']->value['type'];?>
</td>
        <td>$<?php echo number_format($_smarty_tpl->tpl_vars['ci']->value['price'],2);?>
</td>
        <td>
            <?php echo $_smarty_tpl->tpl_vars['ci']->value['amount'];?>

        </td>
        <td>$<?php echo number_format($_smarty_tpl->tpl_vars['ci']->value['sub_total'],2);?>
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
        <th>$<?php echo number_format($_smarty_tpl->tpl_vars['total_price']->value,2);?>
</th>
    </tr>
   
  </table>
    <br/>
  <?php if ($_smarty_tpl->tpl_vars['session']->value->login && ($_smarty_tpl->tpl_vars['session']->value->cart != array())) {?>
  <form action="createBagFromCart.php" method="post">
    <table>   
      <input type='hidden' name='cart' value="<?php echo $_smarty_tpl->tpl_vars['cart_query']->value;?>
" />
      <button type="submit" name='makebag'>Make a Bag from Cart</button> 
     </table>
   </form>
   <?php }?>   







<?php
}
}
/* {/block "main"} */
}
