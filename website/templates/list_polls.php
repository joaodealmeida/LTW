    <div class="container marketing">

	  <div class="row">
		<div class="col-md-3"><b>#</b></div>
		<div class="col-md-3"><b>Question</b></div>
		<div class="col-md-3"><b>Author</b></div>
	  </div>
	  
	  <? foreach ($result as $row) {?>
      <div class="row">
		<div class="col-md-3"><?=$row['id']?></div>
		<div class="col-md-3"><?=$row['question']?></div>
		<div class="col-md-3"><?=$row['user_id']?></div>
		<div class="col-md-3"><button type="button" class="btn btn-success">Details</button></div>
		</div>
		<?}?>
	</div>
	