<!DOCTYPE html>
<html>
<head>
 <title>Coffee at its best!</title>
 <meta charset="UTF-8">
 <link rel="stylesheet" type="text/css" href="mystyle1.css">
</head>
<body>
<div>
<h1>THE PERFECT CUP</h1>
</div>
<hr>
<h2>Choose as many as you want:</h2>

<ul style="list-style-type:square">

 <li><a href="cf1.php">Cappucino</a></li>
 <li><a href="cf2.php">Expresso</a></li>
 <li><a href="cf3.php">Ristretto</a></li>
 <li><a href="cf4.php">Cafe Latte</a></li>
</ul>


<p class="det"><a href="formtest1.php">Enter Customer Details</a>


<?php

//Create a database:

/*$sql="CREATE DATABASE cfDB";
if(mysqli_query($conn,$sql)){
	echo "Database created successfully!";
}

else{
echo "Error creating database:".mysqli_error($conn);
}
*/

//Creating a table
/*$sql="CREATE TABLE cfCust(
 firstname VARCHAR(30) NOT NULL,
 lastname VARCHAR(30) NOT NULL,
 email VARCHAR(50)
 ) ";
if ($conn->query($sql) === TRUE){
	echo "Table created successfully.";
}
else
	{echo "Error creating table.".$conn->error;}
*/



//$sql="DELETE FROM cfCust";
/*$sql="SELECT * FROM cfCust";
$result=$conn->query($sql);

if($result->num_rows>0){
	while($row=$result->fetch_assoc()){
		echo "Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
} else {
    echo "0 results";
}
*/		

?>




</body>
</html>
