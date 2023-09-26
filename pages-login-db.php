
<?php
if (!isset($_REQUEST['success'])) {
	header("location:pages-login.php?success");
}
?>

<?php
$EMAIL=$_POST['EMAIL'];//$_POST is used to collect form data
$PASSWORD=$_POST['PASSWORD'];
$con=mysqli_connect("localhost","root","","php2");
$q="select * from jaypeeadmin where EMAIL='$EMAIL' and PASSWORD='$PASSWORD'";
$r=mysqli_query($con,$q);

if (mysqli_affected_rows($con)>0) {
while ($k = mysqli_fetch_assoc($r)) {
	session_start();
	$_SESSION['sess_password']=$k['EMAIL'];
	$_SESSION['sess_email']=$k['PASSWORD'];
}
header("location:index1.php?success");
}else{
	echo "try again";
}
?>