<?php /* Smarty version Smarty-3.1.19, created on 2017-02-17 23:33:19
         compiled from "module:ps_wirepayment/views/templates/hook/_partials/payment_infos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1710658a76c1f24c4b8-43237062%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '89661fbe7f9f4c111d8bdb6320dbdcd70e1222f8' => 
    array (
      0 => 'module:ps_wirepayment/views/templates/hook/_partials/payment_infos.tpl',
      1 => 1487270605,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '1710658a76c1f24c4b8-43237062',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'total' => 0,
    'bankwireOwner' => 0,
    'bankwireDetails' => 0,
    'bankwireAddress' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58a76c1f27bbe8_45708496',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a76c1f27bbe8_45708496')) {function content_58a76c1f27bbe8_45708496($_smarty_tpl) {?><!-- begin C:\xampp\htdocs\prestashop/modules/ps_wirepayment/views/templates/hook/_partials/payment_infos.tpl -->


<dl>
    <dt><?php echo smartyTranslate(array('s'=>'Amount','mod'=>'ps_wirepayment'),$_smarty_tpl);?>
</dt>
    <dd><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['total']->value, ENT_QUOTES, 'UTF-8');?>
</dd>
    <dt><?php echo smartyTranslate(array('s'=>'Name of account owner','mod'=>'ps_wirepayment'),$_smarty_tpl);?>
</dt>
    <dd><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bankwireOwner']->value, ENT_QUOTES, 'UTF-8');?>
</dd>
    <dt><?php echo smartyTranslate(array('s'=>'Please include these details','mod'=>'ps_wirepayment'),$_smarty_tpl);?>
</dt>
    <dd><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bankwireDetails']->value, ENT_QUOTES, 'UTF-8');?>
</dd>
    <dt><?php echo smartyTranslate(array('s'=>'Bank name','mod'=>'ps_wirepayment'),$_smarty_tpl);?>
</dt>
    <dd><?php echo $_smarty_tpl->tpl_vars['bankwireAddress']->value;?>
</dd>
</dl>
<!-- end C:\xampp\htdocs\prestashop/modules/ps_wirepayment/views/templates/hook/_partials/payment_infos.tpl --><?php }} ?>
