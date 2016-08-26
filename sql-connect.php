<?php

	//give the mysql connection 
	include("db-creds.inc");
	@error_reporting(0);
	@$con = mysql_connect($host, $dbuser, $dbpass);
	
	//check the mysqlconnection
	if(!$con)
	{
		echo "failed to connect to mysql".mysql_error();

	}
	
	
    		@mysql_select_db($dbname,$con) or die ( "Unable to connect to the database: $dbname");
	
	$sql_connect = "SQL Connect included";

?> 
