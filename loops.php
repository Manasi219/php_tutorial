<?php

//print table of 2 using php//

$n=2;
//$res=0;
?>
<html><h2 style="color: #77ff33" align="center">Multiplication Table of Number 2</h2>
<table border="2" cellspacing="5px" cellpadding="2px" align="center" height="20%">
	<?php
for( $i=0; $i<=10; $i++)
{
	?> <tr><td align="center" bgcolor="#ff99c2" colspan="2"> <?php
	echo "<br>". $n ." * " . $i ." = ". $n*$i; ?>
</td></tr>
<?php
}
?>

</table>
</html>

