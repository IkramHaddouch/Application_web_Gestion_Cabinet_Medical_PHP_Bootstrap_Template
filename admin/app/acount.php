<?php

if(isset($_GET['action'])){
    if($_GET['action']=='logout'){
        session_start();
        session_destroy();

        header('location:index.php');
    }elseif($_GET['action']=='updateAcount'){
        if(isset($_POST['modifier'])){
            extract($_POST);
            if(!empty($name) && !empty($email) && !empty($OldPassword) && !empty($NewPassword) && !empty($ConfirmNewPassword) ){
                if($NewPassword==$ConfirmNewPassword){
                    require_once('config/database.php');

                    $req = $db->prepare("SELECT * FROM users WHERE email_users=? AND password_users=?");
                    $req->execute(array($email,$OldPassword));
        
                    $reponses = $req->fetch(PDO::FETCH_OBJ);
        
                    if(isset($reponses->email_users) && isset($reponses->password_users)){
                        $updateAcount = $db->prepare("UPDATE users SET password_users=?,fullName_users=? WHERE email_users=?");
                        $updateAcount->execute(array($NewPassword,$name,$email));

                        header('location:admin.php?page=acount&action=logout');
                    }else{
                        $alert = array('alert-error','Email ou ancien mot de passe est incorrect!');
                    }
                }else{
                    $alert = array('alert-error','Le mot de passe de confirmation doit être identique au nouveau mot de passe!');
                }
            }else{
                $alert = array('alert-error','Attention! Aucun champs ne doit être vide');
            }
        }
    }
    else{
        getTemplate('error_404');
    }
}else{
    getTemplate('error_404');
}

?>