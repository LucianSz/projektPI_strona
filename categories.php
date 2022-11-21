<!DOCTYPE html>
<html lang="en">
<head></head>
<body>





<?php
	
	echo "ADMIN - CATEGORIES -";



	include 'G:\xampp\htdocs\rimini\connect.php';




	if(isset($_POST['add'])){
		$name=$_POST['cat'];
		$sanit = filter_var($name, FILTER_SANITIZE_STRING);
		$query = "INSERT INTO categories VALUES (NULL, '$sanit')";

		mysqli_query($connect, $query);
	}
	


	if(isset($_POST['remove'])){
		$name2=$_POST['id_cat'];
		$id_sanit = filter_var($name2,FILTER_SANITIZE_NUMBER_INT);
		$query2 = "DELETE FROM categories WHERE id_category=$id_sanit";

		mysqli_query($connect, $query2);
		echo 'Category deleted<br><br><br>';
	}



	if(isset($_POST['update'])){
		$name3=$_POST['categories'];
		$id_sanit = filter_var($_POST['id_cat'],FILTER_SANITIZE_NUMBER_INT);
		$name_sanit = filter_var($name3, FILTER_SANITIZE_STRING);
        $query3 = "UPDATE categories SET Category_name='$name_sanit' WHERE id_category = $id_sanit";
		
		mysqli_query($connect, $query3);
		echo ' Category updated';
	}
?>



<form action="categories.php" method="post">

<input type="text" name="cat">
<input type="submit" name="add" value="add new">
</form>
<?php
	$query = "SELECT * FROM categories";
	$result = mysqli_query($connect, $query);
	
	while($row = mysqli_fetch_array($result)){
		echo '<form action="categories.php" method="post">';
		echo "<br><input type=text name=categories value=". $row[1].">";
		echo '<input type="submit" name="update" value="update">
		<input type="hidden" name="id_cat" value="'.$row[0].'"><input type=submit name="remove" value="delete" onclick="return Defuse();"/>';
echo '</form>';
echo "<script type='text/javascript'>
function Defuse() {
    return confirm('Are you sure');
}
</script>\n";

	}




 
?>
</body>
</html>