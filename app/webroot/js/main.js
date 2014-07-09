
var previous_position;

function show_category_list() {
	
	var select_genre = $("#keyword_genre_id");
	
	var selected_genre_id = select_genre.val();
	
//	alert("Selected genre => " + selected_genre_id);
	
	// Chagne the div background to yellow while ajaxing
	//REF .css() http://stackoverflow.com/questions/4283141/jquery-change-background-color answered Nov 26 '10 at 7:12
	$("#category_list").css("background-color", "yellow");
	
	$.ajax({
		
	    url: "/nr4/keywords/show_category_list?selected_genre=" + selected_genre_id,
	    type: "GET",
	    timeout: 10000
	    
	}).done(function(data, status, xhr) {
		
		$("#category_list").css("background-color", "white");
		
//	    $("#js").html(data);
//	    $("#js").append(data);
		$("#category_list").html(data);
//	    $("#js").append("<br/>");
		
		// Get the background color back to white
	    
	    
	}).fail(function(xhr, status, error) {
		
	    $("#genre_list").append("xhr.status = " + xhr.status + "<br>");          // 例: 404
	    
	});
	
//	$("#category_list").html("Selected genre => " + selected_genre_id);
	
}//function show_category_list() {

function show_Message() {
	
//	alert("jquery!");
	
//	$("#jqarea").text("done");
	
	$.ajax({
		
	    url: "/VM_Cake/videos/retrieve_CurrentTime",
	    type: "GET",
	    timeout: 10000
	    
	}).done(function(data, status, xhr) {
		
		$("#jqarea").text(data);
		
		seek(data);
		
	}).fail(function(xhr, status, error) {
		
	    $("#jqarea").append("xhr.status = " + xhr.status + "<br>");          // 例: 404
	    
	});
	
}

function play() {
	
	  if (ytplayer) {
	
		  var current_img_src = $("img#button_play").attr("src");
		  
		  var current_img_new = 
			  		current_img_src.replace("player_play.png", "player_pause.png");
		  
		  $("img#button_play").attr("onclick", "pause()");
		  $("img#button_play").attr("src", current_img_new);
		  
		  ytplayer.playVideo();
	
	  }
	
	}

function pause() {
	
  if (ytplayer) {
	  
	  var current_img_src = $("img#button_play").attr("src");
	  
	  var current_img_new = 
		  		current_img_src.replace("player_pause.png", "player_play.png");
	  
	  $("img#button_play").attr("onclick", "play()");
	  $("img#button_play").attr("src", current_img_new);
	  
	  ytplayer.pauseVideo();

  }

}



function stop() {

  if (ytplayer) {

	  var current_img_src = $("img#button_play").attr("src");
	  
	  var current_img_new = 
		  		current_img_src.replace("player_pause.png", "player_play.png");
	  
	  $("img#button_play").attr("onclick", "play()");
	  $("img#button_play").attr("src", current_img_new);

	  
	ytplayer.stopVideo();

  }

}

//function seek(position, id) {
function 
seek(position) {
//	function seek($position) {

  if (ytplayer) {

	  alert("previous position => " + conv_Float_to_TimeLabel(previous_position))
	  
	  previous_position = position;
	  
//	ytplayer.cueVideoById(id, 0, "medium");
	  
	ytplayer.seekTo(position);
	
	$("img#button_repeat").attr("onclick", "repeat(" + position + ")");
	
	  var current_img_src = $("img#button_play").attr("src");
	  
	  var current_img_new = 
		  		current_img_src.replace("player_play.png", "player_pause.png");
	  
	  $("img#button_play").attr("onclick", "pause()");
	  $("img#button_play").attr("src", current_img_new);
	  
	  ytplayer.playVideo();

	
//	ytplayer.seekTo($position);
//		ytplayer.seekTo(<?php //echo $position;?>);
//		ytplayer.seekTo(<?php //echo 20;?>);
//		ytplayer.seekTo(10);
	
  }

}//seek(position, fromRepeatButton)

