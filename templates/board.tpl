<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>{$board->title}</title>
</head>
<body>
{include file="common/header.tpl"}
<h1>{$board->title}</h1>
<div>
  <div style="color: red">
    {foreach from=$errors item=error}
      <p>{$error}</p>
    {/foreach}
  </div>
  <div>
    コメント一覧
    <ul>
      {foreach from=$commentList item=comment}
        <li>{$comment->comment}</li>
      {/foreach}
    </ul>
  </div>
  <form action="board.php?id={$id}" method="post">
    <label>コメント: <input type="text" name="comment"/></label><br/>
    <input type="submit" value="コメント">
  </form>
</div>
</body>
</html>
