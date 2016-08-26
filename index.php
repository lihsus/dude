<html>
<body bgcolor="#B2BABB">
<center><h1>Simple XSS </h1></center>
<center>
<b>Dude name</b>
<form action="name.php" method="POST">
<input type="text" name="yourname"/><br/>
<input type="submit" value="submit"/>


</form>
</center>
<center>
<br>
<br>

<label><b>Hint</b></label>
<p>
<b>This is simple form for injecting  cross site scripting. Try injecting javascript script tag to simply pop up the window. </b>
</p>
</body>
</html>
