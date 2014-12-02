<form action="action_edit_news.php" method="post">
  <input type="hidden" name="id" value="<?=$item['id']?>">
  <label> Title:
    <input type="text" name="title" value="<?=$item['title']?>">
  </label><br>
  <label> Introduction:
    <textarea name="introduction"><?=$item['introduction']?></textarea>
  </label><br>
  <label> Full Text:
    <textarea name="fulltext"><?=$item['fulltext']?></textarea>
  </label><br>
  <input type="submit">
</div>
