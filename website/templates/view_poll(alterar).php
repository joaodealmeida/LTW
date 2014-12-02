<div class="news-item">
  <h3><?=$item['title']?></h3>
  <img src="http://ipsumimage.appspot.com/300x200,ff7700" alt="300x200">
  <p class="introduction"><?=$item['introduction']?></p>
  <p><?=$item['fulltext']?></p>
  <ul>
    <li><a href="partilhar1.html">Share</a></li> 
    <?php if (isset($_SESSION['username'])) { ?>
    <li><a href="edit_news.php?id=<?=$item['id']?>">Edit</a></li>
    <? } ?>
  </ul>
</div>