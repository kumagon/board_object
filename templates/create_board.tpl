<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>掲示板作成</title>
</head>
<body>
{include file="common/header.tpl"}
<h1>掲示板作成</h1>
<div>
  <div style="color: red">
    {foreach from=$errors item=error}
      <p>{$error}</p>
    {/foreach}
  </div>
  <form action="create_board.php" method="post">
    <label>タイトル: <input type="text" name="title"/></label><br/>
    <input type="submit" value="掲示板作成">
  </form>
</div>
</body>
</html>
