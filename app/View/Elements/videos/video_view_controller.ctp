<?php

	$hostname = Utils::get_HostName();
	
// 	echo $hostname;
	
	if ($hostname == "localhost") {
	
		$url_src = "/VM_Cake/img";
		
	} else {
	
		$url_src = "/cake_apps/VM_Cake/img";
	
	}
	;

?>

<table>
  <tr>
    <td class="td_controller">
    
<!--     	http://www.w3schools.com/tags/tag_img.asp -->
		<img 
			src="<?php echo $url_src; ?>/player_play.png" 
			alt="play"
			onclick="play();"
			class="button_controller"
			id="button_play"
			>
			
		<img 
			src="<?php echo $url_src; ?>/player_repeat.png" 
			alt="play"
			onclick="repeat(0);"
			class="button_controller"
			id="button_repeat"
			>
			
		<img 
			src="<?php echo $url_src; ?>/player_stop.png" 
			alt="play"
			onclick="stop();"
			class="button_controller">
		||
		<img 
			src="<?php echo $url_src; ?>/player_stop.png" 
			alt="play"
			onclick="scroll_tobottom();"
			id="scroll_ToBottom"
			class="button_controller">
		
			
    </td>

    <td class="td_controller">
    
		<a href="javascript:void(0);" 
			onclick="saveCurrentTime_js();" 
			class="button_controller" id="button_save_current_time">
			
			Save time
			
		</a>
			
    </td>
    
  </tr>
  
</table>

