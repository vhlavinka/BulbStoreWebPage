<?php
/* Smarty version 3.1.30, created on 2018-04-14 23:41:52
  from "C:\Users\la_le\OneDrive\Documents\NetBeansProjects\BulbStore\BulbStore\templates\addType.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad275a0981b88_43606514',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e0c20d66e6d84ac186804c7c70998193179d5041' => 
    array (
      0 => 'C:\\Users\\la_le\\OneDrive\\Documents\\NetBeansProjects\\BulbStore\\BulbStore\\templates\\addType.tpl',
      1 => 1523742103,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_5ad275a0981b88_43606514 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14055427895ad275a096fca2_59319538', "localstyle");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3719341825ad275a0981601_00062208', "main");
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "localstyle"} */
class Block_14055427895ad275a096fca2_59319538 extends Smarty_Internal_Block
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
class Block_3719341825ad275a0981601_00062208 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <h2>Add Bulb Type</h2>
  <b>Existing types:</b> <br/>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['types']->value, 'type');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['type']->value) {
?>     
      <?php echo $_smarty_tpl->tpl_vars['type']->value;?>
, 
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
  
 
  <form action="addType.php" method="post">
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
