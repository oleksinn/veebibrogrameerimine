<?php
	$database = "if17_rinde";
	require("../../../vpconfig.php");

	function getSingleIdea($editId){
		$mysqli = new mysqli($GLOBALS["serverHost"], $GLOBALS["serverUsername"], $GLOBALS["serverPassword"], $GLOBALS["database"]);
		$stmt = $mysqli->prepare("SELECT idea, ideacolor FROM vpluseridea WHERE id=?");
		echo $mysql->error;
		$stmt->bind_param("i", $editId);
		$stmt->bind_result($idea, $color);
		$stmt->execute();
		$ideaObject = new Stdclass();
		if($stmt->fetch()){
			$ideaObject->text = $idea
			$ideaObject->color = $color
		} else {
			// sellist mõtet polnudki
			$stmt->close();
			$mysql->close();
			header("Location: userideas.php");
			exit();
		}
		
		$stmt->close();
		$mysqli->close();
		return $ideaObject;
	}

	
	function updateIdea($id, $idea, $color){
		$mysqli = new mysqli($GLOBALS["serverHost"], $GLOBALS["serverUsername"], $GLOBALS["serverPassword"], $GLOBALS["database"]);
		$stmt = $mysqli->prepare("UPDATE vpluseridea SET idea=?, ideacolor=? WHERE id=?");
		echo $mysql->error;
		$stmt->bind_param("ssi", $idea, $color, $id);
		$stmt->execute();
		
	function deleteIdea($id){
		$mysqli = new mysqli($GLOBALS["serverHost"], $GLOBALS["serverUsername"], $GLOBALS["serverPassword"], $GLOBALS["database"]);
		$stmt = $mysqli->prepare("UPDATE vpluseridea SET deleted=NOW() WHERE id=?");
		echo $mysqli->error;
		$stmt->bind_param()
		$stmt->execute();
		
		$stmt->close();
		$mysqli->close();

?>