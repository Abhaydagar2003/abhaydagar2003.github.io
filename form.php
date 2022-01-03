<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style> 
 input[type=submit] {
  width: 100%;
  padding: 10px;
  margin: 5px 0;
  box-sizing: border-box;
  border: 2px solid #000000;
  outline: none;
   background-color: green;
   color:black
   ;
   font-size:20px;
}
    .button{
  width: 100%;
  padding: 10px;
  margin: 5px 0;
  box-sizing: border-box;
  border: 2px solid #000000;
  outline: none;
  underline:none;
   background-color:#f44336;
   color:black
   ;
   font-size:20px;
    
}
table tr{
	color:black
    ;
}

input[type=text] {
  width: 50%;
  padding: 9px ;
  margin: 5px 0;
  border: 1px solid #000000;
  outline: none;
  
}

input[type=text]:focus {
  background-color: lightblue;
}

</style>

</head>
<body>
    

<form action="add.php" method="POST" name="form1">
<table width="25%" border="0">
<tbody><tr> 
<td>Name</td>
<td><input type="text" name="name"></td>
</tr>
<tr> 
<td>Age</td>
<td><input type="text" name="age"></td>
</tr>
<tr> 
<td>Email</td>
<td><input type="text" name="email"></td>
</tr>
<tr> 
<td></td>
<td><input type="submit" name="Submit" value="Add"></td>
</tr>
</tbody></table>
</form>
</body>
</html>