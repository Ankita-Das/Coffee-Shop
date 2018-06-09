<!DOCTYPE html>
<html>
<head>
<title>Thanks for visiting!</title>
</head>

<body>
<?php

$servername = "localhost";
$username = "root";
$password = "*********";
$dbname = "cartDB";

$conn=mysqli_connect($servername,$username,$password,$dbname);
if($conn === false){
	die("Connection failed:".mysqli_connect_error());
}

else{
	//echo "Connection successful!";
}


$sql="DELETE FROM Mycart";
//$sql = "SELECT * FROM Mycart";
$result = $conn->query($sql);
//echo "Number of rows: $result->num_rows<br>";
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Name:";
        echo $row["itemname"];   
        echo "   Quantity:";
	echo $row["quantity"];
	echo"    Price:";
	echo $row["price"];
	echo"<br>";
    }
} else {
    echo "Thank You for visiting.Do visit again!";
}
$conn->close();
?>
</body>
</html>	
