<?php
/* Smarty version 3.1.32, created on 2019-03-30 06:32:05
  from '/Users/kato/PhpstormProjects/board_object/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c9f0d658ffac7_68492665',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0381aaf52962558de86445ffdccae1923165e99a' => 
    array (
      0 => '/Users/kato/PhpstormProjects/board_object/templates/index.tpl',
      1 => 1553927524,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/header.tpl' => 1,
  ),
),false)) {
function content_5c9f0d658ffac7_68492665 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>トップ</title>
</head>
<body>
<?php $_smarty_tpl->_subTemplateRender("file:common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h1>トップ</h1>
<div><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value->name, ENT_QUOTES, 'UTF-8');?>
さんようこそ</div>
<div>
  掲示板一覧
  <ul>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['boardList']->value, 'board');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['board']->value) {
?>
      <li><a href='/board_object/board.php?id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['board']->value->id, ENT_QUOTES, 'UTF-8');?>
'><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['board']->value->title, ENT_QUOTES, 'UTF-8');?>
（<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['board']->value->created, ENT_QUOTES, 'UTF-8');?>
）</a></li>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </ul>
</div>
</body>
</html>
<?php }
}
