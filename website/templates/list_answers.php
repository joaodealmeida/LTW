<div class="answers">
  <h3>Answers</h3>
  <? foreach ($answers as $answer) { ?>
  <div class="answer">
    <p class="text"><?=$comment['text']?></p>
    <p class="author">Answered by: <?=$answer['author']?></p>
  </div>
  <? } ?>
</div>