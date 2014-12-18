<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-12-18 09:45:28
         compiled from "templates\userlist.html" */ ?>
<?php /*%%SmartyHeaderCode:3121854928e17119291-94898111%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c397093c1f12d7b63e6863ec5e80c1be37df5b3a' => 
    array (
      0 => 'templates\\userlist.html',
      1 => 1418892325,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3121854928e17119291-94898111',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54928e178043a7_28411996',
  'variables' => 
  array (
    'userList' => 0,
    'userData' => 0,
    'key' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54928e178043a7_28411996')) {function content_54928e178043a7_28411996($_smarty_tpl) {?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
      <title>Sign Up</title>
      <link rel="stylesheet" href="css/userdata.css" />
  </head>
  <body>
    <table>
        <tr>
            <th>First Name: </th>
            <th>Last Name: </th>
            <th>Email: </th>
        </tr>
        <?php  $_smarty_tpl->tpl_vars['userData'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['userData']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['userList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['userData']->key => $_smarty_tpl->tpl_vars['userData']->value) {
$_smarty_tpl->tpl_vars['userData']->_loop = true;
?>
            <tr>
            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['userData']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                <?php if ($_smarty_tpl->tpl_vars['key']->value=='login_fname'||$_smarty_tpl->tpl_vars['key']->value=='login_sname'||$_smarty_tpl->tpl_vars['key']->value=='login_email') {?>
                    <td><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</td>
                <?php }?>
            <?php } ?>
            </tr>
        <?php } ?>
        <tr>
        </tr>
    <table>
  </body>
</html><?php }} ?>
