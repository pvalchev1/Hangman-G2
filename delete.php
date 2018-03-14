<?php 
include('includes/header.php');
include('includes/db.php');

$unit_id = $_GET['unit_id'];

$delete_query = "DELETE FROM units WHERE unit_id = $unit_id";

//MIND FK CONSTRAIN!!

$delete_result = mysqli_query($conn, $delete_query);

//IT IS A GOOD PRACTICE TO BE INFORMED IF YOU HAVE DELETED OR NOT 
//YOU ALREADY KNOW ABOUT THE FOLLOWING CODE

if ($delete_result) {
 				//success code can be read db query - 
 				//you can print the entire info + your newly update db query 
		
 				//it depends on you and UI you have designed ...
 				//the same is with unseccess code
 				//IT IS A GOOD PRACTICE YOU AND USER TO KNOW EXACTLY WHAT THE RESULT IS - SUCCESS OR NOT
		echo "Успешно изтрихте запис в базата данни!";
		echo "<p><a href='index.php'>Read DB</a></p>";
	}else{
		echo "Неуспешно изтриване на запис в базата данни! Моля опитайте по-късно!";
		echo("Error description: " . mysqli_error($conn)) . " Error NO - ";
		echo  mysqli_errno($conn);
		echo "<p><a href='#'>link to somewhere ... </a></p>";
	}

include('includes/footer.php');
