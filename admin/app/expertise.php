<?php

if($_GET['page']=='expertise'){
    //ajouter
    if(isset($_POST['enregistrer'])){
        if(!empty($_POST['tribunal']) && !empty($_POST['type']) && !empty($_POST['victime']) && !empty($_POST['cin']) && !empty($_POST['tel_expertise']) && !empty($_POST['avocat']) && !empty($_POST['juge']) && !empty($_POST['dateReception']) && !empty($_POST['dateRemise']) && !empty($_POST['dateAudience'])){
            require_once('config/database.php');
                    
            $tribunal = $_POST['tribunal'];
            $type = $_POST['type'];
            $victime = $_POST['victime'];
            $cin = $_POST['cin'];
            $tel_expertise = $_POST['tel_expertise'];
            $avocat = $_POST['avocat'];
            $juge = $_POST['juge'];
            $dateReception = $_POST['dateReception'];
            $dateRemise = $_POST['dateRemise'];
            $dateAudience = $_POST['dateAudience'];
                         
            $req = $db->prepare('INSERT INTO expertise(tribunal,type_cas,victime,cin_expertise,tel_expertise,avocat,juge,date1,date2,date3) VALUES(?,?,?,?,?,?,?,?,?,?)');
            $req->execute(array($tribunal,$type,$victime,$cin,$tel_expertise,$avocat,$juge,$dateReception,$dateRemise,$dateAudience));
            
                        
            $alert = array('alert-success','Success'); 
        }else{
            $alert = array('alert-error','Il faut remplir les champs obligatoires: tribunal, victime, avocat!');

        }

    }

    //afficher
    require_once('config/database.php');
    $allPatient = $db->prepare('SELECT * FROM expertise');
    $allPatient->execute();

    //supprimer
    if(isset($_GET['action'])){
        if($_GET['action']=='delete'){
            $deleteExpertise = $db->prepare("DELETE FROM expertise WHERE dossier_expertise=?");
            $deleteExpertise->execute(array($_GET['dossier_expertise']));

            header('location:admin.php?page=expertise');

        }
    }


    //rechercher
    if(isset($_POST['rechercher'])){
        if(!empty($_POST['victime'])){
            
            require_once('config/database.php');
                     
            $victime = $_POST['victime'];
            $table= explode(" ",$victime);
            $victime1 = $table[0].' '.$table[1];
            $victime2 = $table[1].' '.$table[0];
                             
            $dossierPatient = $db->prepare('SELECT * FROM expertise WHERE victime=? OR victime=?');
            $dossierPatient->execute(array($victime1,$victime2));
                
            $nbLignes = $dossierPatient->rowCount();
            if($nbLignes != 0){
                $reponses=$dossierPatient->fetch(PDO::FETCH_OBJ);
            }else{
                $alert = array('alert-error','Ce patient n\'existe pas'); 
            }
    
        }else{
            echo '<script type ="text/JavaScript">';  
            echo 'alert("Il faut remplir tous les champs!")';  
            echo '</script>';
        }  
    }

    
        //recherche avec la date
        if(isset($_POST['search'])){
            if(!empty($_POST['date'])){
            
                require_once('config/database.php');
                        
                $date = $_POST['date'];
                             
                $datePatient = $db->prepare('SELECT * FROM expertise WHERE date1=?');
                $datePatient->execute(array($date));
    
    
            }else{
                header('location:admin.php?page=expertise');
            }  
        }


}else{
    getTemplate('error_404');
}

?>