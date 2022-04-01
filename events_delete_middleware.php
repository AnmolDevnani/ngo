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
        $nameofevent = $_POST['nameofevent'];
    
      
    




    $query = "DELETE FROM events where name_of_event = '$nameofevent'";
    $result = mysqli_query($conn,$query);

    header('location: events_delete_form.php');

    // echo $query;

}
?>
