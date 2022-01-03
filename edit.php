<?php
include_once("config.php");
$id=$_GET['id'];
$result=mysqli_query($mysqli,"SELECT*from datail ORDER BY id=$id");
while($res=mysqli_fetch_array($result)){
$name=$res['name'];
$age=$res['age'];
$email=$res['email'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="" method="POST" name="form1">
<table width="25%" border="0">
<tbody><tr> 
<td>Name</td>
<td><input type="text" name="name" value="<?php echo $name;?>"></td>
</tr>
<tr> 
<td>Age</td>
<td><input type="text" name="age" value="<?php echo $age;?>"></td>
</tr>
<tr> 
<td>Email</td>
<td><input type="text" name="email" value="<?php echo $email;?>"></td>
</tr>
<tr> 
<td></td>
<td><input type="submit" name="Submit" value="Add"></td>
</tr>
</tbody></table>
<br>
<input type="hidden" name="id" value=<?php echo $_GET['id']  ?>><br>

</form>
<?php
if(isset($_POST['Submit'])) {	
    $name = $_POST['name'];
    $age = $_POST['age'];
    $email =$_POST['email'];
    
    $result = mysqli_query($mysqli,"UPDATE  datail SET name='$name',age='$age',email='$email' where id=$id");
    if($result)
        header("location:index.php");
        else {
            echo"failed to update";
        }
    
    }
?>
</body>
</html>