<?php
$hostname = "sql2.njit.edu";
$username = "ecm6";
$password = "5fcQFK7eV";
try 
{
    $conn = new PDO("mysql:host=$hostname;dbname=accounts", $username, $password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
}
catch(PDOException $e)
{
	$error=$e->getMessage();
	echo "500 Internal Server Error\n\n"."There was a SQL error:\n\n. Connection failed: " . $error;
}
// Runs SQL query and returns results (if valid)
$query = "select * from ecm6.accounts where id<6";
function runQuery($query) {
	global $conn;
    try {
		$q = $conn->prepare($query);
		$q->bindValue(':id', $id);
		$q->execute();
		$results = $q->fetchAll();
		$q->closeCursor();
		return $results;	
	} catch (PDOException $e) {
		echo "500 Internal Server Error\n\n"."There was an SQL error:\n\n. Connection failed: " . $error;
	}	  
}
function http_error($message) 
{
	header("Content-type: text/plain");
	die($message);
}
?>
