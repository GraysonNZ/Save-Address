<?php

	date_default_timezone_set('Auckland/Wellington');
	/*try {
		  $conn = new PDO ( "sqlsrv:server = tcp:carpoolnz.database.windows.net,1433; Database = CarPoolDB", "carpool","D@taba5e");
		  $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	}
	catch ( PDOException $e ) {
		print( "Error connecting to SQL Server." );
		die(print_r($e));
	}
	*/


	$connectionInfo = array("UID" => "", "pwd" => "", "Database" => "", "" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
	$serverName = "";
	if ($connectionInfo["UID"]== "" || $connectionInfo["pwd"]=="" || $connectionInfo["database"] = "" || $serverName=""){
	  header("location: setup.php");
	}
	else{

	$conn = sqlsrv_connect($serverName, $connectionInfo);
}

?>
