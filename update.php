<?php
include('includes/header.php');
include('includes/db.php');

if(empty($_POST['submit'])){

	$unit_id = $_GET['unit_id'];

//to populate the form
	$q = "SELECT * FROM units WHERE unit_id = $unit_id";
	$res = mysqli_query($conn, $q);

//we expect as a result only one row
//so we do not need the while cycle
	$row = mysqli_fetch_assoc($res);

//var_dump($row);

//form is exactly the same as in create.php
//MIND THE VALUES!!! AND HIDDEN INPUT TYPE

	echo "<p>Edit UNIT</p>";
	echo "<form action='update.php' method='post'>";
	
	//! we need it to transfer the id of the updated row
	echo "<input type='hidden' name='unit_id' value=" . $row['unit_id'] . ">";

	echo "<input type='text' name='unit_name' value='".$row['unit_name']."'>";
	
	echo "<input type='submit' name='submit' value='update'>";
	echo "</form>";
}else {
	//UPDATE QUERY CODE AS FOLLOWS
//var_dump($_POST);
	
	$unit_id   = $_POST['unit_id'];
	$unit_name = $_POST['unit_name'];
	
	$update_query = "UPDATE units 
					SET unit_name ='$unit_name' 
					WHERE unit_id = $unit_id";
					
	$update_result= mysqli_query($conn, $update_query);
	
	if ($update_result) {
 				//success code can be read db query - 
 				//you can print the entire info + your newly update db query 
		
 				//it depends on you and UI you have designed ...
 				//the same is with unseccess code
 				//IT IS A GOOD PRACTICE YOU AND USER TO KNOW EXACTLY WHAT THE RESULT IS - SUCCESS OR NOT
		echo "Успешно променихте $unit_name в базата данни!";
		echo "<p><a href='index.php'>Read DB</a></p>";
	}else{
		echo "Неуспешна промяна на запис в базата данни! Моля опитайте по-късно!";
		echo "<p><a href='#'>link to somewhere ... </a></p>";
	}
}

include('includes/footer.php');