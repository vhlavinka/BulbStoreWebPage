<?php
/* Smarty version 3.1.30, created on 2018-04-17 20:29:44
  from "C:\Users\Val\Documents\NetBeansProjects\BulbStore\BulbStore\templates\layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad63d18633013_94208658',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c5dba9cca77b52153d9afa7a2a21f71eb4eb6110' => 
    array (
      0 => 'C:\\Users\\Val\\Documents\\NetBeansProjects\\BulbStore\\BulbStore\\templates\\layout.tpl',
      1 => 1523984580,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:links.tpl' => 1,
  ),
),false)) {
function content_5ad63d18633013_94208658 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11529790135ad63d186306c7_44603408', "localstyle");
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19428778365ad63d18631c19_14724926', "main");
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13654156395ad63d18632a39_89873556', "localscript");
?>

</body>
</html>
<?php }
/* {block "localstyle"} */
class Block_11529790135ad63d186306c7_44603408 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "localstyle"} */
/* {block "main"} */
class Block_19428778365ad63d18631c19_14724926 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "main"} */
/* {block "localscript"} */
class Block_13654156395ad63d18632a39_89873556 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "localscript"} */
}
