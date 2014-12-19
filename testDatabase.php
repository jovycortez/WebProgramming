
<?php
	//These are all the step of 
	//step 1       
							
	$dbconn = mysqli_connect(
	/*Apache Server Name:*/              "localhost",
	/*user name: Admin Name*/            "root",
	/*password: There 
	is no password yet*/                 "",
	/*MySql: database name*/             "test");
	if(mysqli_connect_errno()){
	die("My Database connection failed: ".
  	mysqli_connect_error()." (".
	mysqli_connect_errno().")");
	exit();
	}
	?>
	
	<?php
	//step 2 data base query
	$query = "SELECT * ";
	$query .= "FROM testPerson ";
	echo $query;
	//This shows me my mistakes
	$result = mysqli_query($dbconn,$query);
	if(!$result){
		die("<br />Data failed");
	}
	?>
<!DOCTYPE html> 
<html lang = "en">
	<head >
		<!--File name: createDataBase.php -->
		<title>Main Database Page</title>
		<meta charset="UTF-8">
		<script type="text/javascript"></script>
	</head>
	<body>
		<div>
			<ul>
		<?php
		//step 3 use data if there is data
			while($row = mysqli_fetch_assoc($result)){
			?>
				<li><?php echo $row["firstName"] . "<br />"; ?></li>
			<?php
			}
			?>
			</ul>
		</div>
		
		<?php
		//step 4 free up space
		mysqli_free_result($result)
		?>
		
	</body>
</html>
	
<?php
	//step 5
	mysqli_close($dbconn);
?>