<?php
	// Simpler way of making sure all no-cache headers get sent
	// and understood by all browsers, including IE.
	session_cache_limiter('nocache');
	header('Expires: ' . gmdate('r', 0));
	
	header('Content-type: text/html');
?>

<?php 
  	
		foreach ($positions as $position):
			
			echo "<tr>";
		
			/******************************
			
				tag
			
			******************************/
		
			echo "<td onclick=\"seek("
					.$position['Position']['point']
					.")\">"
					.$this->Mytest->testFunction($position['Position']['point'])
					."</td>";

			/******************************
			
				vals
			
			******************************/
			$tag_Memo = "<td>"
					.$position['Position']['memo']
					."</td>";
	
			echo $tag_Memo;
			
			
			echo "</tr>";
		
  		endforeach;
  	
  	?>
