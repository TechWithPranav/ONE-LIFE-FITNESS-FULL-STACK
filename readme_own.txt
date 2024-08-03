******** One Life Fitness + backend + database ***************

Step 1 : install xampp and see whether your xampp is working correctly
        -- see that port is available or not

Step 2 : In project which uses xampp it has htdocs folder in xampp so in that folder we have all our folder and file of our project
        -- backup will be there u just copy it and store it in htdocs folder  

Step 3 : Then check the port on which your server is running you can see that contact.php file which you are trying to run 
         and match both the port of on which xampp is running an what you want to run your app
         ---- watch video if xampp it not getting port or error

Step 4 : run the app in this way : 
        --- http://localhost/1_fitness_website/
        --- if u specify port the write port name after localhost         

Step 5 : Now main step you need to create database manually in xampp and  tables also then only app will working 
        --- database name :  one_life_fitness
        ----table 1 : contact      
                        - $sql = "INSERT INTO `one_life_fitness` . `contact` (`FIRST_NAME`, `LAST_NAME`, `EMAIL_ADDRESS`, `MOB_NO`, `MESSAGE`, `DATE_TIME`) VALUES ('$FIRST_NAME', '$LAST_NAME', '  $EMAIL_ADDRESS', '$MOB_NO', ' $MESSAGE', current_timestamp());";
                        - in contact table according to this query create columns in xampp then your contact us page will work fine 

        ----Table 2 : subscription
                        - $sql = "INSERT INTO `one_life_fitness`.`subcriptionn` (`EMAIL`, `DATE_TIME`) VALUES ('$EMAIL', current_timestamp());";
                        - refer above query and create database in xampp then everything will work fine 

        ----Table 3 : singup
                        -$sql = "INSERT INTO `one_life_fitness`.`users` (`USER_NAME`, `PASSWORD`, `DATE_TIME`) VALUES ('$USER_NAME', '$PASSWORD', current_timestamp());";
                        - create table according to above attribute and everything fine 
        ---for login you just need to visit login.php and check database name thats it 

 ------everything is done now and working -------------------------  

Note : just instal xampp and put your project folder in xammp-> htdocs and run server and type command localhost/your_project_folder
       --- this is imp                     
