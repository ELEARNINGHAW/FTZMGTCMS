<?php
/* Smarty version 3.1.31, created on 2020-04-21 13:55:42
  from "module_file_tpl:FilePicker;contentblock.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5e9efb5e342ed9_75139380',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a29aac3785159896282ee201fbe3b01fe75837ac' => 
    array (
      0 => 'module_file_tpl:FilePicker;contentblock.tpl',
      1 => 1587379286,
      2 => 'module_file_tpl',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e9efb5e342ed9_75139380 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="cmsfp_cont">
  
  <input type="text" name="<?php echo $_smarty_tpl->tpl_vars['blockName']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
" data-cmsfp-instance="<?php echo $_smarty_tpl->tpl_vars['instance']->value;?>
" size="80"/>
  <?php echo '<script'; ?>
 type="text/javascript">
$(document).ready(function(){
   var sel = '[data-cmsfp-instance="<?php echo $_smarty_tpl->tpl_vars['instance']->value;?>
"]';
   $(sel).filepicker({
      param_sig: '<?php echo $_smarty_tpl->tpl_vars['sig']->value;?>
',
      title: '<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
',
      required: <?php if ($_smarty_tpl->tpl_vars['required']->value) {?>1<?php } else { ?>0<?php }?>,
      remove_title: '<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('clear');?>
',
      remove_label: '<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('clear');?>
',
   });
})
<?php echo '</script'; ?>
>
</div><?php }
}
