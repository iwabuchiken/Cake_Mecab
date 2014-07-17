		<?php foreach ($texts as $text): ?>
		<tr>
				<td class="td_label">
					
					<?php

						echo $this->Html->link(
								$text['Text']['id'],
								array(
									'controller' => 'texts', 
									'action' => 'view',
									$text['Text']['id'])
						);
// 						echo $text['Text']['id']; 
					?>
				</td>
				
				<td><?php echo $text['Text']['string']; ?></td>
				
				<td><?php echo $text['Text']['created_at']; ?></td>
				
				<td><?php echo $text['Text']['updated_at']; ?></td>
				
		</tr>
		<?php endforeach; ?>
		<?php unset($text); ?>