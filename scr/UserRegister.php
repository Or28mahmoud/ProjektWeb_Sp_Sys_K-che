<?php 

 require_once('../scr/Configuration.php');

 function datenTabeleSpeichern($user_id,$user_name,$user_username,$password_user){
   $com = getConnector();
    $stmt = $com->prepare("SELECT user_id,user_name,user_username,password_user from User where user_username = :user_username");
    $stmt->bindParam(":user_username",$user_username);

    $stmt->execute();
    $userda = $stmt->fetchColumn();
    
     if (!$userda) {

      $sql = "INSERT INTO User (user_id,user_name,user_username,password_user)
                  VALUES (:user_id,:user_name, :user_username,:password_user)";
        //  $input = array(':admin_username' => $admin_username, ':admin_email' => $admin_email, ':admin_passuser' => $admin_passuser,'admin_telefon'=> $admin_telefon, ':admin_salz' => $admin_salz);
                  // use exec() because no results are returned
          $stmt = $com->prepare($sql);
          $stmt->bindParam(":user_id",$user_id);
          $stmt->bindParam(":user_name",$user_name);
          $stmt->bindParam(":user_username",$user_username);
          $stmt->bindParam(":password_user",$password_user);
         
          $stmt->execute();    
          require("login.html"); 
     }else{
         echo " Admin ist schon existiert !";
     }
}
datenTabeleSpeichern($_POST['user_id'],$_POST['user_name'],$_POST['user_username'],$_POST['user_password']);


?>