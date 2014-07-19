		<?php foreach ($datas as $data): ?>
		<tr>
				<td class="td_label">
					
					<?php

						echo $this->Html->link(
								$data['Data']['id'],
								array(
									'controller' => 'datas', 
									'action' => 'view',
									$data['Data']['id'])
						);
// 						echo $data['Data']['id']; 
					?>
				</td>
				
				<td>
					<?php 
						echo $data['Data']['surface'];
					?>
				</td>
				
				<td class="time_label"><?php echo $data['Data']['created_at']; ?></td>
				
				<td class="time_label"><?php echo $data['Data']['updated_at']; ?></td>
				
		</tr>
		<?php endforeach; ?>
		<?php unset($data); ?>