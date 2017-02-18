<?php /* Smarty version Smarty-3.1.19, created on 2017-02-17 13:14:22
         compiled from "C:\xampp\htdocs\prestashop\admin991coazqy\themes\default\template\controllers\localization\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2485758a6db0ea1a666-52037412%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf1efe4495fdb8c08b11236e2265c3fe16d60549' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\admin991coazqy\\themes\\default\\template\\controllers\\localization\\content.tpl',
      1 => 1487271008,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2485758a6db0ea1a666-52037412',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'localization_form' => 0,
    'localization_options' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58a6db0ea273c1_94175376',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a6db0ea273c1_94175376')) {function content_58a6db0ea273c1_94175376($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['localization_form']->value)) {?><?php echo $_smarty_tpl->tpl_vars['localization_form']->value;?>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['localization_options']->value)) {?><?php echo $_smarty_tpl->tpl_vars['localization_options']->value;?>
<?php }?>
<script type="text/javascript">
	$(document).ready(function() {
		$('#PS_CURRENCY_DEFAULT').change(function(e) {
			alert('Before changing the default currency, we strongly recommend that you enable maintenance mode because any change on default currency requires manual adjustment of the price of each product');
		});
	});
</script><?php }} ?>
