<header>
  <div>
    <a href="/board_object/index.php">TOP</a>
    <a href="/board_object/create_board.php">掲示板作成</a>
    {if empty($user)}
      <a href="/board_object/register.php">新規作成</a>
      <a href="/board_object/login.php">ログイン</a>
    {else}
      <a href="/board_object/logout.php">ログアウト</a>
    {/if}
  </div>
</header>
