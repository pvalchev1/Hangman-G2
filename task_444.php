<?php 
session_start();
$_SESSION['word'] = "word";
$word='sweeter';
$letter=$_POST['letter'];
$replase=' _ ';
// echo "<form action='task_444.php' method='get'>";
// 	echo "<p> Въведете потребителско име </p>";
// 	echo "<input type='text' name='user_name'>";
// 	echo "<p> Въведете парола </p>";	
// 	echo "<input type='number' name='user_password'>";
// 	echo "<p><input type='submit' name='submit' value='Въведи'></p>";
// 	echo "</form>";

	$_SESSION['word']=str_split($_SESSION['word']);
		for ($i=0; $i < count($wordL); $i++) { 
			if ($wordL[$i]!=$letter) {
				$wordL[$i]=$replase;
			}
		}

		$_SESSION['word']=implode ('', $_SESSION['word']);
		//start game button - друг файл
		//там показваш сплитната дума $_SESSION['word'] и формата за буквата
		бутон провери, който да води към друг файл в който се прави проверката и 
		// ако уцели буква 
		$_SESSION['word']=str_split($_SESSION['word']);
		правиш проверка за уцелена буква, запаметяваш индекса или индексите и
		заменяш тирето или тиретата с буквата, която е уцелена
		залепваш в стринг
		бутон - въведи нова буква, който връща към файла с фолрмата
		


	$strigL=implode ('', $wordL);
	echo "<pre>".print_r($strigL[$j], true)."</pre>";
$stringArr[$j]=$strigL[$j];

$stringNew=implode (' ',$stringArr);
echo "$stringNew";


?>