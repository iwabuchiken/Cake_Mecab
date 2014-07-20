<h1>Add Data</h1>
	<?php
	echo $this->Form->create('Data');
	echo $this->Form->input('surface', array('onmouseover' => "this.select();"));
	
	echo $this->Form->end('Save Data');
	?>