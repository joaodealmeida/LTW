<div class="container pollview">	
	<div class="row">
	<div class="col-md-2 col-md-offset-5">
		
		<img alt="140x140" src="<?=$pollInfo['image']?>" class="img-thumbnail" />
			<h3>
				<?=$pollInfo['question']?>
			</h3>
	<form action="action_vote.php" method="post" role="form">
			<? foreach ($answersInfo as $row) {?>
			<div class="radio">
			  <label><input type="radio" name= "answer_id" value="<?=$row['id']?>" ><?=$row['text']?></label>
			</div>
			<?}?>
			<button type="submit" name="poll_id" value="<?=$pollInfo['id']?>" class="btn btn-info">Vote</button>
			</form>
		</div>	 
	</div>
</div>

   
