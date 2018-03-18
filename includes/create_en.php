<?php 
include ('header.php');
include('db.php');
?>
	<div class="form-group bg-danger font-weight-bold offset-md-2 col-md-3 text-center">
			<fieldset>
				<legend> Register </legend>
					<form method="get" action="">
						<p>
							<input type="text" name="user_name" placeholder="required">
						</p>
						<p>
							<input type="password" name="user_password" placeholder="required">
						</p>
							<input type="submit" class="btn btn-xs btn-success" value=" Enter ">
					</form>
			</fieldset>
	</div>
<?php 
session_start(); 			
if(isset($_GET['user_name'])){
	
	$user_name = $_GET['user_name'];
	$user_password = $_GET['user_password'];
	$_SESSION['user_name'] = $user_name;
	
	$insert_user = 	"INSERT INTO users (user_name, user_password) 
						VALUES ('$user_name', '$user_password')";

			
	$insert_result= mysqli_query($conn, $insert_user);
	
			if ($insert_result) {

				echo "You have successfully registered $user_name in the game!";
				echo "<p><a href='hangman_en.php'> Към играта </a></p>";
			} else {
				//как се извлича номера на грешката, ако има друг такъв запис
				echo "There is already a player with the same username. Choose another.";
				echo "<p><a href='../index_en.php'> Начало </a></p>";
			}
}

?>