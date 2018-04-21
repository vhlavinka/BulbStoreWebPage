<?php
/* Smarty version 3.1.30, created on 2018-04-17 21:48:36
  from "C:\Users\Val\Documents\NetBeansProjects\BulbStore\BulbStore\templates\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad64f9455c9d8_06013130',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ebd2a10bb8874893dca801cad47da36640a4e8f2' => 
    array (
      0 => 'C:\\Users\\Val\\Documents\\NetBeansProjects\\BulbStore\\BulbStore\\templates\\index.tpl',
      1 => 1523994514,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_5ad64f9455c9d8_06013130 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_html_options')) require_once 'C:\\Users\\Val\\Documents\\NetBeansProjects\\BulbStore\\BulbStore\\include\\libs\\plugins\\function.html_options.php';
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11014174695ad64f94540161_44281173', "localstyle");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21023629665ad64f9455be14_98759381', "main");
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "localstyle"} */
class Block_11014174695ad64f94540161_44281173 extends Smarty_Internal_Block
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
class Block_21023629665ad64f9455be14_98759381 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  
  
  
  
  <div class='top'>

    <h2>Bulb Selection <span class="order">(by <?php echo $_smarty_tpl->tpl_vars['order']->value;?>
)</span></h2>

    <form action="<?php echo $_SERVER['PHP_SELF'];?>
" method="post">
      <button type="submit" name="doit">Show by Type:</button>
      <select name="dd">
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
