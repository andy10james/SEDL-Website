<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>

<head>

<meta content="text/html; charset=utf-8" http-equiv="Content-Type">

<title> SEDL ORACLE Registration </title>
</head>

<body>

<?php
include "../PHP/vars.php";

$Name=$_POST['Name'];
$Email=$_POST['Email'];
$Subject=$_POST['Subject'];
$Message=$_POST['Message'];

if ($Name != NULL && $Email != Null) $result=mysql_query("INSERT INTO Contact (Name, Email, Subject, Message) VALUES ('$Name','$Email','$Subject','$Message')")or die("Insert Error: ".mysql_error());
mysql_close($link);

if ($result) print "Your message has been successfully sent...\n";
	
?>

<form method=post action="">
	<p>
		Name: <input type="text" name="Name">
	</p>
	<p> 
		Email Address: <input type="text" name="Email">
	</p>
	<p> 
		Subject: <input type="text" name="Subject">
	</p>
	<p> 
		Message: <br>
		<input type="text" name="Message">
	</p>
	
	<p> <input type="submit"> </p>
</form>

</body>

</html>
