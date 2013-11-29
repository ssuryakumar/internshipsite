<?php
/*******************************************************************************************************
*	Filename: db.inc.php
*	Purpose: All the generic database related functions and  object functions are located in this
*   file. The main pages call the  database functions and depending on the parameters passed, 
*	queries are generated dynamically and results are returned to the processing script.
*******************************************************************************************************/

		$databaseName = 'online_request';
		$hostName = '199.79.62.23';
		$userName = 'root1';
		$password = 'admin1';

		$conn = mysql_connect($hostName, $userName, $password) OR die("Failed Connecting To Mysql");
		mysql_select_db($databaseName) OR die("Failed Connecting To Database");
		
?>
