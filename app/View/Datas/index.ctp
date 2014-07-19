<h1>Data</h1>
<table id="t_datas_index">

	<?php echo $this->element('datas/index/index_t_headers')?>

		<!-- Here is where we loop through our $videos array, printing out post info -->

	<?php echo $this->element('datas/index/index_t_entries')?>
	

</table>

<br>

<?php echo $this->Html->link(
			    'Add datum',
			    array('controller' => 'datas', 'action' => 'add')
		); 
?>