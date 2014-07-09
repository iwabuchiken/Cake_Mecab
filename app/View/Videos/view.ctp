<?php //echo $this->element('videos/video_view_controller'); ?>

<br>
<br>

 <?php
// 	$subject = $video['Video']['url'];
// // 	$subject = "123?v=aaaaAAAAAbbb&xyz";
	
// 	//REF http://stackoverflow.com/questions/3392993/php-regex-to-get-youtube-video-id answered Aug 3 '10 at 1:27
// 	parse_str( parse_url( $url, PHP_URL_QUERY ), $my_array_of_vars );
// // 	echo $my_array_of_vars['v'];
	
// // 	echo "<br>";
	
// ?>

<!-- <br> -->
<br>

<script type="text/javascript" src="swfobject.js"></script>    

<div>

	
	<div id="controller">
		Title: <?php echo $this->Html->link($video['Video']['title'],
												$url = $video['Video']['url']
												 
											); ?>
											
			 / (position = <?php echo count($positions) ?>)
	
		<br>
		<br>
		<?php echo $this->element('videos/video_view_controller'); ?>
		
		<?php echo $this->element('videos/view/view_table_poslist')?>
		
	</div>
	
	<div>
		
		<?php //echo $this->element('videos/view/view_table_poslist')?>
		
	</div>
	
  <div id="ytplayer">
<!--   <div id="ytapiplayer"> -->
    You need Flash player 8+ and JavaScript enabled to view this video.
    
  </div>
  
</div>

  <!-- REF http://stackoverflow.com/questions/16293741/original-purpose-of-input-type-hidden answered Apr 30 '13 at 6:43 -->
  <input type="hidden" id="video_id_hidden" name="video_id" value="<?php echo $video['Video']['id']?>">

  <?php echo $this->element('videos/view/view_script_swf')?>
  

<br>
<div>
		<?php echo $this->Html->link(
							'Delete Video',
							array(
									'controller' => 'videos', 
									'action' => 'delete', 
									$video['Video']['id']
							),
							array(
									// 							'style'	=> 'color: blue'
		 							'class'		=> 'link_alert'
							),
								
							//REF http://stackoverflow.com/questions/22519966/cakephp-delete-confirmation answered Mar 19 at 23:18
							__("Delete? => %s", $video['Video']['title'])
			
			);
		
		?>


</div>

<div>
<audio controls="controls">
  Your browser does not support the <code>audio</code> element.
  <source src="/audio/Come on and Stomp, Stomp, Stomp - Johnny Dodds.mp3" type="audio/wav">
<!--   <source src="foo.wav" type="audio/wav"> -->
</audio>

</div>


<div id="xml">
	<?php
	
// 		echo count($xmlDom->childNodes);
// 		echo "<br>";
		
// 		echo print_r($xmlDom);
		
// 		echo "name => ".$xmlDom->nodeName;	// MecabResult
		
// 		echo "<br>";
		
// 		echo "class => ".get_class($xmlDom->childNodes);	// DOMNodeList
		
// 		echo "<br>";
		
// 		echo "item(0) => ".get_class($xmlDom->childNodes->item(0));	// DOMText
		
// 		echo "<br>";
		
// 		echo print_r($xmlDom->childNodes->item(0));
		
// 		echo "<br>";
		
// 		echo "item(0).name => ".$xmlDom->childNodes->item(0)->nodeName;
		
// 		echo "<br>";
		
// 		echo "item(0).Value => ".$xmlDom->childNodes->item(0)->nodeValue;
		
// 		echo "name => ".$xmlDom->childNodes->nodeName;
	
// 		foreach ($xmlDom->childNodes as $child) {
			
// 			echo $child->surface->__toString();
	
// 			echo "<br>";
// 			echo "<br>";

// 		}
		
// 		unset($child);

// 		$children = $xml->children();
		
// 		foreach ($children as $child):
			
// 			echo $child->surface->__toString();
			
// 			echo "<br>";
// 			echo "<br>";
		
// 		endforeach;
// 		unset($child);

// 		echo print_r($xml);
// 		$children = $xml->children();
		
// 		echo count($children);
		
// 		echo "<br>";
// 		echo "<br>";
		
		$children = $xml->children();
		
		//REF http://blog.teamtreehouse.com/how-to-parse-xml-with-php5  echo $mysongs->song[0]->artist"
		$child = $children->word[0];
		
		echo get_class($child);		// SimpleXMLElement
		
		$surface = $child->surface;
		
		echo count($child);
		
		echo "<br>";
		echo "<br>";
		
		$message = $surface;
		echo get_class($message);		// SimpleXMLElement
		
		echo "<br>";
		echo "<br>";
		
// 		$message = $surface."=====";
// 		echo get_class($message);		// string
		
// 		echo $message;
		
// 		echo "<br>";
		echo "<br>";
		
// 		echo $surface[0]."-----";
// 		echo $surface[0]."-----";
// 		echo get_class($surface);
// 		echo print_r($surface);
// 		echo print_r($child);
		
// 	?>
	<?php //echo get_class($xml); ?>
</div>