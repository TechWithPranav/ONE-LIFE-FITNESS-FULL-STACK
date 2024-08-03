<?php

//Set connection variables


$host="localhost";
$user= "root";
$password = "";
$db="one_life_fitness";

// Create a database connection

$con=mysqli_connect($host,$user,$password,$db);

// mysql_select_db($db);


if (isset($_POST['USER_NAME'])) {

//collect post variables
    
    $uname=$_POST['USER_NAME'];
    $password=$_POST['PASSWORD'];

    $sql = "select * from users where USER_NAME='".$uname."' AND 
    PASSWORD = '".$password."' limit 1";


$result = mysqli_query($con,$sql);
if (mysqli_num_rows($result)==1) {
    echo "You Have Successfully logged in";
    header("location:index.html");
    exit();
}
else{
    echo"You have invalid credentials";
    exit();
}

}



?>