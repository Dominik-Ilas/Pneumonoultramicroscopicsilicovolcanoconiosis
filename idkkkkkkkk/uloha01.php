<!DOCTYPE html>
<html lang="en">
<?php

$servername = "localhost";
$dbname = "nothwind";
$username = "dominko_sk2";
$password = "Dominik123";



$connection = new mysqli($servername, $username, $password, $dbname);

if ($connection->connect_error) {
die("Chyba pripojenie k db: " . $connection->connect_error);
}
?>
<head>
<meta charset="UTF-8">
<link scr="AutoSubmit.js" >
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/light.css">
<script src="https://cdn.jsdelivr.net/gh/tofsjonas/sortable@latest/sortable.min.js"></script>
<link href="https://cdn.jsdelivr.net/gh/tofsjonas/sortable@latest/sortable.min.css" rel="stylesheet" />
</head>
<body>

		<table class="sortable">

<?php

 ?>
 
			<thead>
				<tr>
					<th>ID</th>
					<th>ContactName</th>
					<th>ContactTitle</th>
					<th>Address</th>
					<th>City</th>
					<th>Region</th>
					<th>PostalCode</th>
					<th>Country</th>
					<th>Phone</th>
					<th>Fax</th>
				</tr>
			</thead>
		
		<tbody>
			
			
			<?php
			$query = mysqli_query($connection, "SELECT * FROM customers");

			while($fetch = mysqli_fetch_array($query)){
		
				echo "
			
					<tr>
						<td>" . $fetch["ID"] . "</td>
		   				
						<td>" . $fetch["ConpanyName"] . "</td>  
						<td>" . $fetch["ContactName"] . "</td>
						<td>" . $fetch["ContactTitle"] . "</td>
						<td>" . $fetch["Address"] . "</td>
						<td>" . $fetch["City"] . "</td>
						<td>" . $fetch["Region"] . "</td>
						<td>" . $fetch["PostalCode"] . "</td>
						<td>" . $fetch["Country"] . "</td>
						<td>" . $fetch["Phone"] . "</td>
						<td>" . $fetch["Fax"] . "</td>
					</tr>";
		
			}

			?>
		</tbody>
	</table>






</body>

</html>