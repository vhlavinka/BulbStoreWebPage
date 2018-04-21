<?php
/* Smarty version 3.1.30, created on 2018-04-17 23:07:47
  from "C:\Users\Val\Documents\NetBeansProjects\BulbStore\BulbStore\templates\showBulb.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad662236beaf6_53683567',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '60c2789ff5dd3de9d2c499af0ded2c969c415319' => 
    array (
      0 => 'C:\\Users\\Val\\Documents\\NetBeansProjects\\BulbStore\\BulbStore\\templates\\showBulb.tpl',
      1 => 1523999258,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_5ad662236beaf6_53683567 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1888022055ad662236a0c50_18364247', "localstyle");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16283418745ad662236a2ca6_71761549', "localscript");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11978823105ad662236bdf81_63564851', "main");
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "localstyle"} */
class Block_1888022055ad662236a0c50_18364247 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <style type="text/css">
    .content {
      padding: 0 3px;
    }
    button {
      white-space: nowrap;
    }
    img {
      max-height: 250px;
      max-width: 250px;
    }
    input[name=amount] {
      width: 50px;
    }
    #err_msg {
      color: red;
    }
  </style>
<?php
}
}
/* {/block "localstyle"} */
/* {block "localscript"} */
class Block_16283418745ad662236a2ca6_71761549 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo '<script'; ?>
  type="text/javascript">
    $(function() {
      $("input[name='amount']").keypress(function (e) {
        //if key is not backspace, not an arrow, or not a digit, ignore it
        if (e.which !== 8 && e.which !== 0 && (e.which < 48 || e.which > 57)) {
          $("#err_msg").html("(digits only)").show().fadeOut(2000);
          return false;
        }
      });
    });
  <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "localscript"} */
/* {block "main"} */
class Block_11978823105ad662236bdf81_63564851 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <div class="content">
    <p>
      <b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bulb']->value->name, ENT_QUOTES, 'UTF-8', true);?>
 (#<?php echo $_smarty_tpl->tpl_vars['bulb']->value->id;?>
)</b>
      <br />
      price: $<?php echo number_format($_smarty_tpl->tpl_vars['bulb']->value->price,2);?>
      
      <br />
      type: <?php echo $_smarty_tpl->tpl_vars['bulb']->value->type->name;?>
      
    </p>

    <p>
      <?php echo $_smarty_tpl->tpl_vars['bulb']->value->description;?>
  
    </p>
  </div>
  

  <table class='table table-condensed borderless'>
    <tr>
      <td>       
        <img class='img-responsive' src="<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
" />
      </td>
      <td>         
      <?php if (isset($_smarty_tpl->tpl_vars['session']->value->login->is_admin) && $_smarty_tpl->tpl_vars['session']->value->login->is_admin) {?>
        <form action="modifyBulbInitial.php" method="GET">  
          <input type='hidden' name='bulb_id' value="<?php echo $_smarty_tpl->tpl_vars['bulb']->value->id;?>
" />
          <button type="submit">Modify Bulb</button> 
        </form>
      <?php } else { ?>
        <form action="cart.php" method="POST">
          <b>Amount</b> <span id="err_msg"></span>
          <br />
          <input type='hidden' name='bulb_id' value="<?php echo $_smarty_tpl->tpl_vars['bulb']->value->id;?>
" />
          <input class="form-control" type="text" name="amount" value="<?php echo $_smarty_tpl->tpl_vars['amount']->value;?>
"/>
          <button type="submit" name="doit">Change Amount</button>
        </form>
      <?php }?> 
      </td>
    </tr>
  </table>

  
          

<?php
}
}
/* {/block "main"} */
}
