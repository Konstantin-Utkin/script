<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-12-14 10:05:58
         compiled from "lab7add.html" */ ?>
<?php /*%%SmartyHeaderCode:9078548d52f65d7371-33058782%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '48c9f04da57494669b6ec8129e231a49f22c4517' => 
    array (
      0 => 'lab7add.html',
      1 => 1418545661,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9078548d52f65d7371-33058782',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'newUserRegistered' => 0,
    'errors_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_548d52f67341d0_13285126',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548d52f67341d0_13285126')) {function content_548d52f67341d0_13285126($_smarty_tpl) {?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
      <title>Sign Up</title>
      <link rel="stylesheet" href="css/lab7add.css" />
  </head>
  <body>
    <div class="form">
      <form class="signupform" action="signup.php" method="post" id="loginform">
        <div class="title">
          <h1>Sign Up</h1>
          <span class="border_bottom"></span>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['newUserRegistered']->value) {?>
            <p>New User Registered</p>
        <?php }?>
        
        <label>Surname</label>
        <div class="formfield <?php if ($_smarty_tpl->tpl_vars['errors_name']->value) {?> error <?php }?>">  
          <input type="text" id="surname" name="surname"></br>
        </div>
        <label>Sex</label>
        <select>
          <option value="sex" selected disabled>Select Sex:</option>
          <option>Female</option>
          <option>Male</option>
        </select>
      </form>
    </div>
  </body>
</html><?php }} ?>
