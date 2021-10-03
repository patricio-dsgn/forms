<?php

$title = basename(dirname(__FILE__));

?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo $title; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@100&display=swap" rel="stylesheet">

	<style>




		*{
			margin: 0;
			padding: 0;
			border: 0;
			transition: all 0.5s ease;
		}

		a{
			text-decoration: none;
		}

		body{
			background: #000;
			color: #0F7;
			font-size: 16px;
			font-family: monospace;
			/*font-family: 'Be Vietnam Pro', sans-serif;*/
			padding: 30px;
		}

		h1{
			margin-bottom: 20px;
		}


		ul{
			position: relative;
			padding: 10px;
			border: 1px solid #000;

		}
		li{
			/*border: 1px solid #f07;*/
			display: block;
			padding: 0px;
			margin: 0px;
		}

		a{
			color: #0f7;
		}

		a:hover{
			color: #F07;
		}


		.imp1{
			color: #f07;
		}


		.group{
			position: relative;
			/*border: 1px solid #0f0;*/
			/*margin: 10px 30px;*/
			min-width: 700px;
		}
		.group:before{
			position: absolute;
			left: -5px;
			width: 10px;
			height: 100%;
			content: "";
			border-top: 1px solid #0f7;
			border-left: 1px solid #0f7;
			border-bottom: 1px solid #0f7;
		}

		.cursor{
			position: relative;
			display: inline-block;
			width: 8px;
			height: 16px;
			top: 3px;
			background: #0f7;
			animation-name: example;
			animation-duration: 1s;
			animation-iteration-count: infinite;
		}

		@keyframes example {
		  0% {background-color: #0f7;}
		  49% {background-color: #0f7;}
		  50% {background-color: #000;}
		  100% {background-color: #000;}
		}
	</style>

</head>
<body>

	<?php
	date_default_timezone_set("America/Santiago");

	$hoy = date(" D "."M"." d "."h:"."m:"."s");
	// Wed Sep 15 15:10:41

	echo("Current Login: ".$hoy. " on FAKE console <br>");
	echo('Browser in folder <span class="imp1">'.$title.'</span>:~ Guest User$ <span class="cursor"></span> <br>');

	echo'<br><br>';

?>


<?php
	// $str = 'abc-def-ghi-jkl-mno-pqr-stu-vwx-yz';
	// $pieces = explode('-', $str);
	// $p0 = $pieces[0];
	// echo $p0; //mno
	$arrayFilesRaw = scandir("./");
	$arrayFilesFinal = [];
	foreach ($arrayFilesRaw as $k => $v) {
		if (
			($v!=".")&&
			($v!="..")&&
			($v!=".DS_Store")&&
			($v!="codex.php")
		) {
			$pieces = explode('-', $v);
			$p0 = $pieces[0];
			array_push($arrayFilesFinal, [$p0,$v]);
		}
	}
	echo'<ul>';
	foreach ($arrayFilesFinal as $k => $v) {
		$prev = $arrayFilesFinal[$k-1][0];
		$here = $arrayFilesFinal[$k][0];
		$next = $arrayFilesFinal[$k+1][0];

		if (($here==$next)&&$here!=$prev) {
			$group_active += 1;// echo '(in the group)';
			echo'<div class="group">'.'<li><a href="./'.$v[1].'" title="">'.$v[1].'</a></li>';
		}else if (($here!=$next)&&$here==$prev) {
			$group_active += 1;// echo '(in the group)';
			echo'<li><a href="./'.$v[1].'" title="">'.$v[1].'</a></li>'.'</div>';
		}else{
			echo'<li><a href="./'.$v[1].'" title="">'.$v[1].'</a></li>';
		}
	}

	echo '</ul>';


	 ?>



</body>
</html>


<!-- https://www.youtube.com/watch?v=as1opL254NA -->