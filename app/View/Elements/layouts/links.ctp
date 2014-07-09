<br>
<br>

<?php echo $this->Html->link(
					'Videos',
					array('controller' => 'videos', 
							'action' => 'index'),
					array('class' => "button"));
?>

<?php echo $this->Html->link(
					'Genres',
					array('controller' => 'genres', 
							'action' => 'index'),
					array('class' => "button"));
?>

<?php echo $this->Html->link(
					'Positions',
					array('controller' => 'positions', 
							'action' => 'index'),
					array('class' => "button"));
?>

<?php echo $this->Html->link(
					'Remote app',
					$url = "http://benfranklin.chips.jp/cake_apps/VM_Cake/videos",
					array('target' => '_blank'));
?>
