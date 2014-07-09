		<?php foreach ($positions as $position): ?>
		<tr>
				<td><?php echo $position['Position']['id']; ?></td>
				<td>
					<?php echo $this->Html->link($position['Video']['title'],
									array(
										'controller' => 'positions', 
										'action' => 'view', 
										$position['Position']['id'])
									); ?>
				</td>
				
				<td>
				
					<?php 
						echo $this->Mytest->testFunction($position['Position']['point'])
// 						echo $position['Position']['point']; 
?>
					
				</td>
				
				<td><?php echo $position['Position']['memo']; ?></td>
				
				<td><?php echo $position['Position']['created_at']; ?></td>
				
		</tr>
		<?php endforeach; ?>
		<?php unset($position); ?>
