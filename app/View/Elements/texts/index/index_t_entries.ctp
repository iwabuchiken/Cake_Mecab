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
				
				<td>
					<?php 
// 						echo $text['Text']['string'];
// 						echo substr($text['Text']['string'], 0, 20);
						$size = 80;
						 
						$str_len = mb_strlen($text['Text']['string']);
						
						if ($str_len > $size) {
							//         				if (strlen($text['Text']['text']) > $size) {
						
							$line = mb_substr($text['Text']['string'], 0, $size)
							."...";
							//         					$line = substr($text['Text']['text'], 0, $size);
						
						} else {
						
							$line = $text['Text']['string'];
						
						}
						
						echo $line;
							
					?>
				</td>
				
				<td class="time_label"><?php echo $text['Text']['created_at']; ?></td>
				
				<td class="time_label"><?php echo $text['Text']['updated_at']; ?></td>
				
		</tr>
		<?php endforeach; ?>
		<?php unset($text); ?>