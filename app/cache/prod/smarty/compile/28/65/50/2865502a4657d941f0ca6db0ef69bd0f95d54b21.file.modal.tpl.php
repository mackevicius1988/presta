<?php /* Smarty version Smarty-3.1.19, created on 2017-02-17 13:19:38
         compiled from "C:\xampp\htdocs\prestashop\admin991coazqy\themes\default\template\helpers\modules_list\modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:577258a6dc4aa161a3-39524819%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2865502a4657d941f0ca6db0ef69bd0f95d54b21' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\admin991coazqy\\themes\\default\\template\\helpers\\modules_list\\modal.tpl',
      1 => 1487270996,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '577258a6dc4aa161a3-39524819',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58a6dc4aa1b4a8_89124952',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a6dc4aa1b4a8_89124952')) {function content_58a6dc4aa1b4a8_89124952($_smarty_tpl) {?>
<div class="modal fade" id="modules_list_container">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"><?php echo smartyTranslate(array('s'=>'Recommended Modules and Services'),$_smarty_tpl);?>
</h3>
			</div>
			<div class="modal-body">
				<div id="modules_list_container_tab_modal" style="display:none;"></div>
				<div id="modules_list_loader"><i class="icon-refresh icon-spin"></i></div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$('.fancybox-quick-view').fancybox({
			type: 'ajax',
			autoDimensions: false,
			autoSize: false,
			width: 600,
			height: 'auto',
			helpers: {
				overlay: {
					locked: false
				}
			}
		});
	});
</script>
<?php }} ?>
