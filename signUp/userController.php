<?php

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$emailAddress = $_POST['emailAddress'];
$birthday = $_POST['birthday'];
$pass = $_POST['pass'];

$connection = mysqli_connect('localhost','root');

mysqli_select_db($connection,"signupdata");
$query = "INSERT INTO usersignup(firstName,lastName,emailAddress,birthday,pass) VALUES ('$firstName','$lastName','$emailAddress','$birthday','$pass')";

mysqli_query($connection,$query);

echo "MESAZHI U DËRGUA!";

?>