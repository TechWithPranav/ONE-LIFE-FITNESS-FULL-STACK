
<?php
$insert= false;
if (isset($_POST['FIRST_NAME'])) {
    
//Set connection variables
$server = "localhost";
$username = "root";
$password = "";


// Create a database connectionā
$con = mysqli_connect($server, $username, $password);
//Check for connection success

if (!$con) {
    die("connection to this database failed due to" .mysqli_connect_error());
}


//collect post variables
$FIRST_NAME = $_POST['FIRST_NAME'];
$LAST_NAME = $_POST['LAST_NAME'];
$EMAIL_ADDRESS = $_POST['EMAIL_ADDRESS'];
$MOB_NO = $_POST['MOB_NO'];
$MESSAGE = $_POST['MESSAGE'];

$sql = "INSERT INTO `one_life_fitness` . `contact` (`FIRST_NAME`, `LAST_NAME`, `EMAIL_ADDRESS`, `MOB_NO`, `MESSAGE`, `DATE_TIME`) VALUES ('$FIRST_NAME', '$LAST_NAME', '  $EMAIL_ADDRESS', '$MOB_NO', ' $MESSAGE', current_timestamp());";

//   echo $sql;

//Execute the query
if ($con->query($sql)==true) {

    // echo`<script>alert("Hello! I am an alert box!!")</script>`;
    echo '<script>alert("Message is succesfully sended")</script>';
    $insert = true;
}
    
else{
        echo"ERROR: $sql <br> $con->error";
    }
    
    //close the database connection
    $con->close();
    
    
    
    
}
    ?>
    
    
    
    
    <!DOCTYPE html>
    <html lang="en">
        
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Contact Us</title>
            <link rel="stylesheet" href="style1.css">
        </head>
        
        <body>
            <section>
                <div class="container">
                    <div class="contactinfo">
                        <div>
                            <h2>Contact Info</h2>
                            <ul class="info">
                                <li>
                            <span><img src="images/location.png"></span>
                            <span>Siddhivinayak Nagar, Medankarwadi,chakan,pune, 410501</span>
                        </li>
                        <li>
                            <span><img src="images/email.png"></span>
                            <span>onelifefitness@gmail.com</span>
                        </li>
                        <li>
                            <span><img src="images/phone-call.png"></span>
                            <span>7058834565</span>
                        </li>
                    </ul>
                </div>
                
                <ul class="sci">
                    <li><a href="#"><img src="images/facebook.png"></a></li>
                    <li><a href="#"><img src="images/twitter.png"></a></li>
                    <li><a href="#"><img src="images/instagram.png"></a></li>
                    <li><a href="#"><img src="images/pinterest.png"></a></li>
                    <li><a href="#"><img src="images/linkedin.png"></a></li>
                    
                </ul>
            </div>
            <form action="" method="post">
                <div class="contactForm">
                    <h2>Send a Message</h2>
                    <div class="formBox">
                        <div class="inputBox w50">
                            <input type="text" name="FIRST_NAME" required>
                            <span>First Name</span>
                        </div>
                        <div class="inputBox w50">
                            <input type="text" name="LAST_NAME" required>
                            <span>Last Name</span>
                        </div>
                        <div class="inputBox w50">
                            <input type="EMAIL" name="EMAIL_ADDRESS" required>
                            <span>Email Address</span>
                        </div>
                        <div class="inputBox w50">
                            <input type="text" name="MOB_NO" required>
                            <span>Mobile Number</span>
                        </div>
                        <div class="inputBox w100">
                            <textarea name="MESSAGE" required></textarea>
                            <span>Write your message here....</span>
                        </div>
                    <div class=" submit inputBox w100">
                        <input type="submit" value="Send">
                        
                    </div>
                </div>
            </div>
        </form>
        
    </div>
    </section>
    </body>
    
    </html>
    
    