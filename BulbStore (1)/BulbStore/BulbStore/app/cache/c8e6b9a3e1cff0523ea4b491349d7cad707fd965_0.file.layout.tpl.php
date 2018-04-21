<?php
/* Smarty version 3.1.30, created on 2018-04-07 04:24:31
  from "C:\Users\la_le\OneDrive\Documents\NetBeansProjects\BulbStore\BulbStore\templates\layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ac82bdf435499_04543916',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c8e6b9a3e1cff0523ea4b491349d7cad707fd965' => 
    array (
      0 => 'C:\\Users\\la_le\\OneDrive\\Documents\\NetBeansProjects\\BulbStore\\BulbStore\\templates\\layout.tpl',
      1 => 1523042326,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:links.tpl' => 1,
  ),
),false)) {
function content_5ac82bdf435499_04543916 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>  
      <?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_title']->value)===null||$tmp==='' ? basename(dirname($_SERVER['PHP_SELF'])) : $tmp);?>

    </title>

    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/layout.css" rel="stylesheet" />

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10571605905ac82bdf432e56_28129501', "localstyle");
?>

</head>
<body>     
  <header>
    <div>
      <img class="img-responsive" src="img/header.png" />
      <span class='login'></span>
    </div>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" 
                  class="navbar-toggle collapsed" 
                  data-toggle="collapse" 
                  data-target="#toggleMenu">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href=".">Home</a>
        </div>

        <div class="collapse navbar-collapse" 
             id="toggleMenu">
          <ul class="nav navbar-nav">
            <?php $_smarty_tpl->_subTemplateRender("file:links.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

          </ul>
        </div>
      </div>
    </nav>
  </header>

  <section class="container-fluid"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21177799575ac82bdf4342d7_06273284', "main");
?>
</section>

  <?php echo '<script'; ?>
 src="js/jquery.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript">
    // for Safari browser, deal with back button
    window.onpageshow = function (event) {
      if (event.persisted) {
        window.location.reload();
      }
    };
   <?php echo '</script'; ?>
>
   <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18887226125ac82bdf434f85_38158639', "localscript");
?>

</body>
</html>
<?php }
/* {block "localstyle"} */
class Block_10571605905ac82bdf432e56_28129501 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "localstyle"} */
/* {block "main"} */
class Block_21177799575ac82bdf4342d7_06273284 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "main"} */
/* {block "localscript"} */
class Block_18887226125ac82bdf434f85_38158639 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "localscript"} */
}
