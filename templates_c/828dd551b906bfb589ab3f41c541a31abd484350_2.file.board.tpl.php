<?php
/* Smarty version 3.1.32, created on 2019-03-30 06:29:29
  from '/Users/kato/PhpstormProjects/board_object/templates/board.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c9f0cc99698f2_44812867',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '828dd551b906bfb589ab3f41c541a31abd484350' => 
    array (
      0 => '/Users/kato/PhpstormProjects/board_object/templates/board.tpl',
      1 => 1553927255,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/header.tpl' => 1,
  ),
),false)) {
function content_5c9f0cc99698f2_44812867 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['board']->value->title, ENT_QUOTES, 'UTF-8');?>
</title>
</head>
<body>
<?php $_smarty_tpl->_subTemplateRender("file:common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h1><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['board']->value->title, ENT_QUOTES, 'UTF-8');?>
</h1>
<div>
  <div style="color: red">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['errors']->value, 'error');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
?>
      <p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['error']->value, ENT_QUOTES, 'UTF-8');?>
</p>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </div>
  <div>
    コメント一覧
    <ul>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['commentList']->value, 'comment');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->value) {
?>
        <li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value->comment, ENT_QUOTES, 'UTF-8');?>
</li>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
  </div>
  <form action="board.php?id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" method="post">
    <label>コメント: <input type="text" name="comment"/></label><br/>
    <input type="submit" value="コメント">
  </form>
</div>
</body>
</html>
<?php }
}
