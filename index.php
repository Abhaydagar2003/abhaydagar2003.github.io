<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    



<?php
include_once("config.php");
$result = mysqli_query($mysqli,"SELECT* from datail ORDER BY id DESC"); 
?>
<a href="form.php">Add more details</a>
<table width="50%" height="15%" border="0">
<tbody><tr bgcolor="yellow">
<th>Name</th>
<th>Age</th>
<th>Email</th>
<th >Update</th>
<th>Remove</th>

	<?php 
while($res = mysqli_fetch_array($result)) { 		
echo '<tr>';
echo '<td>' .$res['name'].'</td>';
echo '<td>' .$res['age'].'</td>';
echo '<td>' .$res['email'].'</td>';      

echo"<td ><a  href=\"edit.php?id=$res[id]\"><input  type='submit'value='Edit'> </a> </td>";
echo"<td><a href=\"delete.php?id=$res[id]\"><input type='submit'value='Delete'> </a> </td>";

}
?>




</tr></tbody></table>
</body>
</html>