function 
seek_FromRepeatButton(position) {
//	function seek($position) {
	
	if (ytplayer) {
		
//	ytplayer.cueVideoById(id, 0, "medium");
		
		  var current_img_src = $("img#button_play").attr("src");
		  
		  //REF replace http://stackoverflow.com/questions/2145988/how-do-i-do-string-replace-in-javascript-to-convert-9-61-to-961 answered Jan 27 '10 at 10:19
		  var current_img_new = 
			  		current_img_src.replace("player_play.png", "player_pause.png");
		  
		  //REF attr http://api.jquery.com/attr/#attr2
		  $("img#button_play").attr("onclick", "pause()");
		  $("img#button_play").attr("src", current_img_new);
		
		ytplayer.seekTo(position);
		
		ytplayer.playVideo();
//		ytplayer.play();
		
//		$("img#button_repeat").attr("onclick", "repeat(" + position + ")");
//		$("img#button_repeat").prop("onclick", "repeat(" + position + ")");
			
	}
	
}//seek_FromRepeatButton(position, fromRepeatButton)

function sort() {
	
	var hostname = window.location.hostname;
	
	var url;
	
	if (hostname == "benfranklin.chips.jp") {
		
		url = "/cake_apps/VM_Cake/videos/sort_PosList";
		
	} else {

		url = "/VM_Cake/videos/sort_PosList";

	}
	
//	alert(hostname);
	
//	var video_id = $("#video_id_hidden").text();
	
	//REF http://stackoverflow.com/questions/4582423/get-value-of-input-tag-using-jquery answered Jan 3 '11 at 6:14
	var video_id = $("#video_id_hidden").val();
	
	
	
	$.ajax({
		
	    url: url,
	    type: "GET",
	    //REF http://stackoverflow.com/questions/1916309/pass-multiple-parameters-to-jquery-ajax-call answered Dec 16 '09 at 17:37
	    data: {video_id: video_id},
	    
	    //REF json http://stackoverflow.com/questions/1261747/how-to-get-json-response-into-variable-from-a-jquery-script answered Aug 11 '09 at 17:24
//	    dataType: "json",
	    timeout: 10000
	    
	}).done(function(data, status, xhr) {
		
//		alert(conv_Float_to_TimeLabel(data.point));
//		addPosition_ToList(data.point);
		
		sort__Done(data, status, xhr);
		
//		seek(data);
		
	}).fail(function(xhr, status, error) {
		
//	    $("#jqarea").append("xhr.status = " + xhr.status + "<br>");          // 例: 404
		alert(xhr.status);
	    
	});
	
	
}//function saveCurrentTime_js()

function sort__Done(data, status, xhr) {
	
//	alert("Sort => done");
	$("#table_poslist").html(data);
	
}


function saveCurrentTime_js() {
	
	var curTime = ytplayer.getCurrentTime();
//	var curTime = getCurrentTime();
	
	var hostname = window.location.hostname;
	
	var url;
	
	if (hostname == "benfranklin.chips.jp") {
		
		url = "/cake_apps/VM_Cake/videos/save_CurrentTime";
		
	} else {
		
		url = "/VM_Cake/videos/save_CurrentTime";
		
	}
	
//	alert(hostname);
	
//	var video_id = $("#video_id_hidden").text();
	
	//REF http://stackoverflow.com/questions/4582423/get-value-of-input-tag-using-jquery answered Jan 3 '11 at 6:14
	var video_id = $("#video_id_hidden").val();
	
	
	
	$.ajax({
		
		url: url,
		type: "GET",
		//REF http://stackoverflow.com/questions/1916309/pass-multiple-parameters-to-jquery-ajax-call answered Dec 16 '09 at 17:37
		data: {curTime: curTime, video_id: video_id},
		
		//REF json http://stackoverflow.com/questions/1261747/how-to-get-json-response-into-variable-from-a-jquery-script answered Aug 11 '09 at 17:24
//	    dataType: "json",
		timeout: 10000
		
	}).done(function(data, status, xhr) {
		
//		alert(conv_Float_to_TimeLabel(data.point));
//		addPosition_ToList(data.point);
		
		saveCurrentTime_js__Done(data, status, xhr, curTime);
		
//		seek(data);
		
	}).fail(function(xhr, status, error) {
		
		$("#jqarea").append("xhr.status = " + xhr.status + "<br>");          // 例: 404
		
	});
	
	
}//function saveCurrentTime_js()

function 
saveCurrentTime_js__Done(data, status, xhr, curTime) {
	
	$("#table_poslist").append(data);
	
	alert("Position saved => " + conv_Float_to_TimeLabel(curTime));
	
	sort();
//	alert("Position saved => " + curTime);
//	addPosition_ToList(data.point);
	
}//saveCurrentTime_js__Done(data, status, xhr)

