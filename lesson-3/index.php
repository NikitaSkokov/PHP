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
						
ЗАДАНИЕ 1
<br>
<?php
	$a = 0;
	while ( $a++<100){ 
		if ($a%3==0) {
			echo $a .' ';
		}	
	}	
?>
<br>
<br>
			
ЗАДАНИЕ 2
<br>
<?php

$n = 10;
$i = 0;
function pow1($i){
 	if ($i == 0) {
   		return "$i" . ' - это ноль.<br/>';
  	}
  	if ($i % 2) {
   		return "$i" . ' - нечетное число.<br/>';
  	} 
  	else {
   		return "$i" . ' - четное число.<br/>';
  	}
}
	do {
 		echo pow1($i);
  		$i++;
	} 
	while ($i <= $n); 
?>
<br>
<br>
			
ЗАДАНИЕ 3
<br>
<?php

$areaArr = [
	'Московская область:' => ['Москва', 'Химки', 'Мытищи'],
	'Ленинградская область:' => ['Санкт-Петербург', 'Всеволожск', 'Павловск'],
	'Белгородская область:' => ['Белгород', 'Старый-Оскол', 'Губкин'],
	'Воронежская область:' => ['Воронеж', 'Борисоглебск', 'Россошь']
];
function displayCity($arr){
    if (!is_array($arr)) {
        return print "incorrect argument '{$arr}'";
    }
    foreach ($arr as $key => $value) {
        echo $key . '<br>';
        for ($i = 0; $i < $arrLength = count($arr[$key]); $i++) {
            if ($i == $arrLength - 1) {
                echo $arr[$key][$i] . '.' . '<br>';
            } else {
                echo $arr[$key][$i] . ', ';
            }
        }
    }
}
displayCity($areaArr);
			
echo"<br>";
echo"<br>";
?>			
ЗАДАНИЕ 4
<br>
<?php
function trlt($txt) {
  
  $translit = array ("а" => "a", "б" => "b", "в" => "v", "г" => "g", "д" => "d", "е" => "e", "ё" => "yo", "ж" => "zh", "з" => "z", "и" => "i", "й" => "i", "к" => "k", "л" => "l", "м" => "m", "н" => "n", "о" => "o", "п" => "p", "р" => "r", "с" => "s", "т" => "t", "у" => "u", "ф" => "f", "х" => "h", "ц" => "ts", "ч" => "ch", "ш" => "sh", "щ" => "sh", "ь" => "", "ы" => "y", "ъ" => "", "э" => "e", "ю" => "yu", "я" => "ya", " " => " " );
  for ($i = 0; $i <= mb_strlen($txt) - 1; $i++) {
    $text.= $translit[mb_substr($txt,$i,1)];
  }
  
  return $text;
}
echo trlt('объявить массив, индексами которого являются буквы русского языка, а значениями – соответствующие латинские буквосочетания');
?>

<br>
<br>
			
ЗАДАНИЕ 5
<br>

<form action="#" method="get">
  <textarea name="textme" placeholder="Введите текст"></textarea><br>
  <input type="submit" value="Нажмите">
</form>
<h3>А вот и ответ:</h3>

<?php
function nospace ($text) {
  for ($i = 0; $i <= mb_strlen($text) - 1; $i++ ) {
    if (mb_substr($text,$i,1) == " ") {
      $newtext.= "_";
    }
    else {
      $newtext.= mb_substr($text,$i,1);
    }
  }
  return $newtext;
}
echo nospace ($_GET[textme]);
?>

<?php
echo"<br>";
echo"<br>";
			
echo 'ЗАДАНИЕ 6';
echo"<br>";
$menu = array ("Главная", "Услуги" => array ("Разработка веб-сайтов", "СЕО-оптимизация", "Контекстная реклама"), "О компании" => array ("Наша миссия", "История", "Портфолио"), "Контакты");
echo "<ul>";
foreach ($menu as $count => $itemname) {
  if (gettype($itemname) == "array" ) {
    echo "<li>".$count."<ul>";
    foreach ($itemname as $itemname2) {
      echo "<li>".$itemname2."</li>";
    }
    echo "</ul>";
  }
  else echo "<li>".$itemname."</li>";
}	
?>
<br>
<br>  
ЗАДАНИЕ 7
<br>
<?php
for ($i = 0; $i <= 20; print $i++." ") {};
?>
<br>
<br>  
ЗАДАНИЕ 8
<br>
<?php
$areaArr = [
  'Московская область:' => ['Москва', 'Химки', 'Мытищи', 'Коломна'],
  'Ленинградская область:' => ['Санкт-Петербург', 'Всеволожск', 'Павловск'],
  'Белгородская область:' => ['Белгород', 'Старый-Оскол', 'Губкин', 'Короча'],
  'Воронежская область:' => ['Воронеж', 'Борисоглебск', 'Калачи', 'Россошь']
];
foreach ($areaArr as $region => $cities) {
  echo "<br>".$region." ";
  foreach ($cities as $city) {
    if (mb_substr($city,0,1) == "К") {
      echo $city." ";
    }
  }
}
?>
<br>
<br>  
ЗАДАНИЕ 9
<br>
<?php
function trnsl($txt) {
  
  $translit = array ('а' => "a", "б" => "b", "в" => "v", "г" => "g", "д" => "d", "е" => "e", "ё" => "yo", "ж" => "zh", "з" => "z", "и" => "i", "й" => "i", "к" => "k", "л" => "l", "м" => "m", "н" => "n", "о" => "o", "п" => "p", "р" => "r", "с" => "s", "т" => "t", "у" => "u", "ф" => "f", "х" => "h", "ц" => "ts", "ч" => "ch", "ш" => "sh", "щ" => "sh", "ь" => "", "ы" => "y", "ъ" => "", "э" => "e", "ю" => "yu", "я" => "ya", " " => " " );
  
  for ($i = 0; $i <= mb_strlen($txt) - 1; $i++) {
    $text.= $translit[mb_substr($txt,$i,1)];
  }
  
  return $text;
}
function nspc ($text) {
  for ($i = 0; $i <= mb_strlen($text) - 1; $i++ ) {
    if (mb_substr($text,$i,1) == " ") {
      $newtext.= "_";
    }
    else {
      $newtext.= mb_substr($text,$i,1);
    }
  }
  return $newtext;
}
echo nspc (trnsl('объявить массив, индексами которого являются буквы русского языка, а значениями – соответствующие латинские буквосочетания'));
?>
  	</div>
		<div class="FlexItems FlexSideOne">I am content in the SideOne.</div>
		<div class="FlexItems FlexSideTwo">I am content in the SideTwo.</div>
		<div class="FlexItems FlexFooter">&copy <?= $Y ?></div>
	</div>
</body>
</html> 