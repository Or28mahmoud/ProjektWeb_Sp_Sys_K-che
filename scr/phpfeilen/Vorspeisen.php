<?php 

require_once("../ProjektWeb_Sp_Sys_K-che/Configuration.php");
function Spesien_tabelle()
{
    $con = getConnector();
     $sql = "CREATE TABLE VorSpeisen(
        vor_id INT AUTO_INCREMENT PRIMARY KEY,
        vor_name VARCHAR(255) NOT NULL
     );";
     if($con->exec($sql)){
        echo "table wird nicht erstellt"; 
    }else{
        echo "table wird erfolgreich erstellt";
    }


}
?>