<?php 
include('includes/header.php');
include('includes/db.php');
?>
	<a href="create.php">Add Unit</a>
	

<?php 


$q = "SELECT * FROM users WHERE 'date_deleted' IS NULL";

$result = mysqli_query($conn, $q);

echo "<table border=1>";

if (mysqli_num_rows($result) > 0) {
	while($row = mysqli_fetch_assoc($result)){ 
		echo "<tr>";
		echo "<td>" . $row['user_id'] . ' </td><td>'.$row['user_name'] . '</td>';
		echo "<td>" . $row['user_id'] . ' </td><td>'.$row['user_game'] . '</td>';
		echo "<td>" . $row['user_id'] . ' </td><td>'.$row['user_score'] . '</td>';
		echo "<td><a href='update.php?user_id=" . $row['user_id'] . "'> Редактирай </a></td>";
		echo "<td><a href='soft_delete.php?user_id=" . $row['user_id'] . "'> Скрии </a></td>";
		echo "<td><a href='delete.php?user_id=" . $row['user_id'] . "'> Изтрии !!!</a></td>";
		echo "</tr>";
	}
}
echo "</table>";

include('includes/footer.php');
