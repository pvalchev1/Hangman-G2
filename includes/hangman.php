<?php 
include('db.php');
include('header.php');
//echo "<meta charset='utf-8'>";
session_start();
?>
	<div class="offset-md-2 col-md-8 bg-danger text-light">	
		<img src="../img/hangman0.png">
			
<?php  

$random=rand (1,5);
//echo "$random";
$word_querty="SELECT * FROM en_words WHERE en_word_id ='$random'";
$word_result=mysqli_query($conn, $word_querty);
//$word_result=
$wordString=mysqli_fetch_assoc($word_result);
$wordString=$wordString['en_word'];
//var_dump($word_result);
echo "<p></p>";
//var_dump($wordString);
//echo "$wordString";
$_SESSION['word'] = $wordString;
//echo "<h2>".$_SESSION['word']."</h2>";
//var_dump($_SESSION['word']);
//$wordString='sweeter';
$replase='*';
$wordArray=str_split($_SESSION['word']);
//var_dump($wordArray);
$wordReplase=array();

	for ($i=0; $i < count($wordArray); $i++) { 
		$wordReplase[$i]=$replase;
	}
$wordReplaseString=implode ('', $wordReplase);
$_SESSION['replase']=$wordReplaseString;
if (isset($_SESSION['replase'])) {
	echo "<h2>Познай, коя е тази ".$_SESSION['replase']. " дума?</h2>";
//echo "<pre>".print_r($wordReplase, true)."</pre>";
	echo "<p><a href='check.php' class='btn btn-xs btn-success'>Старт на играта</a></p>";
}

$img=-1;
$_SESSION['img']=$img;
$result=0;
$_SESSION['result']=$result;

?>
</div>
</body>
</html>