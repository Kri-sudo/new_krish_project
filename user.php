

<?php


// Create connection
$con=mysqli_connect("localhost","root","","user");


$p= $_POST['user'];
$h= $_POST['email'];
$hg= $_POST['message'];

$sql=mysqli_query($con,"INSERT INTO user (user,email,message) VALUES ('$p','$h','$hg')");



mysqli_close($con);

header("Location: http://localhost/website/website.php");
?>