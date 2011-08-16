<?php
if(!defined(NOTICEBOARD)) {
	header("Location: ../index.php");
	exit(1);
}

/*
 * @function connect Returns the db_connection
 * requires config.php to contain the db connection details
 */
 
function connect(){
	if(defined(DBHOST) && defined(DBUSER) && defined(DBPASS) && defined(DBNAME)) {
		$connection = mysql_connect(DBHOST,DBUSER,DBPASS);
		mysql_select_db(DBNAME,$connection);
		return $connection;
	}
	return "CONFIGURATION ERROR";
}

