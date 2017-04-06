<?php

	if (isset($_POST['user_id'])) 
	{
	    $user_id = $_POST['user_id'];
	} 
	else 
	{
	    $user_id = 29;
	}

	$servername = "139.59.103.71";
    $username = "kewgar";
    $password = "";
    $dbname = "testweka";
    $conn = new mysqli($servername, $username, $password, $dbname);


$databasehost = "139.59.103.71"; 
$databasename = "testweka"; 
$databasetable = "symptom"; 
$databaseusername="kewgar"; 
$databasepassword = ""; 
$fieldseparator = ","; 
$lineseparator = "\n";
$csvfile = "dataset/".$user_id."/sall.csv";



if(!file_exists($csvfile)) {
    die("File not found. Make sure you specified the correct path.");
}

try {
    $pdo = new PDO("mysql:host=$databasehost;dbname=$databasename", 
        $databaseusername, $databasepassword,
        array(
            PDO::MYSQL_ATTR_LOCAL_INFILE => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        )
    );
} catch (PDOException $e) {
    die("database connection failed: ".$e->getMessage());
}

$affectedRows = $pdo->exec("
    LOAD DATA LOCAL INFILE ".$pdo->quote($csvfile)." INTO TABLE `$databasetable` 
    FIELDS TERMINATED BY ".$pdo->quote($fieldseparator)."
	LINES TERMINATED BY ".$pdo->quote($lineseparator)."
	IGNORE 1 ROWS
	");


echo "Loaded a total of $affectedRows records from this csv file.\n";

?>