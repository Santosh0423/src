<?php
include '../header.php';
?>
<?php
if (isset($_POST['submit'])) {
$first_name = $_POST['fname'];
$last_name = $_POST['lname'];
$city = $_POST['city'];
$groupid = $_POST['groupid'];
//connect to the database server
include 'db.php';

//write sql statement to insert data
$sql = "INSERT INTO studentInfo (first_name, last_name, groupid, city) 
        VALUES ('$first_name', '$last_name', '$city', '$groupid')";



        if ($conn->query($sql)===True) {
            echo "Your data was recorded";

        }
        else{
            echo "Error:" . $sql ."<br>" . $conn->error;
   
        }
        
$conn->close();
}





?>
<?php
include '../footer.php';
?>