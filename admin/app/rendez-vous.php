<?php
if($_GET['page'] == 'rendez-vous')
{
    if(isset($_POST['enregistrer'])){
        if(!empty($_POST['date']) && !empty($_POST['nom']) && !empty($_POST['prenom'])){
        
            require_once('config/database.php');
                    
            $date = $_POST['date'];
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];

            $id = $db->prepare('SELECT * FROM patient WHERE nom_patient=? AND prenom_patient=?');
            $id->execute(array($nom,$prenom));
            $nbLignes = $id->rowCount();
            if($nbLignes != 0){ 
                $reponses=$id->fetch(PDO::FETCH_OBJ);
                            
                $req = $db->prepare('INSERT INTO rendezvous(date1,dossier_patient) VALUES(?,?)');
                $req->execute(array($date,$reponses->dossier_patient));
                   
                $alert = array('alert-success','Success'); 
            }
            else{
                echo '<script type ="text/JavaScript">';  
                echo 'alert("Ce patient n\'existe pas!")';  
                echo '</script>';
            }
        
        }else{
            echo '<script type ="text/JavaScript">';  
            echo 'alert("Il faut remplir tous les champs!")';  
            echo '</script>';

            header('location:admin.php?page=rendez-vous');
        }
        
    }

    //afficher
    require_once('config/database.php');
    $allPatient = $db->prepare('SELECT r.id,r.date1,p.dossier_patient,p.nom_patient,p.prenom_patient,p.cin_patient,p.adresse_patient,p.tel_patient,p.couverture_patient FROM rendezvous r,patient p WHERE r.dossier_patient=p.dossier_patient AND r.date1=DATE( NOW() )');
    $allPatient->execute();



    //supprimer
    if(isset($_GET['action'])){
        
        if($_GET['action']=='delete'){
            $deletePatient = $db->prepare("DELETE FROM rendezvous WHERE id=?");
            $deletePatient->execute(array($_GET['id']));

            header('location:admin.php?page=rendez-vous');
        }
      
    }  

    //rechercher
    if(isset($_POST['rechercher'])){
        if(!empty($_POST['nom']) && !empty($_POST['prenom'])){
        
            require_once('config/database.php');
                    
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
                         
            $dossierPatient = $db->prepare('SELECT r.id,r.date1,p.dossier_patient,p.nom_patient,p.prenom_patient,p.cin_patient,p.adresse_patient,p.tel_patient,p.couverture_patient FROM rendezvous r,patient p WHERE  r.dossier_patient=p.dossier_patient AND p.nom_patient=? AND p.prenom_patient=?');
            $dossierPatient->execute(array($nom,$prenom));
            
           

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
                         
            $datePatient = $db->prepare('SELECT r.id,r.date1,p.dossier_patient,p.nom_patient,p.prenom_patient,p.cin_patient,p.adresse_patient,p.tel_patient,p.couverture_patient FROM rendezvous r,patient p WHERE r.dossier_patient=p.dossier_patient AND r.date1=? ');
            $datePatient->execute(array($date));


        }else{
            header('location:admin.php?page=rendez-vous');
        }  
    }

    
    
}else{
    getTemplate('error_404');
}
?>