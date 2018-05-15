<?php 

function mittelwert($z1,$z2,$z3){
$avg = $z1+$z2+$z3;
return $avg;
}


function mittlerenWert($a,$b,$c)
{
	$z1=$a;
	$z2=$b;
	$z3=$c;
	
	if ($c>$b)
	{
		$hilfs=$b;
		$b=$c;
		$c=$hilfs;
	
	}
	echo "1:".$a."//  2:".$b."//  3:".$c; 
	
}

function sonntagskind($tag,$monat,$jahr)
{
	
	switch($monat)
	{
		case 01:
		case 10:
			$kennziffer=0;
			break;
		case 05:
			$kennziffer=1;
			break;
		/*case 08:
			$kennziffer=2;
			break;*/
		case 02:
		case 03:
		case 11:
			$kennziffer=3;
			break;
		case 06:
			$kennziffer=4;
			break;
	//	case 09:
		case 12: 
			$kennziffer=5;
			break;
		case 04:
		case 07:
			$kennziffer=6;
			break;
		default: break;
	}
	
	
	$EndZifferJahr= $jahr-1900;
	$EndZifferJahr=intval($EndZifferJahr);
	
	$AnzSchaltJ = $EndZifferJahr/4;
	$AnzSchaltJ= number_format($AnzSchaltJ);
	
	$erg = $tag + $kennziffer + $EndZifferJahr + $AnzSchaltJ;
	$rest = $erg % 7;
	
	switch ($rest)
	{
		case 0:
			$schluessel = "Sonntag";
			break;
		case 1:
			$schluessel = "Montag";
			break;
		case 2:
			$schluessel = "Di";
			break;
		case 3:
			$schluessel = "Mi";
			break;
		case 4:
			$schluessel = "Do";
			break;
		case 5:
			$schluessel = "Fr";
			break;
		case 6:
			$schluessel = "Sa";
			break;
		default: break;
	}

	return $schluessel;	
}


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
	
	echo "z1:".$z1."  //z2:".$z2."  //z3: ".$z3;
}


function summe($n){
	$sum = 0;
	for($n;$n>0;$n--)
	{
		$sum= $sum + $n;	
	}
	return $sum;
}

function fakultaet($n){
	$fak = 1;
	for($n;$n>1;$n--)
	{
		$fak= $fak * $n;	
	}
	return $fak;
}


function fakulRekursiv($n)
{
	if ($n==1)
		{ 
		return 1;
		}
	else 
		{
			return $n * fakulRekursiv($n-1);
		}
}

function primzahl($n){
	
	$wurzel= sqrt($n);
	$wurzel= round($wurzel,0);
	
	if($n==2)
	{
		return 1;
	}
	
	if(($n%2)==0){
		return 0;
	}
	
	
	for($i=3;$i<$wurzel;$i+=2)
	{
		$erg = $n%$i;
		if($erg==0)
		{
			
			return 0;
			
		}	
	}
	return 1;
}

function ggt($z1,$z2)
{
	
	while( $z1 > 0 && $z2 > 0 && $z1 != $z2){
		
		if($z2>$z1)
		{
			$z2 = $z2 - $z1;
		}
		else{
			$z1 = $z1 - $z2;
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
		//echo $i." z1: ".$z1." // ";
		//echo $i." z2: ".$z2." // ";
		
		
		$erg= $z1-$z2;
		$z1 = $z2;
		$z2 = $erg;
		//echo $i." erg: ".$erg."<br>";
		//$i++;
	} 
	return $z1;
}

function ggt3($z1,$z2)
{
	if($z2>$z1)
			{
				$hilfs=$z1;
				$z1=$z2;
				$z2=$hilfs;
			} 
	
	
	if ($z1==$z2)
	{
		return $z1;
	}
	else
	{
		$erg= $z1-$z2;
		$z1 = $z2;
		$z2 = $erg;
		return ggt3($z1,$z2);
	}
}
function ggt4($a, $b) {					//d.h. ggt4(28,21)==>false==>ggt4(21,7)==>false==>ggt4(7,0)==>true;
   $x=$a;$y=$b;
   if($b > 0) {
      return ggt4($b, $a%$b);}
   else {
	  $kgv=$a;
	  $kgv=$x*$y/$kgv;
	  return $kgv;
	  
	  }
} 

function ggt5($z1,$z2,$i=0)
{
	
	if($z1==$z2)
		{
			return $z1; 
		}
	else
		{
		if($z2>$z1)
			{
				
				$hilfs=$z1;
				$z1=$z2;
				$z2=$hilfs;
			}
			$i++;
		echo $i." Z1: ".$z1." // Z2: ".$z2." // z3: ".($z1-$z2)."<br>";	//wie gekomm ich hier die anzahl der durchläufe???
		return ggt5($z2,$z1-$z2,$i);			
		}	
}

function fibonacci($z1=1,$z2=1,$i=1000)
{
	if ($i==0)
	{
		return "";
	}
	else
	{
		$i--;
		//echo "(".$z1."/".$z2.")"."<br>";
		return $z1.",".fibonacci($z2,($z1+$z2),$i);
	}
}

function fibonacci2($wert)
{	
	if($wert==0)
	{	
		
		return 1;
	}
	else if($wert==1)
	{
		
		return 1;
	}
	else 
	{
		$erg=fibonacci2(($wert-1))+ fibonacci2(($wert-2));
		
		return $erg;
	}
	
}

function fibonacci3($n)
{
	$arr = array();
	$arr[0] = 1;
	$arr[1] = 1;
	for ($i=0;$i<=$n;$i++)
	{
		$arr[$i+2]=$arr[$i]+$arr[$i+1];
		echo $arr[$i]." ";
	}
}







function wandel($wert)
{
	if($wert>0)
	{
		return ($wert%2).wandel(intval($wert/2));
	}
	else
	{
		return "";
	}
}

function rekursion($z1)
{
	
	if($z1==0)
	{
		return "";
		
	}
	else
	{
		$text = $z1." ";
		return $text.rekursion($z1-1);
	}	
		
}
function rekursion2($z1)
{
	if($z1==0)
	{
		return "";
		
	}
	else
	{
		$text = $z1." ";
		return rekursion($z1-1).$text;
	}	
		
}


?>
