<?php //echo $cur_Time; ?>
<?php //echo h($result); ?>
<?php //debug($result); ?>
<?php //echo h(print_r($result)); ?>
<?php //echo $result; ?>

<?php
	// Simpler way of making sure all no-cache headers get sent
	// and understood by all browsers, including IE.
	session_cache_limiter('nocache');
	header('Expires: ' . gmdate('r', 0));
	
	header('Content-type: text/html');
// 	header('Content-type: application/json');
	
	// set to return response=error
// 	$arr = array ('response'=>'error','comment'=>'test comment here');
	echo $arr;
// 	echo json_encode($arr);
	
?>