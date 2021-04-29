<?php
/* Smarty version 3.1.34-dev-7, created on 2021-04-29 03:00:15
  from 'D:\xampp\htdocs\salva\templates\mailEnviado.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_608a051fd302a8_13293856',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b41703ff84461f680e748e8011def2480902a44a' => 
    array (
      0 => 'D:\\xampp\\htdocs\\salva\\templates\\mailEnviado.tpl',
      1 => 1619658010,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_608a051fd302a8_13293856 (Smarty_Internal_Template $_smarty_tpl) {
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
