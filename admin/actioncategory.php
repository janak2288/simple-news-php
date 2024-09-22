<?php

include '../includes/dbconnection.php';

if(isset($_POST['store'])){
$p=$_POST['priority'];
$category = $_POST['category'];
$sql = "INSERT INTO categories(priority,name) VALUES ($p,'$category')";

//ececute query
if(mysqli_query($conn,$sql)){
	echo '<script> alert("category created sucessfully")
	window.location.href="category.php" </script>';
}else{
	echo "cannot create category";
}



}