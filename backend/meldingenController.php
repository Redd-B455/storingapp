<?php
error_reporting(E_ALL);
//Variabelen vullen
$attractie = $_POST['attractie'];
$capaciteit = $_POST['capaciteit']; 
$melder = $_POST['melder'];

echo $attractie . " - " . $capaciteit . " / " . $melder;

//1. Verbinding
require_once 'conn.php';

$query = "INSERT INTO meldingen (attractie, capaciteit, melder) VALUES(:attractie, :capaciteit, :melder)"; //2. Query

$statement = $conn->prepare($query); //3. Prepare

$statement->execute([
    ":attractie" => $attractie,
    ":capaciteit" => $capaciteit,
    ":melder" => $melder
]); //4. Execute
$statement->debugDumpParams();
?>