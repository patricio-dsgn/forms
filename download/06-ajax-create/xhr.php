<?php

	// get vars
	 $var1 = $_POST['ajax_var1'];

	// write data
	$myfile = fopen("./data-post/".$var1, "w") or die("Unable to open file!");
	$txt = $var1;
	fwrite($myfile, $txt);
	fclose($myfile);

	// return to page
	echo 'fue agregado '.$var1.'<br><br>';

    $arr = scandir("./data-post/");
    foreach ($arr as $key => $value) {
        if ($value[0]!=".") {
            echo $value.'<br>';
        };
    }

?>