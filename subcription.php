<?php

$insert = false;
if(isset($_POST['EMAIL'])){
// Set connection variables
$server = "localhost";
$username = "root";
$password = "";

//Create a database connection
$con = mysqli_connect($server, $username, $password);

//Check for connection success

if(!$con){
    die("connection to this database failed due to" . mysqli_connect_error());
}
else{
    // echo "--------Success connecting to database------";
}

//Collect post variables

$EMAIL = $_POST['EMAIL'];

$sql = "INSERT INTO `one_life_fitness`.`subcriptionn` (`EMAIL`, `DATE_TIME`) VALUES ('$EMAIL', current_timestamp());";

//Execute the query

if ($con->query($sql)==true) {
    echo "Successfully inserted";
    $insert = true;
}
else {
    echo "ERROR: $sql <br> $con->error";
}

//CLose the database connection
$con->close();

}


?>