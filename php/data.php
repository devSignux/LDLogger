<?php
// filename of sqlite file to store data
$dbFilename = "sensors.sqlite";

// name of the sqlite table into the data are written
$tableName = "Sensors";

// read post-content
$post = file_get_contents('php://input');

try {
	// create sqlite database
	$db = new PDO('sqlite:'.$dbFilename);
	// create table if not exists
	$db->exec("CREATE TABLE if not exists ".$tableName." (timestamp NUMERIC NOT NULL, ip TEXT NOT NULL, data JSON, PRIMARY KEY(timestamp, ip))");
	// read remote ip addr
	$ip = getenv('REMOTE_ADDR');
	// insert data => timestamp, ip, json data
	$query = "INSERT INTO ".$tableName." VALUES(".time().",'".$ip."','".$post."')";
	// run query
	$db->query($query);
} catch(PDOException $e) {
	print 'Exception; '.$e->getMEssage();
}
?>
