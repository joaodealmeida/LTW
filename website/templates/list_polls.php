    <div class="container marketing">
<table class="table table-bordered table-hover table-condensed">
	  <thead>
					<tr>
						<th>
							#
						</th>
						<th>
							Question
						</th>
						<th>
							Author
						</th>
						<th>
							Details
						</th>
					</tr>
				</thead>
		<tbody>
	  
	  <? foreach ($result as $row) {?>
      <div class="row">
	  
		<tr class="active">
						<td>
							<?=$row['id']?>
						</td>
						<td>
							<?=$row['question']?>
						</td>
						<td>
							<?=$row['user_id']?>
						</td>
						<td>
							<button type="button" class="btn btn-success">Details</button>
						</td>
					</tr>
		</div>
		<?}?>
		</tbody>
			</table>
	</div>
	