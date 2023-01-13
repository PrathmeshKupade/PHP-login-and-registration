<?php

session_start();
header('location:login.php');

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
    echo "duplicate data";
}
else{
    $qy = "insert into signin(name, password) values('$name', '$password')";
    mysqli_query($conn, $qy);
}
 
 ?>