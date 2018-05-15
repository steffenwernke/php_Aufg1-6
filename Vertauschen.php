<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
	<?php include('arrayfunctions.php');?>
</head>
<body>
	<?php
	
	$arr=array();
			$arr[0]=58;
			$arr[1]=45;
			$arr[2]=48;
			$arr[3]=48;
			$arr[4]=46;
			$arr[5]=55;
			$arr[6]=74;
			$arr[7]=85;
			$arr[8]=63;
			$arr[9]=68;
			$arr[10]=62;
			$arr[11]=66;
			
	$doublearray= array(1.23456789,34.0123,3.21467,1.2,2.34,23,-1.05);
	
	
	function vertauschen(&$a,&$b)
{
	$hilfs = $a;
	$a = $b;
	$b = $hilfs;	
	return true; // hat keine auswirkungen, liefert wert zurück der nicht sein muss
}

function quersumme($zahl)
{
	$ziffer=0;
	
	while ($zahl>0)
	{
	$ziffer=$ziffer+$zahl%10;
	$zahl=$zahl/10;
	$zahl = (int) $zahl; 
	echo $zahl . "<br>";
	}
	return $ziffer;
}

function kvg($zahl1,$zahl2)
{
	$z1=$zahl1;
	$z2=$zahl2;
	while($z1!=$z2)
	{
		if($z1<$z2)
		{
			$z1=$z1+$zahl1;
		}
		else
		{
			$z2=$z2+$zahl2;
		}	
	}
	return $z1;
}

function ggt2($z1,$z2)
{
	$hilfs=0;
	$erg=1; 
	$i=1;
	
	while($erg!=0)
	{
		if($z2>$z1)
			{
				$hilfs=$z1;
				$z1=$z2;
				$z2=$hilfs;
			} 
		$erg= $z1-$z2;
		$z1 = $z2;
		$z2 = $erg;
	
	} 
	return $z1;
}

function kgv($a,$b){
	
	$ggt=ggt2($a,$b);
	$kgv=($a*$b)/$ggt;
	
	return $kgv;
	
}

function niederschlag($Narray)
	{
			$SumNieder=0;
			for ($i=0;$i<12;$i++)
			{
				$SumNieder = $SumNieder + $Narray[$i]; 
			}
			return $SumNieder;
		
	}
	
function maxNiederschlag($arr)
{
	$anzMonat=count($arr);
	$max=0;
	for($i=0;$i<$anzMonat;$i++)
	{
		if($arr[$i]>$max)
		{
			$max=$arr[$i];
		}
	}
	return $max;
}


function MinNiederschlag($MinArray)
{
	$AnzMonat=count($MinArray);
	$min = "";
	for($i=0;$i<$AnzMonat;$i++)
	{
		if(($MinArray[$i]<$min) || empty($min))
		$min=$MinArray[$i];
	}
	return $min;
	
}


		
	echo "<h4>Vertauschen</h4>";
	$a=77; 
	$b=55;
	$ausgabe=vertauschen($a,$b);
	echo "Nun hat ".$a. " den Wert 77 und ".$b. " den Wert 55"."<br>";
	
	echo "<h4>Quersumme</h4>";
	$z=241;
	$quer=quersumme($z);
	echo "Quersumme von ".$z." = ".$quer."<br>";
	
	$x=16;
	$y=12;
	
	echo "<h4>kvg</h4>";
	$aufg3="kvg(".$x.",".$y.")=".kvg($x,$y);
	echo $aufg3."<br>";
	
	echo "<h4>kvg</h4>";
	$aufg3="kvg(".$x.",".$y.")=".kvg($x,$y);
	echo $aufg3."<br>";
	
	$daten=array("Hans","Klaus","Max","Heinz");
	var_dump($daten);
	
	echo "<h4>arraySummeNiederschlag</h4>";
	$aufg12a=niederschlag($arr);
	echo "Jahresniederschlag: ".$aufg12a;

	echo "<h4>arrayMaxNiederschlag</h4>";	
	$aufg12b=maxNiederschlag($arr);
	echo "Max Niederschlag: ".$aufg12b;
	
	echo "<h4>arrayMaxNiederschlag</h4>";	
	$aufg12b=MinNiederschlag($arr);
	echo "Min Niederschlag:  ".$aufg12b;
	
	echo "<h4>array getMittelwert</h4>";	
	$aufg13a=getMittelwert($arr);
	echo "array Mittelwert:  ".$aufg13a;
	
	echo "<h4>array hasWert</h4>";	
	$aufg13b=hasWert($doublearray,1.2);
	if($aufg13b==true)
	{
			echo "array Suchwert: Wahr";
	}
	else
	{
			echo "array Suchwert: False";
	}
	
	
	echo "<h4>array sortieren Aufsteigend</h4>";	
	$aufg13d=sortierenAufsteigend($arr);
	
	for($i=0;$i<count($aufg13d);$i++)
	{
		echo $aufg13d[$i]."<br>";
	}
	
	echo "<h4>array sortieren Absteigend</h4>";	
	$aufg13d=sortierenAbsteigend($arr);
	
	for($i=0;$i<count($aufg13d);$i++)
	{
		echo $aufg13d[$i]."<br>";
	}
	
	echo "<h4>zahlensystem</h4>";	
	$zahl=25; $basis=5;
	
	$aufg14=zahlensystemrek($zahl,$basis);
	echo "Zahlensystem rekursiv: ".$zahl." Basis: ".$basis. " = ".$aufg14."<br>";
	
	echo "<h4>zahlensystem</h4>";
	$aufg14=zahlensystem($zahl,$basis);
	echo "Zahlensystem normal: ".$zahl." Basis: ".$basis. " = ".$aufg14."<br>";
	
	?>
</body>
</html>