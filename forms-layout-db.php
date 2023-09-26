<?php

$pname=$_POST['pname'];
$pid=$_POST['pid'];//$_POST is used to collect form data
$ino=$_POST['ino'];
$pdes=$_POST['pdes'];
$ms=$_POST['ms'];
$zip=$_POST['zip'];
$con=mysqli_connect("localhost","root","","php2");
$q="insert into addproduct(pname,pid,ino,pdes,ms,zip)value('$pname','$pid','$ino','$pdes','$ms','$zip')";
// $q="INSERT INTO contactdatabase(`NAME`, `EMAIL`,` SUBJECT`,` MESSAGE`) VALUES ('$NAME','$EMAIL','$SUBJECT','$MESSAGE' ";
$r=mysqli_query($con,$q);
if (mysqli_affected_rows($con)>0) {
echo "inserted successful";
}

?>