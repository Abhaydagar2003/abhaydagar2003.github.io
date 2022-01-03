<?php
include("config.php");
$id = $_GET['id'];
$result = mysqli_query($mysqli, "DELETE from datail WHERE id=$id");

if($result){
echo"deleted successfully";
    header("Location:index.php");
}

?>