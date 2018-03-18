<!DOCTYPE html>
<html>
<head>
	<title>Hangman</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">
		.center {
		    display: block;
		    margin-left: auto;
		    margin-right: auto;
		    width: 80%;
		}
	</style>
</head>
<body>
	<a href="" type="button" class="btn btn-primary">БГ</a>
	<a href="index_en.php" type="button" class="btn btn-danger">EN</a></br>
		
			<img src="img/logo_bg.jpg" class="center">
 	<div class="offset-md-2 col-md-8 bg-danger text-light">
			<p>Бесеница е името на популярната в цял свят игра за познаване на думи. Целта ви е да отгатнете скритата дума, чиито букви са отбелязани с чертички. Ако буквата я има в намислената дума, тя ще се покаже на съответното място (или места, ако се среща повече от веднъж). В противен случай на бесилката се рисува част от тялото на човечето. Когато то се нарисува изцяло, след 6 грешки, играта приключва - човечето е "обесено"!</p>
			<p>На този етап играта има речник с градове в България и Великобритания.</p>
			<p>За да отгатвате градове в Англия преминете в <a href="index_en.php">английската версия</a> на играта.</p>
			<p>Успех!</p>
		</div>
			<a href="includes/create.php" class="btn btn-xs btn-success offset-md-1">Регистрирай се</a>
			<fieldset><div class="form-group bg-danger font-weight-bold offset-md-1 col-md-3 text-center">
				<legend>Вход за регистрирани потребители</legend>
					<form method="get" action="includes/entrance.php">
						
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
	

</body>
</html>