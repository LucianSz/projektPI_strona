<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h2><center>Products - Clothes </center></h2>

<form action="products.php" method="post">
<span>id_autor</span><input type="text" name="id_autor"><br>
<span>Imie</span><input type="text" name="Imie"><br>
<span>Nazwisko</span><input type="text" name="Nazwisko"><br>
<span>rok_narodzin</span><input type="text" name="rok_narodzin"><br>


<input type="submit" name="add" value="add new autor">
</form>

<?php

	$connect = mysqli_connect("localhost", "root","", "strona_internetowa");
$host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "strona_internetowa";


	if(isset($_POST['add'])){
		
	$name = $_POST['product'];
	$sanit = filter_var($name, FILTER_SANITIZE_STRING);

	$cat = $_POST['cat'];
	$sanit1 = filter_var($cat, FILTER_SANITIZE_STRING);

	$company = $_POST['company'];
	$sanit2 = filter_var($company, FILTER_SANITIZE_STRING);

	$price = $_POST['price'];
	$sanit3 = filter_var($price, FILTER_SANITIZE_NUMBER_INT);

	$image = $_POST['image'];
	$sanit4 = filter_var($image, FILTER_SANITIZE_STRING);

		$query = "INSERT INTO clothes VALUES (NULL, '$sanit', '$sanit1', '$sanit2', '$sanit3', '$sanit4')";
		mysqli_query($connect, $query);
	}

?>


