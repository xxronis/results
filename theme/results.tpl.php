<div class="result-table">
	<table cellpadding="0" cellspacing="0" border="0">
		<thead>
			<th>Rank</th>
			<th>Team</th>
			<th>Games</th>
			<th>Wins</th>
			<th>Losses</th>
			<th>Ties</th>
			<th>Goals For</th>
			<th>Goals Against</th>
			<th>Points</th>
		</thead>
		<tbody>
			<?php foreach($table as $team) {?>
				<tr>
					<td><?php echo $team['rank']; ?></td>
					<td><?php echo $team['title']; ?></td>
					<td><?php echo $team['games']; ?></td>
					<td><?php echo $team['wins']; ?></td>
					<td><?php echo $team['losses']; ?></td>
					<td><?php echo $team['ties']; ?></td>
					<td><?php echo $team['goals_for']; ?></td>
					<td><?php echo $team['goals_against']; ?></td>
					<td><?php echo $team['points']; ?></td>
				<tr>
			<?php } ?>
		</tbody>
	</table>
</div>
<?php // print_r($table); ?>
