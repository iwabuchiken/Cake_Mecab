
<div>
	<table id="t_datas_view">
		<tr>
			<td class="td_label">
				ID
			</td>
			<td>
				<?php 
					echo $data['Data']['id']
				?>
			</td>
		</tr>
		
		<tr>
		
			<td class="td_label">
				String
			</td>
			<td>
				<?php 
					echo $data['Data']['surface']
				?>
			</td>
			
		</tr>
		<tr>
		
			<td class="td_label">
				Created
			</td>
			<td>
				<?php 
					echo $data['Data']['created_at']
				?>
			</td>
					
		</tr>
		<tr>
		
			<td class="td_label">
				Updated
			</td>
			<td>
				<?php 
					echo $data['Data']['updated_at']
				?>
			</td>
					
		</tr>
		
	</table>
  
</div>

<div>
    	<?php 
    		
    		echo $this->Html->link(
					'Delete Data',
					array(
							'controller' => 'datas', 
							'action' => 'delete', 
							$data['Data']['id']
					),
					array(
							// 							'style'	=> 'color: blue'
 							'class'		=> 'link_alert'
					),
						
					//REF http://stackoverflow.com/questions/22519966/cakephp-delete-confirmation answered Mar 19 at 23:18
					__("Delete? => %s", 
							$data['Data']['surface'])
// 							$data['Data']['string'])
// 							substr($data['Data']['string'], 0, 20))
			
			);
		
		?>


</div>