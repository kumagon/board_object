<?php
/* Smarty version 3.1.32, created on 2019-03-30 06:32:05
  from '/Users/kato/PhpstormProjects/board_object/templates/common/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c9f0d65909012_38229809',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8894052c54f41707f5058f4748082286bdc487a1' => 
    array (
      0 => '/Users/kato/PhpstormProjects/board_object/templates/common/header.tpl',
      1 => 1553927524,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c9f0d65909012_38229809 (Smarty_Internal_Template $_smarty_tpl) {
?><header>
  <div>
    <a href="/board_object/index.php">TOP</a>
    <a href="/board_object/create_board.php">掲示板作成</a>
    <?php if (empty($_smarty_tpl->tpl_vars['user']->value)) {?>
      <a href="/board_object/register.php">新規作成</a>
      <a href="/board_object/login.php">ログイン</a>
    <?php } else { ?>
      <a href="/board_object/logout.php">ログアウト</a>
    <?php }?>
  </div>
</header>
<?php }
}
