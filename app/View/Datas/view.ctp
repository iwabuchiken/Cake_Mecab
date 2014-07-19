
<div>
	<table id="t_texts_view">
		<tr>
			<td class="td_label">
				ID
			</td>
			<td>
				<?php 
					echo $text['Text']['id']
				?>
			</td>
		</tr>
		
		<tr>
		
			<td class="td_label">
				String
			</td>
			<td>
				<?php 
					echo $text['Text']['string']
				?>
			</td>
			
		</tr>
		<tr>
		
			<td class="td_label">
				Created
			</td>
			<td>
				<?php 
					echo $text['Text']['created_at']
				?>
			</td>
					
		</tr>
		<tr>
		
			<td class="td_label">
				Updated
			</td>
			<td>
				<?php 
					echo $text['Text']['updated_at']
				?>
			</td>
					
		</tr>
		
	</table>
  
</div>

<div>
    	<?php 
    		
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
    	
    		echo $this->Html->link(
					'Delete Text',
					array(
							'controller' => 'texts', 
							'action' => 'delete', 
							$text['Text']['id']
					),
					array(
							// 							'style'	=> 'color: blue'
 							'class'		=> 'link_alert'
					),
						
					//REF http://stackoverflow.com/questions/22519966/cakephp-delete-confirmation answered Mar 19 at 23:18
					__("Delete? => %s", 
							$line)
// 							$text['Text']['string'])
// 							substr($text['Text']['string'], 0, 20))
			
			);
		
		?>


</div>