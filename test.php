<?php

function test_Regex_ShowResult($url, $pattern) {

	echo "url => $url";
	echo "\n";
	
	echo "pattern => $pattern";
	echo "\n";
	
	preg_match($pattern, $url, $matches);
	
	if (count($matches) > 1) {
	
	echo $matches[1];;
	
	} else {
	
	echo "No matches";
	
	}

	echo "\n";
	print_r($matches);
	
}//function test_Regex_ShowResult()

function test_Regex() {

	/******************************
	
		Round: 1
	
	******************************/
	echo "\n";
	echo "=========== <1> ===========";
	echo "\n";
			
	$url = "https://www.youtube.com/watch?v=imc4xQDp_Fs&list=WL&undex=32";

	$pattern = '/\?v=(.+?)&/';
	
	test_Regex_ShowResult($url, $pattern);
	
	echo "\n";
	
	/******************************
	
		Round: 2
	
	******************************/
	echo "\n";
	echo "=========== <2> ===========";
	echo "\n";
			
	$pattern = '/\?v=(.+?)&?/';
	
	test_Regex_ShowResult($url, $pattern);
	
	echo "\n";
	
	/******************************
	
		Round: 3
	
	******************************/
	echo "\n";
	echo "=========== <3> ===========";
	echo "\n";
			
	$pattern = '/\?v=(.+?)&*/';
	
	test_Regex_ShowResult($url, $pattern);
	
	echo "\n";
	
	/******************************
	
		Round: 4
	
	******************************/
	echo "\n";
	echo "=========== <4> ===========";
	echo "\n";
			
// 	$pattern = '/([a-z]+)/g';
	$pattern = '/([a-z]+)/';	// Array
								// (
								//     [0] => https
								//     [1] => https
								// )
// 	$pattern = '/[a-z]+/';
	
	test_Regex_ShowResult($url, $pattern);
	
	echo "\n";
	
	/******************************
	
		Round: 5
	
	******************************/
	echo "\n";
	echo "=========== <5> ===========";
	echo "\n";
			
// 	$pattern = '/([a-z]+)/g';
	$pattern = '/\?v=(.+)?&*/';	// [1] => imc4xQDp_Fs&list=WL&undex=32
	
	test_Regex_ShowResult($url, $pattern);
	
	echo "\n";
	
	/******************************
	
		Round: 6
	
	******************************/
	echo "\n";
	echo "=========== <6> ===========";
	echo "\n";
			
// 	$pattern = '/([a-z]+)/g';
	$pattern = '/\?v=(.+)?&{0,1}/';	//
// 	$pattern = '/\?v=(.+)?&?/';	// [1] => imc4xQDp_Fs&list=WL&undex=32
	
	test_Regex_ShowResult($url, $pattern);
	
	echo "\n";
	
}

function execute() {
	
	test_Regex();
	
}

execute();
