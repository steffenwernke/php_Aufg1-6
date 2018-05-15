<?php

function vertauschen(&$a,&$b)
{
	$hilfs = $a;
	$a = $b;
	$b = $hilfs;	
	return true;
}

function quersumme($zahl)
{
	$ziffer=0;
	
	while ($zahl>0)
	{
	$ziffer=$ziffer+$zahl%10;
	$zahl=$zahl/10;
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

?>