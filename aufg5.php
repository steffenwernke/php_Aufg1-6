<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
	<?php include('functions.php');?>
</head>
	<body>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" >
	Zahl:<input type="text" name="zahl"><br>
	<input type="submit" name="submit1">
	</form>
	
	<?php
	
	
	
 	if (isset($_POST["submit1"]))
{ 
		$eingabe=$_POST['zahl'];
		echo $eingabe;
 	 
	
	echo "<h4>Aufg1</h4>";
	$erg =mittelwert(1,2,3);
	echo "Mittelwert:".$erg."<br>";
	
	$aufg1neu=mittlerenWert(1,2,3);
	echo "mittlerer Wert".$aufg1neu."<br>"."<br>";
	
	$aufg1neu=mittelwertneu(1,2,3);
	echo "mittlerer WertNEU!!!".$aufg1neu."<br>";
	
	echo "<h4>Aufg2</h4>";
	$erg2 = summe(4);
	echo "Summe:".$erg2."<br>";
	
	echo "<h4>Aufg3</h4>";
	$n=6;
	$aufg3 = fakultaet($eingabe);
	echo "Fakultät:".$n."=".$aufg3."<br>";
	$aufg3 = fakulRekursiv($eingabe);
	
	echo "<h4>Aufg4</h4>";
	echo $n."!=".$aufg3."<br>";
	$aufg4 = primzahl(2);
	echo "Primzahl".$aufg4."<br>";

	
	echo "<h4>Aufg6</h4>";
	$aufg6=sonntagskind(01,07,2008);
	echo "Geburtstag: ".$aufg6."<br>";
	
	echo "<h4>Aufg7</h4>";
	
	$aufg7=ggt(13,11);
	echo "Aufg7 ggt ist: ".$aufg7;
	echo "AUfgabe7 Neu"."<br>";
	$x=6;
	$y=72;
	$aufg7neu=ggt2($x,$y);
	echo "ggt von: ".$x." und ".$y. " ist: ".$aufg7neu."<br>";
	$aufg7rekursiv=ggt3($x,$y);
	echo "ggt REKURSIV von: ".$x." und ".$y. " ist: ".$aufg7rekursiv."<br>";
	$aufgabe7rekursiv2=ggt4($x,$y);
	echo "ggt REKURSIV2 ganz kurz von: ".$x." und ".$y. " ist: ".$aufgabe7rekursiv2."<br>";
	$aufgabe7rekursiv2=ggt5($x,$y);
	echo "ggt REKURSIV3 nochmals neu!: ".$x." und ".$y. " ist: ".$aufgabe7rekursiv2."<br>";
	
	echo "<h4>Aufg8</h4>";
	$rekursiv=wandel(22);
	echo "ergebnis: ".$rekursiv."<br>";
	
	echo "<h4>Rekursiv gespielt ==> vor oder nach ausführung </h4>";
	$rekur=rekursion(10);
	echo "reg: ".$rekur."<br>";
	$rekur=rekursion2(10);
	echo "reg: ".$rekur."<br>";
	
	echo "<h4>Aufg25</h4>";
	
	$beginn=microtime(true);
	$aufg25=fibonacci();
	echo "fibonacci for-schleife: ".$aufg25."<br>";
	$dauer=microtime(true) - $beginn;
	$dauer1=1000*$dauer;
	echo "Zeit=".$dauer;
	
	
	echo "<h6>Aufg25</h6>";
	$aufg25=fibonacci2(7);
	echo "fibonacci die Zweite: ".$aufg25."<br>";
	
	echo "<h6>Aufg25</h6>";
	
	$beginn=microtime(true);
	$aufg25=fibonacci3(1000);
	$dauer=microtime(true) - $beginn;
	$dauer2=1000*$dauer;
	echo "Zeit=".$dauer;
	//echo "fibonacci for-schleife: ".$aufg25."<br>";
	
	echo "<br>"."dauer1: ".$dauer1;
	echo "<br>"."dauer2: ".$dauer2;
	
}	
	?>
	</body>
</html>