<?php  
$word='sweeter';
$letter=$_POST['letter'];
$replase=' _ ';


	$wordL=str_split($word);
		for ($i=0; $i < count($wordL); $i++) { 
			if ($wordL[$i]!=$letter) {
				$wordL[$i]=$replase;
			}
		}
	$strigL[$j]=implode ('', $strigL[$j]);
	echo "<pre>".print_r($strigL[$j], true)."</pre>";
$stringArr[$j]=$strigL[$j];


echo "$stringNew";


?>
