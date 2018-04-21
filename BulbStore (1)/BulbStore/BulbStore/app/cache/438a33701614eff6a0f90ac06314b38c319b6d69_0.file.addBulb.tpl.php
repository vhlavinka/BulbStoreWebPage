<?php
/* Smarty version 3.1.30, created on 2018-04-14 22:25:04
  from "C:\Users\la_le\OneDrive\Documents\NetBeansProjects\BulbStore\BulbStore\templates\addBulb.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad263a0dba0e1_81951990',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '438a33701614eff6a0f90ac06314b38c319b6d69' => 
    array (
      0 => 'C:\\Users\\la_le\\OneDrive\\Documents\\NetBeansProjects\\BulbStore\\BulbStore\\templates\\addBulb.tpl',
      1 => 1523737500,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_5ad263a0dba0e1_81951990 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_html_options')) require_once 'C:\\Users\\la_le\\OneDrive\\Documents\\NetBeansProjects\\BulbStore\\BulbStore\\include\\libs\\plugins\\function.html_options.php';
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_759091035ad263a0da3f62_79524760', "localstyle");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12113261215ad263a0db9a65_85682908', "main");
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "localstyle"} */
class Block_759091035ad263a0da3f62_79524760 extends Smarty_Internal_Block
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
class Block_12113261215ad263a0db9a65_85682908 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <h2>Add Bulb</h2>

  <form action="addBulb.php" method="post">
    <table class="table table-condensed borderless">
      <tr>
        <td>name: </td>
        <td>
          <input class="form-control" type="text" name="name" 
                 value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
        </td>
      </tr>
      <tr>
        <td>type: </td>
        <td>
          <select class="form-control" name="type">
            <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['types']->value,'selected'=>$_smarty_tpl->tpl_vars['type']->value),$_smarty_tpl);?>

          </select>
        </td>
      </tr>
      <tr>
        <td>price ($): </td>
        <td>
          <input class="form-control" type="text" name="price" 
                 value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['price']->value, ENT_QUOTES, 'UTF-8', true);?>
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
          <button type="submit" name="doit">Add</button>
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
