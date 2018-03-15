<?php 
//JOINS DEMO
include('includes/header.php');
include('includes/db.php');
?>
	<a href="create.php">Add Unit</a>
	<a href="read_products.php">Products Info</a>

<?php 

// //1

// $q = "SELECT * FROM products WHERE date_deleted IS NULL";

// $result = mysqli_query($conn, $q);

// echo "<table border=1>";

// if (mysqli_num_rows($result) > 0) {

// 	while($row = mysqli_fetch_assoc($result)){ 
// 		echo "<tr>";
// 		echo "<td>" . $row['product_id'] . ' </td><td>'.$row['product_name'] . '</td><td>'.$row['unit_id'] . '</td>';
// 		echo "<td><a href='update.php?product_id=" . $row['product_id'] . "'>Update</a></td>";
// 		echo "<td><a href='soft_delete.php?product_id=" . $row['product_id'] . "'>SoftDelete</a></td>";
// 		echo "<td><a href='delete.php?product_id=" . $row['product_id'] . "'>Permanent Delete!!!</a></td>";
// 		echo "</tr>";
// 	}
// }
// echo "</table>";


// //2 JOIN UNITS TABLE

// $q = "SELECT * FROM products p 
// 		JOIN units ON products.unit_id = units.unit_id 
// 		WHERE products.date_deleted IS NULL";

// $result = mysqli_query($conn, $q);

// echo "<table border=1>";

// if (mysqli_num_rows($result) > 0) {

// 	while($row = mysqli_fetch_assoc($result)){ 
// 		echo "<tr>";
// 		echo "<td>" . $row['product_id'] . ' </td><td>'.$row['product_name'] . '</td><td>'.$row['unit_name'] . '</td>';
// 		echo "<td><a href='update.php?product_id=" . $row['product_id'] . "'>Update</a></td>";
// 		echo "<td><a href='soft_delete.php?product_id=" . $row['product_id'] . "'>SoftDelete</a></td>";
// 		echo "<td><a href='delete.php?product_id=" . $row['product_id'] . "'>Permanent Delete!!!</a></td>";
// 		echo "</tr>";
// 	}
// }
// echo "</table>";

//3 JOIN UNITS PRODUCTS DESCRIPTION
//inner join display only records that have a mathch in both tables

// $q = "SELECT * FROM products p 
// 		JOIN units u ON p.unit_id = u.unit_id 
// 		JOIN product_description pd ON p.product_id = pd.product_id 
// 		WHERE p.date_deleted IS NULL";

// $result = mysqli_query($conn, $q);

// echo "<table border=1>";

// if (mysqli_num_rows($result) > 0) {

// 	while($row = mysqli_fetch_assoc($result)){ 
// 		echo "<tr>";
// 		echo "<td>" . $row['product_id'] . ' </td><td>'.$row['product_name'] . '</td><td>'.$row['unit_name'] . '</td><td>'.$row['product_description'] . '</td>';
// 		echo "<td><a href='update.php?product_id=" . $row['product_id'] . "'>Update</a></td>";
// 		echo "<td><a href='soft_delete.php?product_id=" . $row['product_id'] . "'>SoftDelete</a></td>";
// 		echo "<td><a href='delete.php?product_id=" . $row['product_id'] . "'>Permanent Delete!!!</a></td>";
// 		echo "</tr>";
// 	}
// }
// echo "</table>";

// //4 JOIN UNITS PRODUCTS DESCRIPTION
// //left join displays all records no matter are there mathes in both tables

// $q = "SELECT * FROM products p 
// 		JOIN units u ON p.unit_id = u.unit_id 
// 		LEFT JOIN product_description pd ON p.product_id = pd.product_id 
// 		WHERE p.date_deleted IS NULL";

// $result = mysqli_query($conn, $q);

// echo "<table border=1>";

// if (mysqli_num_rows($result) > 0) {

// 	while($row = mysqli_fetch_assoc($result)){ 
// 		echo "<tr>";
// 		echo "<td>" . $row['product_id'] . ' </td><td>'.$row['product_name'] . '</td><td>'.$row['unit_name'] . '</td><td>'.$row['product_description'] . '</td>';
// 		echo "<td><a href='update.php?product_id=" . $row['product_id'] . "'>Update</a></td>";
// 		echo "<td><a href='soft_delete.php?product_id=" . $row['product_id'] . "'>SoftDelete</a></td>";
// 		echo "<td><a href='delete.php?product_id=" . $row['product_id'] . "'>Permanent Delete!!!</a></td>";
// 		echo "</tr>";
// 	}
// }
// echo "</table>";

// 5 JOIN UNITS PRODUCTS DESCRIPTION
// left join displays all records no matter are there mathes in both tables
// PLUS IMAGES

$q = "SELECT p.product_id, p.product_name, u.unit_name, pd.product_description, pd.product_image
		FROM products p 
		JOIN units u ON p.unit_id = u.unit_id 
		LEFT JOIN product_description pd ON p.product_id = pd.product_id 
		WHERE p.date_deleted IS NULL";

$result = mysqli_query($conn, $q);

echo "<table border=1>";

if (mysqli_num_rows($result) > 0) {

	while($row = mysqli_fetch_assoc($result)){ 
		echo "<tr>";
		echo 	"<td>" . $row['product_id'] . ' </td>
				<td>'.$row['product_name'] . '</td>
				<td>'.$row['unit_name'] . '</td>
				<td class="description">'.$row['product_description'] . '</td>
				<td><img src="img/'. $row['product_image'] .'" alt=""></td>';
		echo "<td><a href='update.php?product_id=" . $row['product_id'] . "'>Update</a></td>";
		echo "<td><a href='soft_delete.php?product_id=" . $row['product_id'] . "'>SoftDelete</a></td>";
		echo "<td><a href='delete.php?product_id=" . $row['product_id'] . "'>Permanent Delete!!!</a></td>";
		echo "</tr>";
	}
}
echo "</table>";


include('includes/footer.php');
