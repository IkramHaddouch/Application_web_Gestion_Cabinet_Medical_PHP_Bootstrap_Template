<?php
    

    if ( isset($_POST['login']) && isset($_POST['email']) && isset($_POST['pass'])){

        extract($_POST);

        if(!empty($email) && !empty($pass)){
            
            require_once('config/database.php');

            $req = $db->prepare("SELECT * FROM users WHERE email_users=? AND password_users=?");
            $req->execute(array($email,$pass));

            $reponses = $req->fetch(PDO::FETCH_OBJ);

            if(isset($reponses->email_users) && isset($reponses->password_users)){

                session_start();

                $_SESSION['admin'] = $email;
                
                header('location:admin.php?page=accueil');

            }
            else{
                $alert = array('alert-error',"Email or password incorrect");
            }
           
        }
        
    }
    
  
?>