function getCurrentTime() {
	
  if (ytplayer) {

	$cur = ytplayer.getCurrentTime();

	return $cur;
//	alert($cur);
//		alert("current = ".$cur);
//		ytplayer.seekTo(<?php //echo $position;?>);
//		ytplayer.seekTo(<?php //echo 20;?>);
//		ytplayer.seekTo(10);

  }
	
  return null;
  
}

function test_AddPosition() {
	
	var current_time = getCurrentTime();
	
	var tag = "<tr><td id=\"poslist_1\" onclick=\"seek("
		+ current_time.toString()
		+ ")\">"
		//REF http://stackoverflow.com/questions/6312993/javascript-seconds-to-time-with-format-hhmmss answered Sep 27 '12 at 1:22
//		+ (new Date().toTimeString()) + "</td></tr>");
		+ current_time.toString() + "</td></tr>";
	
//	alert(tag);
	
	$("table#table_poslist").append(tag);
//	$("table#table_poslist").append(
//					"<tr><td id=\"poslist_1\" onclick=\"seek("
//					.current_time.toString()
//					.")\">"
//					//REF http://stackoverflow.com/questions/6312993/javascript-seconds-to-time-with-format-hhmmss answered Sep 27 '12 at 1:22
////					+ (new Date().toTimeString()) + "</td></tr>");
//					+ current_time.toString() + "</td></tr>");
	
}

function addPosition_ToList(position) {
	
//	var current_time = getCurrentTime();
	
	var tag = "<tr><td id=\"poslist_1\" onclick=\"seek("
		+ position.toString()
//		+ position.toFixed(5).toString()
		+ ")\">"
		//REF http://stackoverflow.com/questions/6312993/javascript-seconds-to-time-with-format-hhmmss answered Sep 27 '12 at 1:22
//		+ (new Date().toTimeString()) + "</td></tr>");
//		+ position.toString() + "</td></tr>";
		+ conv_Float_to_TimeLabel(position) + "</td></tr>";
	
//	alert(tag);
	
	$("table#table_poslist").append(tag);
//	$("table#table_poslist").append(
//					"<tr><td id=\"poslist_1\" onclick=\"seek("
//					.current_time.toString()
//					.")\">"
//					//REF http://stackoverflow.com/questions/6312993/javascript-seconds-to-time-with-format-hhmmss answered Sep 27 '12 at 1:22
////					+ (new Date().toTimeString()) + "</td></tr>");
//					+ current_time.toString() + "</td></tr>");
	
}

function conv_Float_to_TimeLabel(float_val) {
	
	//REF http://www.w3schools.com/jsref/jsref_floor.asp
	var integer = Math.floor(float_val);
	
	var decimal = float_val - integer;
	
//	var sec_num = parseInt(this, 10); // don't forget the second param
    var sec_num = integer; // don't forget the second param
    var hours   = Math.floor(sec_num / 3600);
    var minutes = Math.floor((sec_num - (hours * 3600)) / 60);
    var seconds = sec_num - (hours * 3600) - (minutes * 60);

    if (hours   < 10) {hours   = "0"+hours;}
    if (minutes < 10) {minutes = "0"+minutes;}
    if (seconds < 10) {seconds = "0"+seconds;}
//    var time    = hours+':'+minutes+':'+seconds;
    //REF split http://www.w3schools.com/jsref/jsref_split.asp
    var time    = hours+':'+minutes+':'+seconds + "."
    			+ decimal.toFixed(5).toString().split(".")[1];
    
    return time;
}

function repeat(position) {
	
	seek_FromRepeatButton(position);
//	seek_FromRepeatButton(position, true);
//	seek(position, true);
	
}

function scroll_tobottom() {
//	function scroll_ToBottom() {

//	alert("Moving the scroll");
	
//	$("img#scroll_ToBottom")
	var objDiv = document.getElementById("div_poslist");
//	var objDiv = document.getElementById("scroll_tobottom");
	
//	alert(objDiv + "/height = " + objDiv.scrollHeight);
//	var objDiv = document.getElementById("scroll_ToBottom");
	objDiv.scrollTop = objDiv.scrollHeight;
}

