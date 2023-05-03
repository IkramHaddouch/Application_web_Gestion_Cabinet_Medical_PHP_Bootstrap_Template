<?php

if($_GET['page']=='permis'){
    //ajouter
    if(isset($_POST['enregistrer'])){
        if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['categorie']) && !empty($_POST['dateE']) && !empty($_POST['ogl']) && !empty($_POST['odl']) && !empty($_POST['ogp']) && !empty($_POST['odp'])){
            require_once('config/database.php');
                    
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $cin = $_POST['cin'];
            $dateN = $_POST['dateN'];
            $adresse = $_POST['adresse'];
            $tel = $_POST['tel'];
            $categorie = $_POST['categorie'];
            $dateE = $_POST['dateE'];
            $poids = $_POST['poids'];
            $taille = $_POST['taille'];
            $ogl = $_POST['ogl'];
            $odl = $_POST['odl'];
            $ogp = $_POST['ogp'];
            $odp = $_POST['odp'];
                         
            $req = $db->prepare('INSERT INTO permis(nom_permis,prenom_permis,cin_permis,date1,adresse_permis,tel_permis,categorie_permis,date2,poids,taille,og_loin,od_loin,og_pres,od_pres) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?)');
            $req->execute(array($nom,$prenom,$cin,$dateN,$adresse,$tel,$categorie,$dateE,$poids,$taille,$ogl,$odl,$ogp,$odp));
            
                        
            $alert = array('alert-success','Success'); 
        }else{
            $alert = array('alert-error','Il faut remplir les champs obligatoires: nom, prenom, categorie, date d\'examen, OD, OG!');

        }

    }

    //afficher
    require_once('config/database.php');
    $allPatient = $db->prepare('SELECT * FROM permis');
    $allPatient->execute();
 
    //supprimer
    if(isset($_GET['action'])){
        if($_GET['action']=='delete'){
            $deletePermis = $db->prepare("DELETE FROM permis WHERE dossier_permis=?");
            $deletePermis->execute(array($_GET['dossier_permis']));
 
            header('location:admin.php?page=permis');
        }
    }


     //rechercher
     if(isset($_POST['rechercher'])){
        if(!empty($_POST['nom']) && !empty($_POST['prenom'])){
        
            require_once('config/database.php');
                    
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
                         
            $dossierPatient = $db->prepare('SELECT * FROM permis WHERE nom_permis=? AND prenom_permis=?');
            $dossierPatient->execute(array($nom,$prenom));
            
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
                             
                $datePatient = $db->prepare('SELECT * FROM permis WHERE date2=?');
                $datePatient->execute(array($date));
    
    
            }else{
                header('location:admin.php?page=permis');
            }  
        }
    
 

}else{
    getTemplate('error_404');
}

?>