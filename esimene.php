<?php
	//et pääseks ligi sessioonile ja funktsioonidele
	require("functions.php");
	
	//kui pole sisseloginud, liigume login lehele
	if(!isset($_SESSION["userId"])){
		header("Location: login.php");
		exit();
	}
	
	//kui on sisseloginud, siis pealehele
	if(isset($_GET["logout"})){
		session_destroy();
		header("Location: esimene.php");
		exit();
	}
	
	
	//muutujad
	$myName = "Oleksii";
	$myFamiliyName = "Inno";
	
	//hindan päeva osa, võrdlemine < / > / <= / >= / == != )
	$hourNow = date("H");
	$partOfDay = "";
	if ($hourNow < 8){
		$partOfDay = "Varajane hommik";
	}	
	if ($hourNow >= 8 and $hourNow < 16){
		$partOfDay = "koolipäev";
	}	
	if ($hourNow > 16){
		$partOfDay = "vaba aeg";
	}
	//echo $partOfDay;
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"> [andmed andmete kohta]
    <title>Oleksii Inno programeerib veebi</title>
</head>
<body>
    <h1><?php echo $myName ." " .$myFamiliyName; ?>, veebiprogrammeerimine</h1>
    <p>See veebileht on loodud õppetöö raames ning ei sisalda mingisugust tõsiseltvõetavat sisu!</p>
	<p><a href="?logout01">Logi välja!</a></p>

	
	<p>Meie õpime <a href="http://www.tlu.ee">Tallinna ülikoolis</a>.</p>
	<p>Minu esimene php leht on <a href="../esimene.php">siin</a>.</p>
	<p>Minu sõbra Meelise leht on <a href="../../../../~lutsmeel/Veebiprogrammeerimine">siin</a></p>
	<p>Pilte näeb <a href="foto.php">siin</a>.</p>
    <?php
        echo "Algas PHP õppimine.";
        echo "<p>Täna on ";
		echo date("d.m.Y") .", kell oli lehe avamise hetkel " .date("H:i:s");
		echo ", hetkel on " .$partOfDay .".</p>";
    ?>


</body>
</html>
