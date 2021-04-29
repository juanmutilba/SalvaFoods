<?php
/* Smarty version 3.1.34-dev-7, created on 2021-04-29 01:13:08
  from '/home/u894195251/domains/salvafoods.com.ar/public_html/templates/mailEnviado.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_608a08247ac087_16641068',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a6870ccbc8a3e5052c56edd71e52956e7774a39' => 
    array (
      0 => '/home/u894195251/domains/salvafoods.com.ar/public_html/templates/mailEnviado.tpl',
      1 => 1619658520,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_608a08247ac087_16641068 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="recetas_foto">
    <p>Muchas gracias por contactarse con nosotros!</p>
    <p>Lo contactaremos a la brevedad!</p>
    <a class="btn_home" href="volver_home"> Volver </a>
</div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
