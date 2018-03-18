<?php 
include ('header.php'); 
include ('db.php');
session_start();
?>
<form method="post" action="">
	<div class="form-group bg-danger font-weight-bold offset-md-2 col-md-3 text-center">
		<p>Въведете буква:</p>
			<input type="text" name="letter">
	</div>		
	<p>
		<input type="submit"  class="btn btn-lg btn-success offset-md-2" value="Въведи">
	</p>
	
</form>
<?php  

echo "<div class='row'>";
	echo "<div class='offset-md-2 col-md-4 bg-danger text-light'>";
//echo "<h2>".$_SESSION['word']."</h2>";
//echo "<h2>".$_SESSION['replase']."</h2>";

$word=$_SESSION['word'];
$wordArray=str_split ($word);

$wordReplase=$_SESSION['replase'];
$wordReplaseArray=str_split($wordReplase);

$img = $_SESSION['img'];
$result = $_SESSION['result'];

//echo "<pre>".print_r($wordReplase, true)."</pre>";
if (isset($_POST['letter'])) {
	$letter=$_POST['letter'];

	for ($i=0; $i < count($wordArray); $i++) { 
		if ($wordArray[$i]===$letter) {
			$_SESSION['result']++;
			//echo "<p>резултат $result</p>";
			//echo $_SESSION['result'];
			
			$wordReplaseArray[$i]=$letter;
			//echo "$wordReplase[$i]";

		} else {
			// $_SESSION['img']++;
			// echo "<p>снимка $img</p>";
		}
	}
}

if ($_SESSION['result']===$result) {
	$_SESSION['img']++;
	//echo "<p>снимка $img</p>";
	//echo $_SESSION['img'];
	$img=$_SESSION['img'];
} else {
	//echo "<p>по-глямо</p>";
}	

$wordReplaseString=implode ('', $wordReplaseArray);
echo "<h3>$wordReplaseString</h3>";
$_SESSION['replase']=$wordReplaseString;

$img_arr=['hangman0.png', 'hangman1.png', 'hangman2.png', 'hangman3.png', 'hangman4.png', 'hangman5.png', 'hangman6.png'];	
$view= 'hangman0.png';
//echo $img;
if ($img<6) {

	for ($j=0; $j < 6; $j++) { 
		if ($j===$img) {
			$view=$img_arr[$j];
			//echo $view;
			//echo $img_arr[$j];
		}
	}
} else {
	$view='hangman6.png';
	//session_destroy();
	echo "<p class='offset-md-1 col-md-10 font-weight-bold bg-light text-danger'>Край на играта</p>";
	echo "<p class='btn btn-lg btn-success offset-md-1 font-weight-bold'><a href='hangman.php'>Избери нова дума</a></p>";
}
echo " <img src= '". $view . "' >";

$user_name = $_SESSION['user_name'];
$select_user = "SELECT * FROM users WHERE user_name ='$user_name'";
	$select_user_result = mysqli_query($conn, $select_user);
	$user = mysqli_fetch_assoc($select_user_result);
	//var_dump($user);
	$user_score=$user['user_score'];
	$user_game=$user['user_game'];
		
		if ($_SESSION['result']==count($wordArray)) {
			echo "<p> Честито! Печелите точка </p>";
			echo "<p><a href='hangman.php'>Избери нова дума</a></p>";
			$user_score++;
			//echo $user_score;
			$user_game++;
			//echo $user_game;
		} elseif ($_SESSION['img']>5) {
			$user_game++;
			//echo $user_game;

		}
	echo "</div>";	
			

	echo "<div class='offset-md-0 col-md-4 bg-danger text-light' >";				

$update_query = "UPDATE users 
					SET user_game ='$user_game', user_score ='$user_score'
					WHERE user_name ='$user_name'";
					
	$update_result= mysqli_query($conn, $update_query);

$q = "SELECT * FROM users ORDER BY user_score DESC";

$result_q = mysqli_query($conn, $q);

echo "<table class='table table-striped'>";

if (mysqli_num_rows($result_q) > 0) {
	echo "<tr>";
		echo "<td> № в класация </td>";
		echo "<td> Потребител </td>";
		echo "<td> Брой игри </td>";
		echo "<td> Резултат </td>";
		echo "</tr>";
		$row_score = 1;
	while($row = mysqli_fetch_assoc($result_q)){ 
		
		echo "<td>" . $row_score . ' </td><td>'.$row['user_name'] .' </td><td>' .$row['user_game'] .' </td><td>'. $row['user_score'] .'</td>';
		echo "</tr>";
		$row_score++;
	}
}
echo "</table>";
	echo "</div>";
echo "</div>";	

//echo "<pre>".print_r($wordReplase, true)."</pre>";

?>