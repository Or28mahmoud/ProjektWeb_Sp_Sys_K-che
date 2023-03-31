<?php
$hostname = "mysql:host=localhost:3306;dbname=mysql3;";
$username = "root";
$password = "root";

$com = new PDO($hostname,$username,$password);

if (!$com) {

    echo "Connection failed";
}

function getConnector() {
    // normalerweise in Config.php oder ähnlicher name
    $hostname = "mysql:host=localhost:3306;dbname=mysql3;";
    $username = "root";
    $password = "root";


    $newConnection = new PDO($hostname,$username,$password);
    if ($newConnection != null)
        return $newConnection;
    
    die("Verbindung konnte nicht aufgebauet werden $newConnection");
}
?>