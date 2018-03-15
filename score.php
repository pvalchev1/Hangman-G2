<?php 
include('includes/header.php');
include('includes/db.php');
?>
	
	

<?php 


$q = "SELECT * FROM users WHERE 1";

$result = mysqli_query($conn, $q);

echo "<table border=1>";

if (mysqli_num_rows($result) > 0) {
	while($row = mysqli_fetch_assoc($result)){ 
		echo "<tr>";
		echo "<td>" . $row['user_id'] . ' </td><td>'.$row['user_name'] .' </td><td>' .$row['user_game'] .' </td><td>'. $row['user_score'] .'</td>';
		echo "</tr>";
	}
}
echo "</table>";

include('includes/footer.php');
