<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-12-14 19:41:31
         compiled from "templates\form.html" */ ?>
<?php /*%%SmartyHeaderCode:7817548dd330090643-38192275%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5bb24c1a624ababdae692c4e9dc7ada96c93183b' => 
    array (
      0 => 'templates\\form.html',
      1 => 1418582370,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7817548dd330090643-38192275',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_548dd33010f9f3_35952794',
  'variables' => 
  array (
    'error_fname' => 0,
    'fname' => 0,
    'error_lname' => 0,
    'lname' => 0,
    'error_email' => 0,
    'email' => 0,
    'error_remail' => 0,
    'remail' => 0,
    'error_password' => 0,
    'password' => 0,
    'error_sex' => 0,
    'sex' => 0,
    'error_day' => 0,
    'error_month' => 0,
    'error_year' => 0,
    'month' => 0,
    'day' => 0,
    'year' => 0,
    'newUserRegistered' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548dd33010f9f3_35952794')) {function content_548dd33010f9f3_35952794($_smarty_tpl) {?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
      <title>Sign Up</title>
      <link rel="stylesheet" href="css/signup.css" />
  </head>
  <body>
    <form class="signupform" action="signup.php" method="post" id="loginform">
      <div class="signupheader">
        <div class="colorheader">
          Sign Up
        </div>
        <div>
          It's free and always will be
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
          <label class="labelfield<?php if ($_smarty_tpl->tpl_vars['error_remail']->value) {?> error <?php }?>" >Re-enter Email:</label>
          <div class="right">
            <input class="inputfield" type="text" name="remail" value="<?php echo $_smarty_tpl->tpl_vars['remail']->value;?>
" />
          </div>
        </div>
        <div class="line">
          <label class="labelfield<?php if ($_smarty_tpl->tpl_vars['error_password']->value) {?> error <?php }?>" >New Password:</label>
          <div class="right">
            <input class="inputfield" type="password" name="password" value="<?php echo $_smarty_tpl->tpl_vars['password']->value;?>
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

        <div>
          <a class="hrefsignup" href="http://htmlbook.ru/html/!doctype" title="info">Why do I need to provide this?</a>
        </div>

        <div class="line">
          <div class="labelfield">
          </div>
          <div class="registered"> 
            <?php if ($_smarty_tpl->tpl_vars['newUserRegistered']->value) {?>
                <p>  New User Registered </p>
            <?php } else { ?>
                <input class="submitfield" type="submit" value="Sign Up" id="submit" />
            <?php }?>
          </div>
        </div>

     </div>
            
    </form>
  </body>
</html><?php }} ?>
