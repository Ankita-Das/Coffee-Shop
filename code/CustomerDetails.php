<html>
<body>

<form action="formtest1.php" method="post">

First Name:<input type="text" name="firstname"><t> 
Last Name:<input type="text" name="lastname"><br>
E-mail:<input type="text" name="email"><br>
<input type="submit">
</form>



<?php

$servername="localhost";
$username="root";
$password="*******";
$dbname="cfDB";

$conn= new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
	die("Connection failed:".$connect_error);
}

else{
	//echo "Connected Successfully";
}
//Inserting records
$fname=$_POST["firstname"];
$lname=$_POST["lastname"];
$gmail=$_POST["email"];
$sql="INSERT INTO cfCust (firstname,lastname,email)
VALUES ('$fname','$lname','$gmail')";
if($conn->query($sql) === TRUE){
//echo "New record created successfully!";
}
else
{
echo "Error:".$sql."<br>".$conn->error;
}

$conn->close();
?>

<p><a href="main_cf.php">Home Page</a></p>
</body>
</html>
