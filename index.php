<?php 
include ('includes/header.php');
 ?>
			<p>Бесеница е името на популярната в цял свят игра за познаване на думи. Целта ви е да отгатнете скритата дума, чиито букви са отбелязани с чертички. Ако буквата я има в намислената дума, тя ще се покаже на съответното място (или места, ако се среща повече от веднъж). В противен случай на бесилката се рисува част от тялото на човечето. Когато то се нарисува изцяло, след 6 грешки, играта приключва - човечето е "обесено"!</p>
			<p>На този етап играта има речник с градове в България и Великобритания.</p>
			<p>За да отгатвате градове в Англия преминете в <a href="index_en.php">английската версия</a> на играта.</p>
			<p>Успех!</p>
			<fieldset>
				<legend>Преди да започнете</legend>
					<form method="get" action="game.php">
						<p>
							<input type="text" name="user_name" placeholder="required">
						</p>
						<p>
							<input type="password" name="user_password" placeholder="required">
						</p>
							<input type="submit" value="Вход">
					</form>
			</fieldset>
	

</body>
</html>