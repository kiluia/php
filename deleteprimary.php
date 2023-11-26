<?php
session_start();
$server = mysqli_connect("localhost","root","","primary");
if(!$server){
    echo"Connection Failed";
}
if(isset($_GET['delete'])){
   $id = $_GET['delete'];

$thoni = "DELETE FROM `primary_table` WHERE `id`=$id";
$query = mysqli_query($server,$thoni);

if ($query) {
    $_SESSION['success'] = "Record has been deleted";
    header("Location:admin2.php");
    exit();
}else {
    $_SESSION['failure'] = "Could not delete record";
    header("Location:admin2.php");
    exit();
}
}
?>