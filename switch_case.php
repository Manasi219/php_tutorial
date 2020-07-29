<?php
$n="3";

$a=100;
$b=50;

echo "<b><i>This is the example of switch-case</i></b>";

switch ($n) {
	case "1":
	 $result=$a+$b;
	 echo "<br><br>addition is ". $result;
		break;
		case "2":
		 $result=$a-$b;
		 echo "<br><br>subtraction is ". $result;
		break;
		case "3":
		 $result=$a*$b;
		 echo "<br><br> Multiplication is" . $result;
		break;
		case "4":
		 $result=$a/$b;
		 echo "<br><br> Division is" . $result;
		break;
	
	default:
		echo "<br><br>Invalid Choice";
		break;
}

?>
