<?php

if($_GET['page']=='modify'){

    //supprimer
    if(isset($_GET['action'])){
        if($_GET['action']=='edit_expertise'){

            require_once('config/database.php');
            $allPatient = $db->prepare('SELECT * FROM expertise WHERE dossier_expertise=?');
            $allPatient->execute(array($_GET['dossier_expertise']));
            $reponses=$allPatient->fetch(PDO::FETCH_OBJ);

            if(isset($_POST['modifier'])){
                if(!empty($_POST['Newtribunal']) && !empty($_POST['Newvictime']) && !empty($_POST['Newavocat'])){
                    require_once('config/database.php');
                            
                    $tribunal = $_POST['Newtribunal'];
                    $type = $_POST['Newtype'];
                    $victime = $_POST['Newvictime'];
                    $cin = $_POST['Newcin'];
                    $tel = $_POST['Newtel'];
                    $avocat = $_POST['Newavocat'];
                    $juge = $_POST['Newjuge'];
                    $dateReception = $_POST['NewdateReception'];
                    $dateRemise = $_POST['NewdateRemise'];
                    $dateAudience = $_POST['NewdateAudience'];
                                 
                    $req = $db->prepare('UPDATE expertise SET tribunal=?,type_cas=?,victime=?,cin_expertise=?,tel_expertise=?,avocat=?,juge=?,date1=?,date2=?,date3=? WHERE dossier_expertise=?');
                    $req->execute(array($tribunal,$type,$victime,$cin,$tel,$avocat,$juge,$dateReception,$dateRemise,$dateAudience,$_GET['dossier_expertise']));

                    $alert = array('alert-success','Success');
                }else{
                    echo '<script type ="text/JavaScript">';  
                    echo 'alert("Il faut remplir les champs obligatoires: tribunal, victime, avocat!")';  
                    echo '</script>';
        
                }
        
            }elseif(isset($_POST['fermer'])){
                header('location:admin.php?page=expertise');
            }


        }

        if($_GET['action']=='edit_patient'){

            require_once('config/database.php');
            $allPatient = $db->prepare('SELECT * FROM patient WHERE dossier_patient=?');
            $allPatient->execute(array($_GET['dossier_patient']));
            $reponses=$allPatient->fetch(PDO::FETCH_OBJ);

            if(isset($_POST['modifier'])){
                if(!empty($_POST['Newnom']) && !empty($_POST['Newprenom'])){
        
                    require_once('config/database.php');
                            
                    $nom = $_POST['Newnom'];
                    $prenom = $_POST['Newprenom'];
                    $cin = $_POST['Newcin'];
                    $adresse = $_POST['Newadresse'];
                    $tel = $_POST['Newtel'];
                    $dateN = $_POST['NewdateN'];
                    $couverture = $_POST['Newcouverture'];
                    $infos = $_POST['Newinfos'];
                                 
                    $req = $db->prepare('UPDATE patient SET nom_patient=?,prenom_patient=?,cin_patient=?,adresse_patient=?,tel_patient=?,date_naissance=?,couverture_patient=?,infos=? WHERE dossier_patient=?');
                    $req->execute(array($nom,$prenom,$cin,$adresse,$tel,$dateN,$couverture,$infos,$_GET['dossier_patient']));
                    
                                
                    $alert = array('alert-success','Success'); 
                
                }else{
                    echo '<script type ="text/JavaScript">';  
                    echo 'alert("Il faut remplir les champs obligatoires: nom, prenom!")';  
                    echo '</script>';
        
                }
        
            }elseif(isset($_POST['fermer'])){
                header('location:admin.php?page=patient');
            }
        }


        if($_GET['action']=='edit_permis'){

            require_once('config/database.php');
            $allPatient = $db->prepare('SELECT * FROM permis WHERE dossier_permis=?');
            $allPatient->execute(array($_GET['dossier_permis']));
            $reponses=$allPatient->fetch(PDO::FETCH_OBJ);

            if(isset($_POST['modifier'])){
                if(!empty($_POST['Newnom']) && !empty($_POST['Newprenom']) && !empty($_POST['Newcategorie']) && !empty($_POST['NewdateE']) && !empty($_POST['Newogl']) && !empty($_POST['Newodl']) && !empty($_POST['Newogp']) && !empty($_POST['Newodp'])){
                    require_once('config/database.php');
                            
                    $nom = $_POST['Newnom'];
                    $prenom = $_POST['Newprenom'];
                    $cin = $_POST['Newcin'];
                    $dateN = $_POST['NewdateN'];
                    $adresse = $_POST['Newadresse'];
                    $tel = $_POST['Newtel'];
                    $categorie = $_POST['Newcategorie'];
                    $dateE = $_POST['NewdateE'];
                    $poids = $_POST['Newpoids'];
                    $taille = $_POST['Newtaille'];
                    $ogl = $_POST['Newogl'];
                    $odl = $_POST['Newodl'];
                    $ogp = $_POST['Newogp'];
                    $odp = $_POST['Newodp'];
                                 
                    $req = $db->prepare('UPDATE permis SET nom_permis=?,prenom_permis=?,cin_permis=?,date1=?,adresse_permis=?,tel_permis=?,categorie_permis=?,date2=?,poids=?,taille=?,og_loin=?,od_loin=?,og_pres=?,od_pres=? WHERE dossier_permis=?');
                    $req->execute(array($nom,$prenom,$cin,$dateN,$adresse,$tel,$categorie,$dateE,$poids,$taille,$ogl,$odl,$ogp,$odp,$_GET['dossier_permis']));
                    
                                
                    $alert = array('alert-success','Success'); 
                }else{
                    echo '<script type ="text/JavaScript">';  
                    echo 'alert("Il faut remplir les champs obligatoires: nom, prenom, categorie, date d\'examen, OD, OG!")';  
                    echo '</script>';
                }
        
                
            }elseif(isset($_POST['fermer'])){
                header('location:admin.php?page=permis');
            }


        }

        if($_GET['action']=='edit_rendez-vous'){

            require_once('config/database.php');
            $allPatient = $db->prepare('SELECT * FROM rendezvous WHERE id=?');
            $allPatient->execute(array($_GET['id']));
            $reponses=$allPatient->fetch(PDO::FETCH_OBJ);

            if(isset($_POST['modifier'])){
                if(!empty($_POST['Newdate']) && !empty($_POST['Newdossier'])){
                    require_once('config/database.php');
                            
                    $date = $_POST['Newdate'];
                    $dossier = $_POST['Newdossier'];
                                 
                    $req = $db->prepare('UPDATE rendezvous SET date1=?,dossier_patient=? WHERE id=?');
                    $req->execute(array($date,$dossier,$_GET['id']));
                    
                                
                    $alert = array('alert-success','Success'); 
                }else{
                    echo '<script type ="text/JavaScript">';  
                    echo 'alert("Il faut remplir tous les champs!")';  
                    echo '</script>';
                }
        
                
            }elseif(isset($_POST['fermer'])){
                header('location:admin.php?page=rendez-vous');
            }


        }

        if($_GET['action']=='edit_visite'){

            require_once('config/database.php');
            $allPatient = $db->prepare('SELECT * FROM visite WHERE id=?');
            $allPatient->execute(array($_GET['id']));
            $reponses=$allPatient->fetch(PDO::FETCH_OBJ);

            if(isset($_POST['modifier'])){
                if(!empty($_POST['Newdate']) && !empty($_POST['Newdossier']) && !empty($_POST['Newmedicament']) && !empty($_POST['Newquantite']) && !empty($_POST['Newtype']) && !empty($_POST['Newprix'])){
                    require_once('config/database.php');
                            
                    $date = $_POST['Newdate'];
                    $dossier = $_POST['Newdossier'];
                    $medicament = $_POST['Newmedicament'];
                    $quantite = $_POST['Newquantite'];
                    $type = $_POST['Newtype'];
                    $prix = $_POST['Newprix'];
                                 
                    $req = $db->prepare('UPDATE visite SET date1=?,dossier_patient=?,medicament=?,quantite=?,type1=?,prix=? WHERE id=?');
                    $req->execute(array($date,$dossier,$medicament,$quantite,$type,$prix,$_GET['id']));
                    
                                
                    $alert = array('alert-success','Success'); 
                }else{
                    echo '<script type ="text/JavaScript">';  
                    echo 'alert("Il faut remplir tous les champs!")';  
                    echo '</script>';
                }
        
                
            }elseif(isset($_POST['fermer'])){
                header('location:admin.php?page=visite');
            }


        }
    }


    


}else{
    getTemplate('error_404');
}

?>
