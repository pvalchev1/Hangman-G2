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
				echo " Wrong name or password ";
				echo "<p><a href='../index_en.php' class='btn btn-lg btn-success'> Начало </a></p>";
			} else {
				$user=$user['user_name'];
				echo "<p>Welcome to the game $user.</p><p><a href='hangman_en.php'class='btn btn-lg btn-success'> Go to the game </a></p>";
			} 
?>
</div>
		
