		<?php foreach ($datas as $data): ?>
		
			<?php //echo $this->element('datas/index/_index_t_entries_row_1')?>
			<?php 
				echo $this->element(
						'datas/index/_index_t_entries_row_1',
						array('data' => $data))
			?>
		
			<?php 
				echo $this->element(
						'datas/index/_index_t_entries_row_2',
						array('data' => $data))
			?>
		
			<?php 
				echo $this->element(
						'datas/index/_index_t_entries_row_3',
						array('data' => $data))
			?>
		
			<?php 
				echo $this->element(
						'datas/index/_index_t_entries_row_4',
						array('data' => $data))
			?>
		
			<?php 
				echo $this->element(
						'datas/index/_index_t_entries_row_5',
						array('data' => $data))
			?>
		

		<?php endforeach; ?>
		<?php unset($data); ?>