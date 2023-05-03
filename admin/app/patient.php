<?php
if($_GET['page'] == 'patient')
{
    if(isset($_POST['enregistrer'])){
        if(!empty($_POST['nom']) && !empty($_POST['prenom'])){
        
            require_once('config/database.php');
                    
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $cin = $_POST['cin'];
            $adresse = $_POST['adresse'];
            $tel = $_POST['tel'];
            $dateN = $_POST['dateN'];
            $couverture = $_POST['couverture'];
            $infos = $_POST['infos'];

                         
            $req = $db->prepare('INSERT INTO patient(nom_patient,prenom_patient,cin_patient,adresse_patient,tel_patient,date_naissance,couverture_patient,date_inscription,infos) VALUES(?,?,?,?,?,?,?,DATE( NOW() ),?)');
            $req->execute(array($nom,$prenom,$cin,$adresse,$tel,$dateN,$couverture,$infos));
            
                        
            $alert = array('alert-success','Success'); 
        
        }else{
            echo '<script type ="text/JavaScript">';  
            echo 'alert("Il faut remplir les champs obligatoires: nom, prenom!")';  
            echo '</script>';

            header('location:admin.php?page=patient');
        }
        
    }

    //afficher
    require_once('config/database.php');
    $allPatient = $db->prepare('SELECT * FROM patient');
    $allPatient->execute();



    //supprimer
    if(isset($_GET['action'])){
        
        if($_GET['action']=='delete'){
            $deletePatient = $db->prepare("DELETE FROM patient WHERE dossier_patient=?");
            $deletePatient->execute(array($_GET['dossier_patient']));

            header('location:admin.php?page=patient');
        
        }
      
    }  

    //rechercher
    if(isset($_POST['rechercher'])){
        if(!empty($_POST['nom']) && !empty($_POST['prenom'])){
        
            require_once('config/database.php');
                    
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
                         
            $dossierPatient = $db->prepare('SELECT * FROM patient WHERE nom_patient=? AND prenom_patient=?');
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
                         
            $datePatient = $db->prepare('SELECT * FROM patient WHERE date_inscription=?');
            $datePatient->execute(array($date));


        }else{
            header('location:admin.php?page=patient');
        }  
    }

    //rapport
    if(isset($_GET['action'])){
        
        if($_GET['action']=='rapport'){
            require_once('config/database.php');

            $req = $db->prepare('SELECT * FROM patient WHERE dossier_patient=?');
            $req->execute(array($_GET['dossier_patient']));
                    
            $nbLignes = $req->rowCount();
            if($nbLignes != 0){
                $reponses=$req->fetch(PDO::FETCH_OBJ);
            }else{
                $alert = array('alert-error','Ce patient n\'existe pas'); 
            }

            $dossier = $reponses->dossier_patient;
            $nom = $reponses->nom_patient;
            $prenom = $reponses->prenom_patient;
            $cin = $reponses->cin_patient;
            $adresse = $reponses->adresse_patient;
            $tel = $reponses->tel_patient;
            $dateN = $reponses->date_naissance;
            $couverture = $reponses->couverture_patient;
            $dateI = $reponses->date_inscription;
            $infos = $reponses->infos;

            $html="<!DOCTYPE html>
            <html>
            <head>
                <meta charset='utf-8'>
                <meta name='viewport' content='width=device-width, initial-scale=1'>
                <title>medical expert report</title>
            </head>
            <body>

            <div style='border: double; padding: 20px;'>
                    <div>
                        <div>
                            <div style='margin-top: 20px; margin-left: 60px ; margin-bottom: 10px;'>
                                <h5 style=' font-family: Geneva; padding:0px; margin:0px;'>Dr.RAHMANI HAMID</h5>
                                <h6 style=' font-family: Geneva; padding:0px; margin:0px;'>Psychiatre-Psychothérapeute</h6>
                            </div>
                            <div style='margin-left: 30px ; margin-bottom: 60px;'>
                                <h6 style=' font-family: Geneva; padding:0px; margin:0px;'>6, Angle Rue Kenitra, Av.Hassan II - 1èr Etage, Meknès</h6>
                                <h6 style=' font-family: Geneva; padding:0px; margin:0px;'>Tel:0535523366</h6>
                                <hr>
                            </div>
                        </div>
                        
                        <div>
                            <div>
                                <h5 style='text-align: center; margin-bottom:20px; font-family: Geneva;'>Meknès le: $dateI</h5>
                            </div>
                            <div style='text-align: center; border: double; margin-left:150px; margin-right:150px;'>
                                <h4 style=' font-family: Geneva;'>Rapport Médicale</h4>
                            </div>
                            <div>
                                <h5 style=' font-family: Geneva; text-align: center; margin-top: 30px;'>
                                    Elaboré par:
                                    <br>
                                    Docteur Hamid Rahmani
                                    <br>
                                    Meknès
                                </h5>
                            </div>
                        </div>
                    </div>
                    <br><br>
                
                <div>
                    <table cellspacing='1' cellpadding='7'>
                        <tr>
                            <td><h5 style=' font-family: Geneva;'>Dossier Nº :</h5></td>
                            <td style=' font-family: Geneva;'>$dossier</td>
                        </tr>
                        <tr>
                            <td><h5 style=' font-family: Geneva;'>Nom :</h5></td>
                            <td style=' font-family: Geneva;'>$nom</td>
                        </tr>
                        <tr>
                            <td><h5 style=' font-family: Geneva;'>Prénom :</h5></td>
                            <td style=' font-family: Geneva;'>$prenom</td>
                        </tr>
                        <tr>
                            <td><h5 style=' font-family: Geneva;'>CIN Nº :</h5></td>
                            <td style=' font-family: Geneva;'>$cin</td>
                        </tr>
                        <tr>
                            <td><h5 style=' font-family: Geneva;'>Adresse :</h5></td>
                            <td style=' font-family: Geneva;'>$adresse</td>
                        </tr>
                        <tr>
                            <td><h5 style=' font-family: Geneva;'>Téléphone :</h5></td>
                            <td style=' font-family: Geneva;'>$tel</td>
                        </tr>
                        <tr>
                        <td><h5 style=' font-family: Geneva;'>Date Naissance :</h5></td>
                        <td style=' font-family: Geneva;'>$dateN</td>
                        </tr>
                        <tr>
                            <td><h5 style=' font-family: Geneva;'>Couverture sociale :</h5></td>
                            <td style=' font-family: Geneva;'>$couverture</td>
                        </tr>
                        <tr>
                            <td><h5 style=' font-family: Geneva;'>Date d'inscription :</h5></td>
                            <td style=' font-family: Geneva;'>$dateI</td>
                        </tr>
                    </table>
                </div>
                <br><br><br>
                
                <div style='margin-top: 60px'>
                    <p style=' font-family: Geneva;'>
                        $infos
                    </p>
                </div>
                <br><br><br>
                
                <div style=' margin-top:50px; text-align:center;;'>
                    <h5 style='font-family: Geneva;'>
                        signe:
                        <br>
                        Docteur Rahmani Hamid
                    </h5>
                </div>
            </div>
            </body>
            </html>";

            include "vendor/autoload.php";
            $mpdf=new \Mpdf\Mpdf();
            $mpdf->SetDisplayMode('fullpage');
            $mpdf->WriteHTML($html);
            $mpdf->Output();
            exit();
            
        }
          
    }
    
}else{
    getTemplate('error_404');
}
?>

