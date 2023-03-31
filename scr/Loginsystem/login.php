<?php 
 require_once("../Loginsystem/Configuration.php");

    function login($user_username,$password_user){
     
     $com = getConnector();
    $stmt = $com->prepare("SELECT user_id,user_name,user_username,password_user
     from User where user_username =:user_username");
    $stmt->bindParam(":user_username",$user_username);

    $stmt->execute();
    $userda = $stmt->fetchAll();

   
   
    
    $user_username1= $userda[0]['user_username'];
    $pass =          $userda[0]['password_user'];
    
    if($user_username == $user_username1){
        
        if($password_user ==$pass){
            
             echo "sie sind eingeloggt";
              header('Location: ..\ProjektWeb_Sp_Sys_K-che\scr\Hauptseite.html');
            }else{
            echo"Password ist falsch eingetregen";
        }}
        else{
           echo "Username ist falsch eingetragen ";
        }  
    } 
  login($_POST['user_username'],$_POST['password_user']);   
   

?>