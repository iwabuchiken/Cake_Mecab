<br>
<br>

<?php echo $this->Html->link(
					'Texts',
					array('controller' => 'texts', 
							'action' => 'index'),
					array('class' => "button"));
?>


<?php echo $this->Html->link(
					'Remote app',
					$url = "http://benfranklin.chips.jp/cake_apps/Cake_Mecab/texts",
					array('target' => '_blank'));
?>
