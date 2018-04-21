<?php
/* Smarty version 3.1.30, created on 2018-04-10 07:10:27
  from "C:\Users\la_le\OneDrive\Documents\NetBeansProjects\BulbStore\BulbStore\templates\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5acc4743aab1f3_08311559',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9ea91d40c1c9d5af5cc554f7f6f3d4639ca3f1c9' => 
    array (
      0 => 'C:\\Users\\la_le\\OneDrive\\Documents\\NetBeansProjects\\BulbStore\\BulbStore\\templates\\index.tpl',
      1 => 1523337025,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_5acc4743aab1f3_08311559 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_html_options')) require_once 'C:\\Users\\la_le\\OneDrive\\Documents\\NetBeansProjects\\BulbStore\\BulbStore\\include\\libs\\plugins\\function.html_options.php';
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4941096855acc4743a3ba59_89526662', "localstyle");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14006276335acc4743aaaac5_26238077', "main");
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "localstyle"} */
class Block_4941096855acc4743a3ba59_89526662 extends Smarty_Internal_Block
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
class Block_14006276335acc4743aaaac5_26238077 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  
  
  
  
  <div class='top'>

    <h2>Bulb Selection <span class="order">(by <?php echo $_smarty_tpl->tpl_vars['order']->value;?>
)</span></h2>

    <form action="<?php echo $_SERVER['PHP_SELF'];?>
" method="post">
      <button type="submit" name="doit">Show by Type:</button>
      <select name="dd" class="form-control">
          <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['types']->value,'selected'=>$_smarty_tpl->tpl_vars['session']->value->dd),$_smarty_tpl);?>

      </select>
    </form>
  </div>

  <table class="table table-hover table-condensed">
    <tr>
      <th><a href="/default/BulbStore/BulbStore/setBulbOrder.php?field=name">name</a></th>
      <th class="price"><a href="/default/BulbStore/BulbStore/setBulbOrder.php?field=price">price</a></th>
      <th>type</th>
    </tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['bulbs']->value, 'bulb');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['bulb']->value) {
?>
      <tr>
        <td>
          <a href="showBulb.php?bulb_id=<?php echo $_smarty_tpl->tpl_vars['bulb']->value->id;?>
">
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bulb']->value->name, ENT_QUOTES, 'UTF-8', true);?>

          </a>
        </td>
        <td class="price">$<?php echo number_format($_smarty_tpl->tpl_vars['bulb']->value->price,2);?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['bulb']->value->type->name;?>
</td>
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
