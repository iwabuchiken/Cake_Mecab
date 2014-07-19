<h1>Add Text</h1>
	<?php
	echo $this->Form->create('Text');
	echo $this->Form->input('string', array('onmouseover' => "this.select();"));
	
	echo $this->Form->end('Save Text');
	?>