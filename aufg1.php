<!DOCTYPE HTML>
<html>
<meta charset="utf-8">
<body>
<form action="aufg1.php" method="POST">
<input type="text" name="eingabe">
<input type="submit" >
</form>
</body>


<?php 
function mittelwertneu($a,$b,$c)
{	$z1=0;$z2=0;$z3=0;
	
	if ( ($a>$b) && ($a>$c) ) 
	{
		if ($b>$c)
		{$z1=$a;$z2=$b;$z3=$c;} 
		else 
		{$z1=$a;$z2=$c;$z3=$b;} 	
	}
	
	if ( ($b>$a) && ($b>$c) ) 
	{
		if ($a>$c)
		{$z1=$b;$z2=$a;$z3=$c;} 
		else 
		{$z1=$b;$z2=$c;$z3=$a;}		
	}
	
	if ( ($c>$a) && ($c>$b) ) 
	{
		if ($a>$b)
		{$z1=$c;$z2=$a;$z3=$b;} 
		else
		{$z1=$c;$z2=$b;$z3=$a;} 	
	}
	
	echo "z1:".$z1."  //z2:".$z2."  //z3".z3;
}

$aufg1neu=mittelwertneu(100,80,300);
echo "mittlerer WertNEU!!!".$aufg1neu."<br>";

?>

</html>