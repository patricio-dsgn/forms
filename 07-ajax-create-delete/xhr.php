<?php

// get vars
$send_create = $_POST['ajax_send_create'];
$var_create = $_POST['ajax_var_create'];

$send_delete = $_POST['ajax_send_delete'];
$var_delete = $_POST['ajax_var_delete'];





if ($var_create!="") {
	// unlink('prueba.html');
	// echo $send_create.'<br>';
	// echo $var_create.'<br><hr>';

	$myfile = fopen("./data-post/".$var_create, "w") or die("Unable to open file!");
	$txt = $var_create;
	fwrite($myfile, $txt);
	fclose($myfile);

	// return to page
	echo 'fue agregado '.$var_create.'<br><br>';

}





if ($var_delete!="") {
	unlink("./data-post/".$var_delete);
	// echo $send_delete.'<br>';
	// echo $var_delete.'<br>';
	echo 'fue eliminado '.$var_delete.'<br><br>';
}





$arr = scandir("./data-post/");
foreach ($arr as $key => $value) {
	if ($value[0]!=".") {
		echo $value.'<br>';
	};
}


?>