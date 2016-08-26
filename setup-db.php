<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SETUP DB</title>
</head>

<body bgcolor="#000000">

<div style=" margin-top:20px;color:#FFF; font-size:24px; text-align:center"> 
Welcome&nbsp;&nbsp;&nbsp;
<font color="#FF0000"> Dhakkan </font>
<br>
</div>

<div style=" margin-top:10px;color:#FFF; font-size:23px; text-align:left">
<font size="3" color="#FFFF00">
SETTING UP THE DATABASE SCHEMA AND POPULATING DATA IN TABLES:
<br><br> 


<?php
//including the Mysql connect parameters.
include("../sql-connections/db-creds.inc");




$con = mysql_connect($host,$dbuser,$dbpass);
if (!$con)
  {
  die('[*]...................Could not connect to DB, check the creds in db-creds.inc: ' . mysql_error());
  }




//@mysql_select_db('mysql',$con)	
	
//purging Old Database	
	$sql="DROP DATABASE IF EXISTS security";
	if (mysql_query($sql))
		{echo "[*]...................Old database 'SECURITY' purged if exists"; echo "<br><br>\n";}
	else 
		{echo "[*]...................Error purging database: " . mysql_error(); echo "<br><br>\n";}


//Creating new database security
	$sql="CREATE database `dude` CHARACTER SET `gbk` ";
	if (mysql_query($sql))
		{echo "[*]...................Creating New database 'SECURITY' successfully";echo "<br><br>\n";}
	else 
		{echo "[*]...................Error creating database: " . mysql_error();echo "<br><br>\n";}

//creating table users
$sql="CREATE TABLE dude.users (id int(3) NOT NULL AUTO_INCREMENT, username varchar(20) NOT NULL, password varchar(20) NOT NULL, PRIMARY KEY (id))";
	if (mysql_query($sql))
		{echo "[*]...................Creating New Table 'USERS' successfully";echo "<br><br>\n";}
	else 
		{echo "[*]...................Error creating Table: " . mysql_error();echo "<br><br>\n";}


//creating table emails
$sql="CREATE TABLE dude.emails
		(
		id int(3)NOT NULL AUTO_INCREMENT,
		email_id varchar(30) NOT NULL,
		PRIMARY KEY (id)
		)";
	if (mysql_query($sql))
		{echo "[*]...................Creating New Table 'EMAILS' successfully"; echo "<br><br>\n";}
	else 
		{echo "[*]...................Error creating Table: " . mysql_error();echo "<br><br>\n";}




//inserting data
$sql="INSERT INTO dude.users (id, username, password) VALUES ('1', 'rajesh', 'dai'), ('2', 'bhuwan', 'bhuwankc'), ('3', 'dayahang', 'rai'), ('4', 'saugat', 'malla'), ('5', 'haribansha', 'acharya'), ('6', 'madankrishna', 'shrestha'), ('7', 'surajsingh', 'thakuri'), ('8', 'sitaram', 'kattel'), ('9', 'khagendra', 'lamichhane'), ('10', 'bipin', 'karki')";
	if (mysql_query($sql))
		{echo "[*]...................Inserted data correctly into table 'USERS'";echo "<br><br>\n";}
	else 
		{echo "[*]...................Error inserting data: " . mysql_error();echo "<br><br>\n";}



//inserting data
$sql="INSERT INTO `dude`.`emails` (id, email_id) VALUES ('1', 'rajesh@dai.com'), ('2', 'bhuwan@kc.com'), ('3', 'dayahang@rai.com'), ('4', 'saugat@malla.com'), ('5', 'haribansha@acharya.com'), ('6', 'madankrishna@shrestha.com'), ('7', 'suraj@singh.com'), ('8', 'sitaram@kattel.com')";
	if (mysql_query($sql))
		{echo "[*]...................Inserted data correctly  into table 'EMAILS'";echo "<br><br>\n";}
	else 
		{echo "[*]...................Error inserting data: " . mysql_error();echo "<br><br>\n";}




//CREATE TABLE security.search (id int(3) NOT NULL AUTO_INCREMENT, search varchar(20) NOT NULL, PRIMARY KEY (id));
//INSERT INTO `security`.`search` (search) VALUES ( 'Dumb@dhakkan.com'), ('Angel@iloveu.com'), ('Dummy@dhakkan.local'), ( 'secure@dhakkan.local'), ( 'stupid@dhakkan.local'), ( 'superman@dhakkan.local'), ( 'batman@dhakkan.local'), ( 'admin@dhakkan.com')"; 

//including the Challenges DB creation file.
include("setup-db-challenge.php");
?>


</font>
</div>
</body>
</html>
