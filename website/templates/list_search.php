<div class="container marketing">
	<div class="pull-right">
	<input type="text" class="search" placeholder="Type to search" id="inputSearch" />
	</div>
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
							<?=getInfoByID($row['user_id'])[0]['username']?>
						</td>
						<td>
							<a href="view_poll_details.php?id=<?=$row['id']?>" class="btn btn-success">View</a>
						</td>
					</tr>
		</div>
	  </div>
		<?}?>
		</tbody>
			</table>
	</div>
	