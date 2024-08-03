
<?php

$insert = false;
$show_error=false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $err = "";
   
   if (isset($_POST['USER_NAME'])) {
      
      
      $server = "localhost";
      $username ="root";
      $password = "";
      
      
      $con = mysqli_connect($server, $username, $password);
      
      if (!$con) {
         die("connection to this database failed due to" .
         mysqli_connect_error());
         echo"-----retry -----";
      }
      // echo "----------------------Signed up successfully-----------------";
      
      
      //collect post variables
      $USER_NAME = $_POST['USER_NAME'];
      $PASSWORD = $_POST['PASSWORD'];
      $CONFIRM_PASSWORD = $_POST["CONFIRM_PASSWORD"];
      $exists = false;
      
      if (($PASSWORD == $CONFIRM_PASSWORD) && $exists==false) {
         # code...
         $sql = "INSERT INTO `one_life_fitness`.`users` (`USER_NAME`, `PASSWORD`, `DATE_TIME`) VALUES ('$USER_NAME', '$PASSWORD', current_timestamp());";

       


         
         //execute the query
      if ($con->query($sql)==true) {
         echo '<script>alert("Signed up successfully")</script>';
         $insert = true;
      }
      else{
         echo"ERROR: $sql <br> $con->error";
         
      }
      
      //close the database connection
      $con->close();
      
   }
   else{
        echo '<script>alert("passwords do not match")</script>';
   
     } 
}

   
   
}
   
   
?>
