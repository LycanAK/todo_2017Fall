<?php
require 'database.php' ;
$sql = "select * from ecm6.accounts where id<6";
$results = runQuery($sql);
if(count($results) > 0)
{
	echo "<table border=\"1\"><tr><th>ID</th><th>Email</th><th>First Name</th><th>Last Name</th><th>Phone Number</th><th>Birthday</th><th>Gender</th><th>Password</th></tr>";
	foreach ($results as $row) {
		echo "<tr><td>".$row["id"]."</td><td>".$row["email"]."</td><td>".$row["fname"]."<tr><td>".$row["lname"]."<tr><td>".$row["phone"]."<tr><td>".$row["birthday"]."<tr><td>".$row["gender"]."</td><td>".$row["password"]."</td></tr>";
	}
	
}else{
    echo '0 results';
}
?>
//Perform a SELECT statement to search for record whose user ID is less than 6 in table
“accounts”.