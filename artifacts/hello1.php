<html>
<body>
	
	<?php
	echo "php starting <br>";
	
	$dbServerName="localhost";
	$username="root";
	$password="passw0rd";
	$dbname="testdb";

	$conn=mysqli_connect($dbServerName,$username,$password,$dbname);

	
	
	$sql="select * from mytable;";
	
	
	echo $sql . "<br>";
	
	$result = mysqli_query($conn, $sql);
	$resultCount = mysqli_num_rows($result);
	
	echo "result count " . $resultCount . "<br>";
	
	if($resultCount>0){
		
		while($row = mysqli_fetch_assoc($result)){
	
		echo $row["id"]."  ". $row["name"] . "<br>";
	
	}
		
	}
	
	?>

</body>

</html>
