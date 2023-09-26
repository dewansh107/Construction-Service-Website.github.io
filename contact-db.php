<?php

$NAME=$_POST['NAME'];
$EMAIL=$_POST['EMAIL'];//$_POST is used to collect form data
$SUBJECT=$_POST['SUBJECT'];
$MESSAGE=$_POST['MESSAGE'];
$con=mysqli_connect("localhost","root","","php2");
$q="insert into contactdatabase(NAME,EMAIL,SUBJECT,MESSAGE)value('$NAME','$EMAIL','$SUBJECT','$MESSAGE')";
// $q="INSERT INTO contactdatabase(`NAME`, `EMAIL`,` SUBJECT`,` MESSAGE`) VALUES ('$NAME','$EMAIL','$SUBJECT','$MESSAGE' ";
$r=mysqli_query($con,$q);
if (mysqli_affected_rows($con)>0) {
echo "inserted successful";
}

?>
