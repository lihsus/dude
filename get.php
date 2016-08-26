<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>DUDE </title>

</head>

<body bgcolor="#B2BABB">

<div style=" margin-top:60px;color:#17202A; font-size:23px; text-align:center">&nbsp;&nbsp;&nbsp;<b>HELLO<font color="#17202A"> DUDE </font></b><br>
<font size="3" color="#17202A">


<?php
//including the Mysql connect parameters.
include("sql-connect.php");
error_reporting(0);
// take the variables
if(isset($_GET['id']))
{
$id=$_GET['id'];
//logging the connection parameters to a file for analysis.
$fp=fopen('result.txt','a');
fwrite($fp,'ID:'.$id."\n");
fclose($fp);

// connectivity 


$sql="SELECT * FROM users WHERE id=('$id') LIMIT 0,1";
$result=mysql_query($sql);
$row = mysql_fetch_array($result);

	if($row)
	{
  	echo "<font size='4' color= '#1c2833'>";
	echo "<br>";   	
	echo 'Dude name:&nbsp;'. $row['username'];
	  	
	echo "<br>";
  	echo 'Dude Password:&nbsp;' .$row['password'];
  	echo "</font>";
  	}
	else 
	{
	echo '<font color= "#1c2833">';
	print_r(mysql_error());
	echo "</font>";  
	}
}
	
	else { echo "<br><b>Please enter your dude's id</b>";}

?>
<br>
<br>
<button onclick="history.go(-1);">Back </button>
</font> </div></br></br><center>
<p><b>Hint</b></p>
<p>This is sql injection by get patameter.Try adding numeric id 's query in the url.Inject all avilable parameters(i.e single quote, double quote, backslash ) of the web page's url with characters reserved in the type of database. After injecting. If there exits an error. Now try patching with objective of obtaining the name of database and then table name. </p></center>
</body>
</html>
