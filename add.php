
<?php
include_once("config.php");
if(isset($_POST['Submit'])) {	
$name = $_POST['name'];
$age = $_POST['age'];
$email =$_POST['email'];

$result = mysqli_query($mysqli,"Insert into datail VALUES ('','$name','$age','$email')");
if($result)
    echo"true";
    else {
        echo"false";
    }
echo "<font color='black'>connceted to database";
echo "<br><a href='index.php'>View Result";
}
?>
