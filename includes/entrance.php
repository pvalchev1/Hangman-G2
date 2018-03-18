<?php 
include('db.php');
include('header.php');
session_start();
?>
<div class="offset-md-2 col-md-8 bg-danger text-light">
<?php

$user_name = $_GET['user_name'];
$user_password = $_GET['user_password']; 
$_SESSION['user_name'] = $user_name;
	$select_user = "SELECT * FROM users WHERE user_name ='$user_name' AND user_password = '$user_password'";
	$select_user_result = mysqli_query($conn, $select_user);
	$user = mysqli_fetch_assoc($select_user_result);
	//var_dump($user);
		
			
			if (count($user)==0) {
				echo "Грешно име или парола";
				echo "<p><a href='../index.php' class='btn btn-lg btn-success'> Начало </a></p>";
			} else {
				$user=$user['user_name'];
				echo "<p>Добре дошъл в играта $user.</p><p><a href='hangman.php'class='btn btn-lg btn-success'>Към играта</a></p>";
			} 
?>
</div>
		
