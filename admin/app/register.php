<?php
    

    if ( isset($_POST['registre'])){
       
        if(!empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['password2']) && !empty($_POST['name'])){
            
            require_once('config/database.php');

            if($_POST['password'] == $_POST['password2'])
            {
                $email = $_POST['email'];
                $password = $_POST['password'];
                $name = $_POST['name'];
                 
                $req = $db->prepare('INSERT INTO users(email_users,password_users,fullName_users) VALUES(?,?,?)');
                $req->execute(array($email,$password,$name));
    
                header('location:index.php');
                
                echo '<script type ="text/JavaScript">';  
                echo 'alert("Success")';  
                echo '</script>'; 
            }
            else{
                echo '<script type ="text/JavaScript">';  
                echo 'alert("the passwords are different")';  
                echo '</script>';
            }
            
        }
    }
  
?>