
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

<div id="view_xml">
<input id="view_show_mecab" type="button" onclick="alert('xml')" value="xml" />
word:
		<?php
// 			$children = $xml->children();
			$words = $xml->word;
			echo $words[10];
			echo "/";
			echo $words[10]->surface;
// 			echo $children[10]->word;
// 			echo "/";
// 			echo $children[10]->word->surface;
// 			echo $xml->word;
// 			echo "/";
// 			echo $xml->word->surface;
		
		?>

</div>