<?php 
include('includes/header.php');
include('includes/db.php');
?>
	<a href="create.php">Add Unit</a>
	<a href="read_products.php">Products Info</a>

<?php 


$q = "SELECT * FROM units WHERE date_deleted IS NULL";

$result = mysqli_query($conn, $q);

echo "<table border=1>";

if (mysqli_num_rows($result) > 0) {
	while($row = mysqli_fetch_assoc($result)){ 
		echo "<tr>";
		echo "<td>" . $row['unit_id'] . ' </td><td>'.$row['unit_name'] . '</td>';
		echo "<td><a href='update.php?unit_id=" . $row['unit_id'] . "'>Update</a></td>";
		echo "<td><a href='soft_delete.php?unit_id=" . $row['unit_id'] . "'>SoftDelete</a></td>";
		echo "<td><a href='delete.php?unit_id=" . $row['unit_id'] . "'>Permanent Delete!!!</a></td>";
		echo "</tr>";
	}
}
echo "</table>";

include('includes/footer.php');
