<?php
//REF http://www.programmersvilla.com/forums/topic/how-to-create-custom-helper-in-cakephp/

class MytestHelper extends AppHelper{
	
	public function testFunction($arg1){
		
		$path_Utils = join(DS, array(ROOT, APP_DIR, "Lib", "utils"));
		
		require_once $path_Utils.DS."utils.php";
		
		return Utils::conv_Float_to_TimeLabel($arg1);
		
// 		return ".$arg1.";
	}
}