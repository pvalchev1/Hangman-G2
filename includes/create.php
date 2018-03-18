<?php 
include ('header.php');
include('db.php');
?>
	<div class="form-group bg-danger font-weight-bold offset-md-2 col-md-3 text-center">
			<fieldset>
				<legend>Регистрирай се</legend>
					<form method="get" action="">
						<p>
							<input type="text" name="user_name" placeholder="required">
						</p>
						<p>
							<input type="password" name="user_password" placeholder="required">
						</p>
							<input type="submit" class="btn btn-xs btn-success" value="Вход">
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

				echo "<p class='offset-md-2 col-md-8 bg-danger text-light'>Успешно добавихте $user_name в играта!</p>";
				echo "<p><a href='hangman.php' class='btn btn-xs btn-success offset-md-2'> Към играта </a></p>";
			} else {
				//как се извлича номера на грешката, ако има друг такъв запис
				echo "<p class='offset-md-2 col-md-8 bg-danger text-light'>Вече има играч със същото потребителско име.</p><p class='offset-md-2 col-md-8 bg-danger text-light'> Изберете друго.</p>";
				echo "<p><a href='../index.php' class='btn btn-xs btn-success offset-md-2'> Начало </a></p>";
			}
}

?>