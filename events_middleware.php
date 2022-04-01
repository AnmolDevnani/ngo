<?php
session_start();
$host = "127.0.0.1";
    $username = "root";
    $pass = "FUqefFROPH4w";
    $dbname = "ngo";

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
