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
	<link href="css/style.css" rel="stylesheet" >
</head>
<body>
	<div class="FlexWrapper">
		<div class="FlexItems FlexHeader">
			<h1><?= $Header ?></h1>
		</div>
		<div class="FlexItems FlexContent">
  	   <?
       require_once('functions.php');
       get_images($directory);
       ?>
    </div>
		<div class="FlexItems FlexSideOne">I am content in the SideOne.</div>
		<div class="FlexItems FlexSideTwo">I am content in the SideTwo.</div>
		<div class="FlexItems FlexFooter">&copy <?= $Y ?></div>
	</div>
</body>
</html> 