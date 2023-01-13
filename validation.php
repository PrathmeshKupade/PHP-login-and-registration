<?php

session_start();

$conn = mysqli_connect('localhost', 'root');

if($conn){
    echo "connection successful";
}
else{
    echo "no connection";
}

mysqli_select_db($conn, 'sessionpractical');

$name = $_POST['user'];
$password = $_POST['password'];

$q = "select * from signin where name = '$name' && password = '$password'";

$result = mysqli_query($conn, $q);

$num = mysqli_num_rows($result);

if ($num == 1){
    $_SESSION['username'] = $name;
    header('location:home.php');
}
else{
    header('location:login.php');
}
 
 ?>