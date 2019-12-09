<?php
$p=@$_GET['page'];
if($p) {
	$path=$p.".php";
	if(file_exists($path)){
		include($path);
	}
}else{
	include "front/content.php";
}
?>