<?php include("nav.php"); ?>  


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>coustomers list</title>
	<link rel="stylesheet" href="coustomers.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
<body>
      
<div id="coustomer" class="container  mt-5">
<?php
		 $servername = "localhost";
		 $username = "root";
		 $password = "";
		 $dbname = "banking system";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
		}

		$sql = "SELECT * FROM coustomers";
			$result = $conn->query($sql);

			echo "<table  class='table table-striped table-dark '>";
				echo "<tr>";
					//Table header
					echo "<th scope='col'>"; echo "SR.NO";	echo "</th>";
					echo "<th scope='col'>"; echo "Name";  echo "</th>";
					echo "<th scope='col'>"; echo "Email";  echo "</th>";
					echo "<th scope='col'>"; echo "Balance";  echo "</th>";
					
				echo "</tr>";	

				
				if ($result->num_rows > 0) {
					// output data of each row
					while($row = $result->fetch_assoc()) {
						echo "<tr>";
						echo "<td>"; echo $row['SR.NO']; echo "</td>";
						echo "<td>"; echo $row['Name']; echo "</td>";
						echo "<td>"; echo $row['Email']; echo "</td>";
						echo "<td>"; echo $row['Balance']; echo "</td>";
					

					echo "</tr>";
					}
				} else {
					echo "0 results";
					}
			echo "</table>";


		$conn->close(); 
?> 
</div>

	<footer>
		<div class="card text-center">
		
			<div class="card-body">
				<h5 class="card-title">&#169;2021</h5>
				<p class="card-text">Created By Hukumchand Narwre</p>
				<a href="coustomerprofile.php" class="btn btn-primary">see your profile</a>
			</div>
		
		</div>
	</footer>




<!-- INSERT INTO `coustomers` (`SR.NO`, `Name`, `Email`, `Balance`) VALUES ('1', 'Hukum Narwre', 'hukum@gmail.com', '11000'); -->
      
    
</body>
</html>