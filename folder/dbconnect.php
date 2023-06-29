<?php


ini_set("display_errors", 1);

// database connect
$dbhost = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "hmmdb";

try {

    $conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbusername, $dbpassword);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);






} catch (PDOException $e) {
    echo "Error Found : " . $e->getMessage();
}

?>