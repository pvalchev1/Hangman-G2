<?php 
include('includes/header.php');
include('includes/db.php');

if(empty($_GET['submit'])){
	
	echo "<form action='create.php' method='get'>";
	echo "<p> Въведете потребителско име </p>";
	echo "<input type='text' name='user_name'>";
	echo "<p> Въведете парола </p>";	
	echo "<input type='number' name='user_password'>";
	echo "<p><input type='submit' name='submit' value='Въведи'></p>";
	echo "</form>";
}
else{
	$user = $_GET['user_name'];
	$user_password = $_GET['user_password'];
	
	
	$insert_query = 	"INSERT INTO users (user_name, user_password) 
						VALUES ('$user', '$user_password')";

			
	$insert_result= mysqli_query($conn, $insert_query);
	
			if ($insert_result) {

				echo "Успешно добавихте $user в играта!";
				echo "<p><a href='game.php'> Към играта </a></p>";
			}else{
				echo "Неуспешно добавяне на $user! Моля опитайте по-късно!";
				echo "<p><a href='index.php'> Начало </a></p>";
			}
}

include('includes/footer.php');