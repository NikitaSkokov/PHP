<?php

$Header = 'I am content in the Header.';
$title = 'Layout example';
$Y = date("Y");

?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title><?= $title ?></title>
	<meta name="viewport" content="width=device-width">
	<link href="style.css" rel="stylesheet" >
</head>
<body>
	<div class="FlexWrapper">
		<div class="FlexItems FlexHeader">
			<h1><?= $Header ?></h1>
		</div>
		<div class="FlexItems FlexContent">
			<?php
 
				$a = 500;
				$b = -326464825.45;
				echo('a = ' . $a . ";</br>");
				echo('b = ' . $b . ";</br>");
				echo('exchang:</br>'); 
				$a+=+$b-$b=$a;
				echo('a = ' . $a . ";</br>");
				echo('b = ' . $b . ";</br>");
			?>
		</div>
		<div class="FlexItems FlexSideOne">I am content in the SideOne.</div>
		<div class="FlexItems FlexSideTwo">I am content in the SideTwo.</div>
		<div class="FlexItems FlexFooter">&copy <?= $Y ?></div>
	</div>
</body>
</html> 