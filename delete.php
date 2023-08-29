<?php
include 'connection.php';
$id = $_GET['userid'];
$dlt = "DELETE FROM `form_control` WHERE id = $id";
$deleted = mysqli_query($con, $dlt);

if($deleted){
    header("location:view.php");
}
?>