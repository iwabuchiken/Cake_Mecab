		<tr>
				<td bgcolor="yellow" width="5%">
					
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
				
				<td width="40%">
					<?php 
						echo $data['Data']['surface'];
					?>
				</td>
				
				<td width="40%">
					<?php 
						echo $data['Data']['feature'];
					?>
				</td>
				
		</tr>
