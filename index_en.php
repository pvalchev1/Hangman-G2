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
	<a href="index.php" type="button" class="btn btn-primary">БГ</a>
	<a href="index_en.php" type="button" class="btn btn-danger">EN</a></br>
		
			<img src="img/logo_bg.jpg" class="center">
 	<div class="offset-md-2 col-md-8 bg-danger text-light">
			<p>Hangman is the name of the popular word-recognition game worldwide. Your goal is to guess the hidden word whose letters are marked with asterisks. If the letter is in the intended word, it will appear in the appropriate place (or places if it occurs more than once). Otherwise, a part of the body is painted . When it is drawn in full, after 6 mistakes, the game ends - the man is "hanged"!</p>
			<p>At this stage, the game has a dictionary of household objects.</p>
			<p>To guess words in Bulgarian go to <a href="index.php">bulgarian version</a> of the game.</p>
			<p> Good luck! </p>
		</div>
			<a href="includes/create_en.php" class="btn btn-xs btn-success offset-md-1"> New player - Register </a>
			<fieldset><div class="form-group bg-danger font-weight-bold offset-md-1 col-md-3 text-center">
				<legend> Registered users </legend>
					<form method="get" action="includes/entrance_en.php">
						
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
	

</body>
</html>