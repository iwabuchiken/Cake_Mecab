<h1>Videos</h1>
<table id="t_texts_index">

	<?php echo $this->element('texts/index/index_t_headers')?>

		<!-- Here is where we loop through our $videos array, printing out post info -->

	<?php echo $this->element('texts/index/index_t_entries')?>
	

</table>

<br>

<?php echo $this->Html->link(
			    'Add text',
			    array('controller' => 'texts', 'action' => 'add')
		); 
?>