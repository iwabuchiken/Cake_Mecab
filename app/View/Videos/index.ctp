<h1>Videos</h1>
<table>
		<tr>
				<th>Id</th>
				<th>Title</th>
				<th>Genre</th>
				<th>Url</th>
		</tr>

		<!-- Here is where we loop through our $videos array, printing out post info -->

		<?php foreach ($videos as $video): ?>
		<tr>
				<td><?php echo $video['Video']['id']; ?></td>
				<td>
					<?php echo $this->Html->link($video['Video']['title'],
									array(
										'controller' => 'videos', 
										'action' => 'view', 
										$video['Video']['id'])
									); ?>
				</td>
				<td><?php echo $video['Genre']['name']; ?></td>
				
				<td>
					<?php //echo $video['Video']['url']; ?>
					<?php echo $this->Html->link($video['Video']['url'],
									$url = $video['Video']['url']
									); ?>
				</td>
				
		</tr>
		<?php endforeach; ?>
		<?php unset($video); ?>
</table>

<?php echo $this->Html->link(
    'Add Video',
    array('controller' => 'videos', 'action' => 'add')
); ?>
