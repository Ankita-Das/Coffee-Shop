<html>
<head>
<title>Billing page</title>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "LIfeisyours!";
$dbname1 = "cartDB";
$dbname2 = "cfDB";

// Create connection

$conn2=mysqli_connect($servername,$username,$password,$dbname2);
if($conn2 === false){
	die("Connection failed:".mysqli_connect_error());
}

else{
	echo "Connection successful TO Customer Details table!";
}


//$sql="DELETE FROM cfCust";
$sql="SELECT * FROM cfCust";

$result=$conn2->query($sql);
echo "<p>Customer Details:</p>";
$n=$result->num_rows;
$i=1;
//echo $n;
//echo"<br> $i";

echo "out";
if($result->num_rows>0){
	while($row=$result->fetch_assoc()){
		echo "<br>i: $i  n:$n";
		if($i==$n){
		echo "<br>Matched!";
		//echo "<br> i: $i";
		echo "Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
		}
		$i=$i+1;
		//echo $i;

    }
} else {
    echo "0 results";
}

$conn2->close();	

// Create connection

$conn1=mysqli_connect($servername,$username,$password,$dbname1);
if($conn1 === false){
	die("Connection failed:".mysqli_connect_error());
}

else{
	echo "Connection successful to Coffee Details table!";
}



/*$name="Cappucino";
$quantity=$_POST["quantity"];
$price="150";
echo "Successfully added $quantity Cappucinos to Your Kart!";*/
$sql = "SELECT * FROM Mycart";
$result = $conn1->query($sql);
echo "done";
echo "Number of rows: $result->num_rows<br>";
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
	//echo $row["quantity"];
    }
} else {
    echo "Nothing selected!";
}

$conn1->close();

echo "<p><a href='exit.php'>Exit</a><p>";

?>
</body>
</html>
