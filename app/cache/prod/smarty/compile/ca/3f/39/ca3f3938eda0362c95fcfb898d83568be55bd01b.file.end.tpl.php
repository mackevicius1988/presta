<?php /* Smarty version Smarty-3.1.19, created on 2017-02-17 13:19:40
         compiled from "C:\xampp\htdocs\prestashop\modules\welcome\views\contents\end.tpl" */ ?>
<?php /*%%SmartyHeaderCode:580058a6dc4c9e64f2-71291384%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca3f3938eda0362c95fcfb898d83568be55bd01b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\welcome\\views\\contents\\end.tpl',
      1 => 1487270607,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '580058a6dc4c9e64f2-71291384',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58a6dc4c9f4dc9_10709454',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a6dc4c9f4dc9_10709454')) {function content_58a6dc4c9f4dc9_10709454($_smarty_tpl) {?>

<div id="onboarding-welcome" class="modal-header">
  <button class="onboarding-button-next pull-right close" type="button">&times;</button>
  <h2 class="text-center text-md-center"><?php echo smartyTranslate(array('s'=>'Over to you!','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</h2>
  <p class="text-center text-md-center">
    <?php echo smartyTranslate(array('s'=>'You\'ve seen the essential, but there\'s a lot more to explore.','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
<br />
    <?php echo smartyTranslate(array('s'=>'Some ressources can help you go further:','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>

  </p>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6 text-center text-md-center">
        <a class="final-link" href="http://doc.prestashop.com/display/PS16/Getting+Started" target="_blank">
          <i class="material-icons">import_contacts</i><br />
          <?php echo smartyTranslate(array('s'=>'Starter Guide','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>

        </a>
      </div>
      <div class="col-md-6 text-center text-md-center">
        <a class="final-link" href="https://www.prestashop.com/forums/" target="_blank">
          <i class="material-icons">forum</i><br />
          <?php echo smartyTranslate(array('s'=>'Forum','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>

        </a>
      </div>
      <div class="col-md-6 text-center text-md-center">
        <a class="final-link" href="https://www.prestashop.com/en/training-prestashop" target="_blank">
          <i class="material-icons">school</i><br />
          <?php echo smartyTranslate(array('s'=>'Training','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>

        </a>
      </div>
      <div class="col-md-6 text-center text-md-center">
        <a class="final-link" href="https://www.youtube.com/user/prestashop" target="_blank">
          <i class="material-icons">videocam</i><br />
          <?php echo smartyTranslate(array('s'=>'Video tutorial','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>

        </a>
      </div>
    </div>
  </div>
  <br />
  <div class="text-center text-md-center">
      <button class="btn btn-primary onboarding-button-next"><?php echo smartyTranslate(array('s'=>'I\'m ready','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
  </div>
</div>
<?php }} ?>
