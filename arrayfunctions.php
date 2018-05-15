<?php
function getMittelwert($array)
{
	$summeWerte=0;
	$arrayLength=count($array);
	for($i=0;$i<$arrayLength;$i++)
	{
		$summeWerte = $summeWerte + $array[$i];
	}
	$mittelwert = $summeWerte/$arrayLength;
	$mittelwert = number_format($mittelwert,2);
	return $mittelwert;
}

function hasWert($array,$suchwort)
{
	$arrayLength=count($array);
	$suchwort = doubleval($suchwort);

	
	for($i=0;$i<$arrayLength;$i++)
	{
		if ($array[$i]==$suchwort)
		{
			return true;
		}
	}
	return false;
	
}

function sortierenAufsteigend($sortArray)
{
	for ($i=0;$i<count($sortArray);$i++)
	{
		for ($j=0;$j<(count($sortArray)-1);$j++)
		{
			if ($sortArray[$j+1]<$sortArray[$j])
			{
				$hilfs=$sortArray[$j+1];
				$sortArray[$j+1]=$sortArray[$j];
				$sortArray[$j]=$hilfs;
			}
		}
	}
	return $sortArray;
}
function sortierenAbsteigend($sortArray)
{
	for ($i=0;$i<count($sortArray);$i++)
	{
		for ($j=0;$j<(count($sortArray)-1);$j++)
		{
			if ($sortArray[$j+1]>$sortArray[$j])
			{
				$hilfs=$sortArray[$j+1];
				$sortArray[$j+1]=$sortArray[$j];
				$sortArray[$j]=$hilfs;
			}
		}
	}
	return $sortArray;
}

function zahlensystem($zahl,$basis)
{
	$rest=0;
	$summestringrest="";
	while($zahl>0)
	{
		$rest=$zahl%$basis;
		$summestringrest=$rest."".$summestringrest;
		$zahl=$zahl-$rest;
		$zahl=$zahl/$basis;
	}
	return $summestringrest;
}

function zahlensystemrek($zahl,$basis)
{
	if ($zahl>0)
	{
		$ziffer=$zahl%$basis;
		$zahl= $zahl - $ziffer;
		return zahlensystemrek(($zahl/$basis),$basis).$ziffer;
	}
	else 
		return "";
}


?>