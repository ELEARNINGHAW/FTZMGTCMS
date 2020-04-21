<?php
/* Smarty version 3.1.31, created on 2020-04-21 10:17:25
  from "tpl_head:30" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5e9ec83502e2b0_76772439',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c2c6ffbda8b068bbdc19b042f221c96fb37b8d8f' => 
    array (
      0 => 'tpl_head:30',
      1 => '1587464236',
      2 => 'tpl_head',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e9ec83502e2b0_76772439 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_metadata')) require_once '/rzbd/nas/HomeS/FTZMGT/WWW/lib/plugins/function.metadata.php';
if (!is_callable('smarty_function_sitename')) require_once '/rzbd/nas/HomeS/FTZMGT/WWW/lib/plugins/function.sitename.php';
if (!is_callable('smarty_function_cms_stylesheet')) require_once '/rzbd/nas/HomeS/FTZMGT/WWW/lib/plugins/function.cms_stylesheet.php';
if (!is_callable('smarty_function_cms_selflink')) require_once '/rzbd/nas/HomeS/FTZMGT/WWW/lib/plugins/function.cms_selflink.php';
?>
<head>
        <meta charset='<?php echo $_smarty_tpl->tpl_vars['nls']->value->encoding();?>
' />
        <?php echo smarty_function_metadata(array(),$_smarty_tpl);?>
 
        <title><?php echo $_smarty_tpl->tpl_vars['main_title']->value;?>
 - <?php echo smarty_function_sitename(array(),$_smarty_tpl);?>
</title>
        <meta name='HandheldFriendly' content='True' />
        <meta name='MobileOptimized' content='320' />
        <meta name='viewport' content='width=device-width, initial-scale=1' />
        <meta http-equiv='cleartype' content='on' />
        <meta name='msapplication-TileImage' content='<?php echo $_smarty_tpl->tpl_vars['theme_path']->value;?>
/images/icons/cmsms-152x152.png' />
        <meta name='msapplication-TileColor' content='#5C5A59' />
        <?php if (isset($_smarty_tpl->tpl_vars['canonical']->value)) {?><link rel='canonical' href='<?php echo $_smarty_tpl->tpl_vars['canonical']->value;?>
' /><?php } elseif (isset($_smarty_tpl->tpl_vars['content_obj']->value)) {?><link rel='canonical' href='<?php echo $_smarty_tpl->tpl_vars['content_obj']->value->GetURL();?>
' /><?php }?> 
        <?php echo smarty_function_cms_stylesheet(array(),$_smarty_tpl);?>
 
        <link href='//fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic|Oswald:700' rel='stylesheet' type='text/css' />
        <link rel='apple-touch-icon-precomposed' sizes='152x152' href='<?php echo $_smarty_tpl->tpl_vars['theme_path']->value;?>
/images/icons/cmsms-152x152.png' />
        <link rel='apple-touch-icon-precomposed' sizes='120x120' href='<?php echo $_smarty_tpl->tpl_vars['theme_path']->value;?>
/images/icons/cmsms-120x120.png' />
        <link rel='apple-touch-icon-precomposed' sizes='72x72' href='<?php echo $_smarty_tpl->tpl_vars['theme_path']->value;?>
/images/icons/cmsms-76x76.png' />
        <link rel='apple-touch-icon-precomposed' href='<?php echo $_smarty_tpl->tpl_vars['theme_path']->value;?>
/images/icons/cmsms-60x60.png' />
        <link rel='shortcut icon' sizes='196x196' href='<?php echo $_smarty_tpl->tpl_vars['theme_path']->value;?>
/images/icons/cmsms-196x196.png' />
        <link rel='shortcut icon' href='<?php echo $_smarty_tpl->tpl_vars['theme_path']->value;?>
/images/icons/cmsms-60x60.png' />
        <link rel='icon' href='<?php echo $_smarty_tpl->tpl_vars['theme_path']->value;?>
/images/icons/favicon_cms.ico' type='image/x-icon' />
        <?php echo smarty_function_cms_selflink(array('dir'=>'start','rellink'=>'1'),$_smarty_tpl);?>
 
        <?php echo smarty_function_cms_selflink(array('dir'=>'prev','rellink'=>'1'),$_smarty_tpl);?>

        <?php echo smarty_function_cms_selflink(array('dir'=>'next','rellink'=>'1'),$_smarty_tpl);?>

        <!--[if lt IE 9]>
            <?php echo '<script'; ?>
 src="//html5shiv.googlecode.com/svn/trunk/html5.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="//css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"><?php echo '</script'; ?>
>
        <![endif]-->
    </head><?php }
}
