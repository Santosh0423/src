<?php
if (isset($_POST['submit'])) {
$first_name = $_POST['fname'];
$last_name = $_POST['lname'];
$city = $_POST['city'];
$groupid = $_POST['groupid'];
//connect to the database server
include 'db.php';

//write sql statement to insert data
$sql = "insert into Table(first_name, last_name, groupid, city)
        values('$first_name', '$last_name', '$city', '$groupid')";


        if ($connection->query($sql)===True){
            echo "Your data was recorded";

        }
        else{
            echo "Error:" . $sql ."<br>" . $conn->error;
   
        }
        
$conn->close();
}





?>