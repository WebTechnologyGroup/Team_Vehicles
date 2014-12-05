<?php
 	/* databaseConnection.php
	Example database connection file.

	Revision History:
		Thida Pao, 2014.10.17: Created
	*/

	$server = "localhost";
	$username = "root";
	$password = "";
	$database = "teamdb";
	$link = mysqli_connect($server, $username, $password);

	mysqli_select_db($link, $database);

?>