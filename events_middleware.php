<?php
session_start();
$host = "sql6.freemysqlhosting.net";
    $username = "sql6482257";
    $pass = "uC52sG7Hgu";
    $dbname = "sql6482257";

$conn = mysqli_connect($host,$username,$pass,$dbname);


if(!$conn){
echo "connection error" . mysqli_connect_error();  
}else{
    echo "successful";
}
if (isset($_POST["sub"])){
    $imageurl = $_POST['imageurl'];
    $nameofevent = $_POST['nameofevent'];
    $description = $_POST['description'];
    $date = $_POST['date'];
    $address = $_POST['address'];

    $query = "INSERT INTO events(`name_of_event`, `description`, `date`, `address`, `imageurl`) values('$nameofevent' , '$description' , '$date' , '$address' , '$imageurl')";
    // echo $query;
    $result = mysqli_query($conn,$query);

    header('location: events_form.php');
}
?>
