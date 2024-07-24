<?php
/* Smarty version 3.1.30, created on 2022-04-29 17:43:32
  from "/home/t/tdevelrc/theworldbuilder.ru/public_html/poll/views/default/poll/head.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_626bf9947c09a2_85727356',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '45608aec90dcd1fce08f821f0394af0d6823c612' => 
    array (
      0 => '/home/t/tdevelrc/theworldbuilder.ru/public_html/poll/views/default/poll/head.tpl',
      1 => 1651242977,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_626bf9947c09a2_85727356 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
poll/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
poll/assets/css/owl.carousel.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
poll/assets/css/animate.min.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
poll/assets/css/fontawesome-all.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
poll/assets/css/style.css">

	<!-- Color switcher Alternatives | you can remove this section -->
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
poll/assets/css/colors/switch.css">
	<link href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
poll/assets/css/colors/color-2.css" rel="stylesheet" type="text/css" title="color-2">

	<!-- web-font loader-->
        <?php echo '<script'; ?>
>
            WebFontConfig = {
                google: {
                    families: ['Nunito+Sans:300,400,500,700,900', 'Quicksand:300,400,500,700'],
                }
            }
            function font() {
                var wf = document.createElement('script')
                wf.src = '<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
assets/js/webfont.js'
                wf.type = 'text/javascript'
                wf.async = 'true'
                var s = document.getElementsByTagName('script')[0]
                s.parentNode.insertBefore(wf, s)
            }
            font()
        <?php echo '</script'; ?>
>
    </head><?php }
}
