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

				$a = 50;
				$b = 15;
				if ($a >= 0 && $b >= 0) {
					echo 'a-b= '; 
					echo $a - $b;
				} elseif ($a < 0 && $b < 0) {
					echo 'a*b= '; 
					echo $a * $b;
				} elseif (($a > 0 && $b < 0) || ($a < 0 && $b > 0)) {
					echo 'a+b= '; 
					echo $a + $b;
				}
			?>
			<br>
			<br>
			
			ЗАДАНИЕ 2
			<br>
			<?php

				$x = 12;
				switch ($x) {
					case 0:
						echo '0 ';
					case 1:
						echo '1 ';
					case 2:
						echo '2 ';
					case 3:
						echo '3 ';
					case 4:
						echo '4 ';
					case 5:
						echo '5 ';
					case 6:
						echo '6 ';
					case 7:
						echo '7 ';
					case 8:
						echo '8 ';
					case 9:
						echo '9 ';
					case 10:
						echo '10 ';
					case 11:
						echo '11 ';
					case 12:
						echo '12 ';
					case 13:
						echo '13 ';
					case 14:
						echo '14 ';
					case 15:
						echo '15 ';																
						break;
				}
			?>
			<br>
			<br>
			
			ЗАДАНИЕ 3
			<br>
			<?php

				function add ($z, $y){
					return $z+$y;
				}
				echo add (5, 10);
				echo ";\n";

				function sub ($z, $y){
					return $z-$y;
				}
				echo sub (5, 10);
				echo ";\n";

				function mul($z, $y){
					return $z*$y;
				}
				echo mul (5, 10);
				echo ";\n";

				function div($z, $y){
					return $z/$y;
				}
				echo div (5, 10);
			
			echo"<br>";
			echo"<br>";
			
			echo 'ЗАДАНИЕ 4';
			echo"<br>";
				function mathOperation($arg1, $arg2, $operation){
				switch ($operation){
					case 'add':
					return add($arg1, $arg2);
					break;
					 
					case "sub":
					return sub($arg1, $arg2);
					break;
					 
					case "mul":
					return mul($arg1, $arg2);
					break;
					 
					case "div":
					return div($arg1, $arg2);
					break;
					}
				}	 
					echo  mathOperation (10, 12, 'sub');
			
			echo"<br>";
			echo"<br>";
			
			echo 'ЗАДАНИЕ 6';
			echo"<br>";
				function power($val, $pow){
					if ($pow != 0)
					{
						return $val * power ($val, $pow - 1);
					}
						return 1;
				}
				echo power(2, 8);
			echo"<br>";
			echo"<br>";
			
			echo 'ЗАДАНИЕ 7';
			echo"<br>";

				function current_time($hours, $minutes){
   					$hours = date('H');
   					$minutes =  date('i');
   					$result = $hours;
   					switch ($hours) {
   					    case 1: 
   					    case 21: { $result.=  ' час, '.$minutes.' ';}
   					    break;
   					    case 2:
   					    case 3:
   					    case 4: 
   					    case 22:
   					    case 23: { $result.=  ' часа, '.$minutes.' ';}
   					    break;
   					    default: { $result.=  ' часов, '.$minutes.' ';} 
   					    break;
   					}
   					switch ($minutes) {
   					    case 1:  
   					    case 21:
   					    case 31:
   					    case 41:
   					    case 51: { $result.=  'минута';}
   					    break;
   					    case 2:
   					    case 3:
   					    case 4:
   					    case 22:
   					    case 23:
   					    case 24:
   					    case 32:
   					    case 33:
   					    case 34:
   					    case 42:
   					    case 43:
   					    case 44:
   					    case 52:
   					    case 53:
   					    case 54: { $result.=  'минуты';}
   					    break;
   					    default: {$result.=  'минут';}
   					    break;
   					}
 					   	return $result;
				}					 
				echo current_time($hours, $minutes);
				
				?>	

		</div>
		<div class="FlexItems FlexSideOne">I am content in the SideOne.</div>
		<div class="FlexItems FlexSideTwo">I am content in the SideTwo.</div>
		<div class="FlexItems FlexFooter">&copy <?= $Y ?></div>
	</div>
</body>
</html> 