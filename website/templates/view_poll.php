<div class="container pollview">	
	<div class="row">
	<div class="col-md-2 col-md-offset-5">
		
		<img alt="140x140" src="http://lorempixel.com/140/140/" class="img-thumbnail" />
			<h3>
				<?=$pollInfo['question']?>
			</h3>
	<form role="form">
			<? foreach ($answersInfo as $row) {?>
			<div class="radio">
			  <label><input type="radio" name="<?=$row['id']?>" ><?=$row['text']?></label>
			</div>
			<?}?>
			</form>
	   <button type="button" class="btn btn-info">Vote</button>
		</div>	 
	</div>
</div>

   
