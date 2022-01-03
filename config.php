
<?php
$databaseHost = 'localhost';
$databaseName = 'data';
$databaseUsername = 'root';
$databasePassword = '';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
if($mysqli){
    echo " connected fixed";
}
else echo"failed to connect";
?>
