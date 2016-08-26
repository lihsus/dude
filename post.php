<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>DUDE</title>
		
</head>

<body bgcolor="#B2BABB">
<div style=" margin-top:20px;color:#17202A; font-size:24px; text-align:center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>HELLO<font color="#17202A"> DUDE </font><br></b></div>

<div  align="center" style="margin:40px 0px 0px 520px;border:20px; background-color:#B2BABB; text-align:center; width:400px; height:150px;">

<div style="padding-top:10px; font-size:15px;">
 

<!--Form to post the data for sql injections Error based SQL Injection-->
<form action="" name="form1" method="post">
	<div style="margin-top:15px; height:30px;"><b>Username : &nbsp;&nbsp;&nbsp;</b>
	    <input type="text"  name="uname" value=""/>
	</div>  
	<div><b> Password : &nbsp;&nbsp;&nbsp;</b>
		<input type="text" name="passwd" value=""/>
	</div></br>
	<div style=" margin-top:9px;margin-left:90px;">
		<input type="submit" name="submit" value="Submit" />
	</div>
</form>

</div></div>

<div style=" margin-top:10px;color:#FFF; font-size:23px; text-align:center">
<font size="6" color="#FFFF00">





<?php
//including the Mysql connect parameters.
include("sql-connect.php");
error_reporting(0);

// take the variables
if(isset($_POST['uname']) && isset($_POST['passwd']))
{
	$uname=$_POST['uname'];
	$passwd=$_POST['passwd'];

	//logging the connection parameters to a file for analysis.
	$fp=fopen('result.txt','a');
	fwrite($fp,'User Name:'.$uname."\n");
	fwrite($fp,'Password:'.$passwd."\n");
	fclose($fp);


	// connectivity
	$uname='"'.$uname.'"';
	$passwd='"'.$passwd.'"'; 
	@$sql="SELECT username, password FROM users WHERE username=($uname) and password=($passwd) LIMIT 0,1";
	$result=mysql_query($sql);
	$row = mysql_fetch_array($result);

	if($row)
	{
  		//echo '<font color= "#0000ff">';	
  		
  		echo "<br>";
		echo '<font color= "#1c2833" font size = 3>';
		//echo " You Have successfully logged in " ;
		echo '<font size="3" color="#1c2833">';	
		echo "<br>";
		echo 'Dude name:&nbsp;'. $row['username'];
		echo "<br>";
		echo 'Dude Password:&nbsp;' .$row['password'];
		echo "<br>";
		echo "</font>";
		echo "<br>";
		echo "<br>";
		echo "&nbsp;&nbsp;&nbsp;login successfully";	
		
  		echo "</font>";
  	}
	else  
	{
		echo '<font color= "#1c2833" font size="3">';
		//echo "Try again looser";
		print_r(mysql_error());
		echo "</br>";
		echo "</br>";
		echo "</br>";
		echo "&nbsp;&nbsp;&nbsp;Try again Dude login failed";	
		echo "</font>";  
	}
}

?>

<button onclick="history.go(-1);">Back </button>
</font> </div></br></br><center>
<p><b>Hint</b></p>
<p>This is an sql injection by post parameter. Inject all available parameters(single quote, double quote, backslash) of the web page with characters reserved in the type of database.After injecting. If there exits an error. Now try patching with objective of obtaining the name of database and then table name.</p></center>
</body>
</html>
