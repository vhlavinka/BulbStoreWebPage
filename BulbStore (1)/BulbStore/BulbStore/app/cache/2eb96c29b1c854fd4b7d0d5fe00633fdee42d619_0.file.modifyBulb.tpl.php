<?php
/* Smarty version 3.1.30, created on 2018-04-18 01:33:57
  from "C:\Users\Val\Documents\NetBeansProjects\BulbStore\BulbStore\templates\modifyBulb.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad68465191f14_59272802',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2eb96c29b1c854fd4b7d0d5fe00633fdee42d619' => 
    array (
      0 => 'C:\\Users\\Val\\Documents\\NetBeansProjects\\BulbStore\\BulbStore\\templates\\modifyBulb.tpl',
      1 => 1523994200,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_5ad68465191f14_59272802 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_html_options')) require_once 'C:\\Users\\Val\\Documents\\NetBeansProjects\\BulbStore\\BulbStore\\include\\libs\\plugins\\function.html_options.php';
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21174428595ad68464d2ecc0_59262282', "localstyle");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20892922525ad68465191583_72735193', "main");
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "localstyle"} */
class Block_21174428595ad68464d2ecc0_59262282 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<style type="text/css">
    td:first-child {
      width: 10px;
    }
    td {
      border: none ! important;
    }
    textarea {
      resize: vertical;
    }
  </style>
<?php
}
}
/* {/block "localstyle"} */
/* {block "main"} */
class Block_20892922525ad68465191583_72735193 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <h2>Modify Bulb</h2>

  <form action="modifyBulb.php" method="post">
    <input type="hidden" name="bulb_id" value="<?php echo $_smarty_tpl->tpl_vars['bulb_id']->value;?>
" />
    <table class="table table-condensed borderless">
      <tr>
        <td>name: </td>
        <td>
          <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>

        </td>
      </tr>
      <tr>
        <td>type: </td>
        <td>
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8', true);?>

        </td>
      </tr>
      <tr>
        <td>price ($): </td>
        <td>
          <input class="form-control" type="text" name="price" 
                 value="<?php echo number_format(htmlspecialchars($_smarty_tpl->tpl_vars['price']->value, ENT_QUOTES, 'UTF-8', true),2);?>
" />
        </td>
      </tr>
      <tr>
        <td>in stock: </td>
        <td>
          <input class="form-control" type="text" name="in_stock" 
                 value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['in_stock']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
        </td>
      </tr>
      <tr>
        <td>description: </td>
        <td>
          <textarea class="form-control" name="description"
                    ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['description']->value, ENT_QUOTES, 'UTF-8', true);?>
</textarea>
        </td>
      </tr>
      <tr>
        <td>image: </td>
        <td>
          <select class="form-control" name="image">
            <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['images']->value,'selected'=>$_smarty_tpl->tpl_vars['image']->value),$_smarty_tpl);?>

          </select>
        </td>
      </tr>
      <tr>
        <td></td>
        <td>  
          <button type="submit" name="doit">Modify</button>
          <button type="submit" name="cancel">Cancel</button>
        </td>
      </tr>
    </table>

  </form>
        
  <h4 class="message"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['message']->value)===null||$tmp==='' ? '' : $tmp);?>
</h4>
  
  
<?php
}
}
/* {/block "main"} */
}
