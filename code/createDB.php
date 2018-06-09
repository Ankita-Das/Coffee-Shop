<?php

$servername="localhost";
$username="root";
$password="LIfeisyours!";
$dbname="cartDB";

$conn= new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
	die("Connection failed:".$connect_error);
}

else{
	echo "Connected Successfully";
}


//Create a database:

/*$sql="CREATE DATABASE cartDB";
if(mysqli_query($conn,$sql)){
	echo "Database created successfully!";
}

else{
echo "Error creating database:".mysqli_error($conn);
}*/


//Creating a table
$sql="CREATE TABLE Mycart(
 itemname VARCHAR(30) NOT NULL,
 quantity INT(6) UNSIGNED NOT NULL,
 price FLOAT(6) NOT NULL
 ) ";
if ($conn->query($sql) === TRUE){
	echo "Table created successfully.";
}
else
	{echo "Error creating table.".$conn->error;}


$conn->close();
?>
