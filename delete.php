<?php
include ('connect.php');

if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];

    $sql = "DELETE FROM crud WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    if($result){
        header('location:display.php');
    }
    else{
        die("Connection failed: " . $conn->connect_error);
    }
}
?>