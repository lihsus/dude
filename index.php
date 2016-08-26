<?php
$profpic = "ss.jpg";
?>

<html>
<head>
<style type="text/css">

body {
background-image: url('<?php echo $profpic;?>');
}
</style>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Dude</title>
</head>
<body>
<img src ="index.jpeg" alt="failure is the first beginning" align="right" class="floating_element"/> 

<h1>Dude Web Vulnerability</h1>

<br>
<br>
<br>
<p align="right"><b>This is a simple web vulnerability application <br>with simple sql injection, cross site scripting <br>and html injections </b></p>
<div align="right" class="table_of_contents_item floating_element">
          <a href="get.php"><b> 1: Sql Injection by get parameter&nbsp;&nbsp;</a>
        </div>
	<br>
        <div align="right" class="table_of_contents_item floating_element">
          <a href="post.php">2: Sql Injection by post parameter&nbsp;&nbsp;</a>
        </div>
	<br>
        <div align="right" class="table_of_contents_item floating_element">
          <a href="xss">3: Cross-site Scripting &nbsp;&nbsp;</a>
        </div>
	<br>
        <div align="right" class="table_of_contents_item floating_element">
          <a href="htmli">4: HTML Injection&nbsp;&nbsp;</a>
        </div> 
	<br>
<br>
<br>
<p align="right">For more details see open web application <br>security project(owasp).For practise <br> you can download <br>mutillidae,dvwa <br> or  bwapp </p> 
</body>
</html>
