<?php 

require_once("../scr/Configuration.php");
function Spesien_tabelle()
{
    $con = getConnector();
     $sql = "CREATE TABLE User(
       user_id INT AUTO_INCREMENT PRIMARY KEY,
       user_name  VARCHAR(255) NOT NULL,
       user_username  VARCHAR(255) NOT NULL,
       Password_user VARCHAR(255) NOT NULL
     );";
     if($con->exec($sql)){
        echo "table wird nicht erstellt"; 
    }else{
        echo "table wird erfolgreich erstellt";
    }


}
Spesien_tabelle();
?>