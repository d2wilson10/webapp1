<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>PHPSection</title>
</head>
<body style="margin: 50px;">

	<h1>Songs</h1>
	<br>
	
<?php
$con=mysqli_connect("localhost","root","root","music");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM songs");

echo "<table class='table table-striped'>
		<thead>
			<tr>
				<th scope= 'col'>Song Name</th>
				<th scope= 'col'>Artist</th>
				<th scope= 'col'>Album Name</th>
				<th scope= 'col'>Rating</th>
				<th scope= 'col'>Action</th>
			</tr>
		</thead>";

while($row = mysqli_fetch_array($result))
{
	echo "<tbody>
			<tr>
				<td>" . $row['song_name'] . "</td>
				<td>" . $row['artist'] . "</td>
				<td>" . $row['album_name'] . "</td>
				<td>" . $row['rating'] . "</td>
				<td>
					<a class='btn btn-primary btn-sm' href='update'>Update</a>
					<a class='btn btn-danger btn-sm' href='delete'>Delete</a>
				</td>
			</tr>
		</tbody>";
}

echo "</table>";

mysqli_close($con);
?>
</tbody>
</body>
<style>
	body {
		background: #0D1B2A;
		font-family: Lato;
		font-weight: 700;
		font-style: white;
	}
	h1, h2, h3, h4, p, a, th, td, tr{
		color: #fff;
	}
	td, tr, th, thead, tbody{
		border-top: 0px;
		border-bottom: 0px;
	}

	.btn-primary{
		background-color: #415A77;
		border: none;
	}

	.btn-danger{
		background-color: #f35361;
		border: none;
	}

</style>
</html>
