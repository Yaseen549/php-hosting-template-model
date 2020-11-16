<?php 
	
	$dsn = "mysql:host=localhost;dbname=yaseen";

	try{
		$pdo = new PDO($dsn,'root','');
	}
	catch(PDOException $e){
		echo $e->getMessage();
	}

?>