<!DOCTYPE html>
<html>
<head>
	<title>Ad</title>
	<link rel="stylesheet" href="css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.1/jquery.min.js"></script>
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>



</head>
<script type="text/javascript">
function function1()
{
alert("Provide your info for contest!");
var name = prompt("Please enter your name!");
var no = prompt("Please enter your number!");
while(no.length!=10)
{ 
 no = prompt("Please enter a valid number!");
}
var other = prompt("More questions");
alert("Thank you! For your participation. \n Press ok to exit!");
}
</script>
<?php
// php if want database
$name = "<script>document.write(name);</script>";
$no = "<script>document.write(no);</script>";
$data = "<script>document.write(other);</script>";
 

?>
<body>
<center>
<video id="video1" width="auto" height="20%" controls="false" autoplay="autoplay" onended="function1();">
<source src="video/video1.mp4" type="video/mp4" />
video not supported! <br>
Either update browser,<br>
or enable java on webpage.
</video>
</center> 
</body>
</html>
