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
        $nameofevent = $_POST['nameofevent'];
    
      
    




    $query = "DELETE FROM events where name_of_event = '$nameofevent'";
    $result = mysqli_query($conn,$query);

    header('location: events_delete_form.php');

    // echo $query;

}
?>
