<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-12-14 20:06:28
         compiled from "templates\view.html" */ ?>
<?php /*%%SmartyHeaderCode:13981548ddc78ee41d1-31385048%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a888c96e18a184945665c5a11ca55fc68562decc' => 
    array (
      0 => 'templates\\view.html',
      1 => 1418583982,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13981548ddc78ee41d1-31385048',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_548ddc79008f39_83158049',
  'variables' => 
  array (
    'error_fname' => 0,
    'fname' => 0,
    'error_lname' => 0,
    'lname' => 0,
    'error_email' => 0,
    'email' => 0,
    'error_sex' => 0,
    'sex' => 0,
    'error_day' => 0,
    'error_month' => 0,
    'error_year' => 0,
    'month' => 0,
    'day' => 0,
    'year' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548ddc79008f39_83158049')) {function content_548ddc79008f39_83158049($_smarty_tpl) {?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
      <title>User Info</title>
      <link rel="stylesheet" href="css/signup.css" />
  </head>
  <body>
    <form class="signupform" action="signup.php" method="post" id="loginform">
      <div class="signupheader">
        <div class="colorheader">
          User Info
        </div>
      </div>
      <div class="main">
        <div class="line">
          <label class="labelfield <?php if ($_smarty_tpl->tpl_vars['error_fname']->value) {?> error <?php }?>">First Name:</label>
          <div class="right">
            <input class="inputfield" type="text" name="fname" value="<?php echo $_smarty_tpl->tpl_vars['fname']->value;?>
" />
          </div>
        </div>

        <div class="line">
          <label class="labelfield <?php if ($_smarty_tpl->tpl_vars['error_lname']->value) {?> error <?php }?>" >Last Name:</label>
          <div class="right">
            <input class="inputfield" type="text" name="lname" value="<?php echo $_smarty_tpl->tpl_vars['lname']->value;?>
" />
          </div>
        </div>

        <div class="line">
          <label class="labelfield<?php if ($_smarty_tpl->tpl_vars['error_email']->value) {?> error <?php }?>" >Your Email:</label>
          <div class="right">
            <input class="inputfield" type="text" name="email" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
" />
          </div>
        </div>

        <div class="line">
          <label class="labelfield<?php if ($_smarty_tpl->tpl_vars['error_sex']->value) {?> error <?php }?>" >I am:</label>
          <div>
            <select  class="selectfield" name="sex" >
              <?php echo $_smarty_tpl->tpl_vars['sex']->value;?>

            </select>
          </div>
        </div>

        <div class="line">
          <label class="labelfield<?php if ($_smarty_tpl->tpl_vars['error_day']->value||$_smarty_tpl->tpl_vars['error_month']->value||$_smarty_tpl->tpl_vars['error_year']->value) {?> error <?php }?>" >Birthday:</label>
          <div>
            <select  class="selectfield" name="month">
              <?php echo $_smarty_tpl->tpl_vars['month']->value;?>

            </select>
            <select  class="selectfield" name="day">
              <?php echo $_smarty_tpl->tpl_vars['day']->value;?>

            </select>
            <select  class="selectfield" name="year">
              <?php echo $_smarty_tpl->tpl_vars['year']->value;?>

            </select>
          </div>
        </div>
      </div>
    </form>
  </body>
</html><?php }} ?>
