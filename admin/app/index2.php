<?php
if($_GET['page']=='index2'){
if(isset($_POST['btn2'])){
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$sexe=$_POST['sexe'];
$dateN=$_POST['dateN'];
$adresse=$_POST['adresse'];
$profession=$_POST['profession'];
$cin=$_POST['cin'];
$dateDep=$_POST['dateDep'];
$victime=$_POST['victime'];
$cin=$_POST['cin'];
$categorie=$_POST['categorie'];
$dateE=$_POST['dateE'];
$poids=$_POST['poids'];
$taille=$_POST['taille'];
$ajout1=$_POST['ajout1'];
$ogl=$_POST['ogl'];
$odl=$_POST['odl'];
$ogp=$_POST['ogp'];
$odp=$_POST['odp'];
$ajout2=$_POST['ajout2'];
$ajout3=$_POST['ajout3'];

$html="<!DOCTYPE html>
<html>
<head>
	<meta charset='utf-8'>
	<meta name='viewport' content='width=device-width, initial-scale=1'>
	<title>Permis</title>
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
					<h5 style='text-align: center; margin-bottom:20px; font-family: Geneva;'>Meknès le: $dateE</h5>
				</div>
				<div style='text-align: center; border: double; margin-left:150px; margin-right:150px;'>
					<h4 style=' font-family: Geneva;'>Dossier Médical des candidats pour l'obtention. L'extension ou le maintien du permis de conduire</h4>
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
    <div>
        <h4 style=' font-family: Geneva;'>IDENTIFICATION</h4>
    </div>
		<table cellspacing='1' cellpadding='7'>
			<tr>
				<td><h5 style=' font-family: Geneva;'>Nom :</h5></td>
				<td style=' font-family: Geneva;'>$nom</td>
			</tr>
			<tr>
				<td><h5 style=' font-family: Geneva;'>Prénom :</h5></td>
				<td style=' font-family: Geneva;'>$prenom</td>
			</tr>
			<tr>
				<td><h5 style=' font-family: Geneva;'>Sexe :</h5></td>
				<td style=' font-family: Geneva;'>$sexe</td>
			</tr>
			<tr>
				<td><h5 style=' font-family: Geneva;'>Date de naissance :</h5></td>
				<td style=' font-family: Geneva;'>$dateN</td>
			</tr>
			<tr>
				<td><h5 style=' font-family: Geneva;'>Adresse :</h5></td>
				<td style=' font-family: Geneva;'>$adresse</td>
			</tr>
            <tr>
				<td><h5 style=' font-family: Geneva;'>Profession :</h5></td>
				<td style=' font-family: Geneva;'>$profession</td>
			</tr>
			<tr>
               <td><h5 style=' font-family: Geneva;'>CIN Nº :</h5></td>
               <td style=' font-family: Geneva;'>$cin</td>
            </tr>
            <tr>
               <td><h5 style=' font-family: Geneva;'>Catégorie de permis de conduire viséo :</h5></td>
               <td style=' font-family: Geneva;'>$categorie</td>
            </tr>
		</table>
	</div>
	<br><br>
	<div>
        <div>
            <h4 style=' font-family: Geneva;'>EXAMEN MEDICAL</h4>
        </div>
	    <table cellspacing='1' cellpadding='7'>
			<tr>
				<td><h5 style=' font-family: Geneva;'>Poids :</h5></td>
				<td style=' font-family: Geneva;'>$poids kg</td>
			</tr>
			<tr>
				<td><h5 style=' font-family: Geneva;'>Taille :</h5></td>
				<td style=' font-family: Geneva;'>$taille cm</td>
			</tr>
		</table>
        		
		<p style=' font-family: Geneva;'>
            $ajout1
        </p>
	</div>
    <div>
        <div>
            <h4 style=' font-family: Geneva;'>EXAMEN DE LA VUE</h4>
        </div>
        <table cellspacing='1' cellpadding='7'>
            <tr>
                <td><h5 style=' font-family: Geneva;'>De loin</h5></td>
            </tr>
            <tr>
                <td></td>
                <td><h5 style=' font-family: Geneva;'>Oeil gauche :</h5></td>
                <td style=' font-family: Geneva;'>$ogl</td>
            </tr>
            <tr>
                <td></td>
                <td><h5 style=' font-family: Geneva;'>Oeil droite :</h5></td>
                <td style=' font-family: Geneva;'>$odl</td>
            </tr>
            <tr>
                <td><h5 style=' font-family: Geneva;'>De près</h5></td>
            <tr>
                <td></td>
                <td><h5 style=' font-family: Geneva;'>Oeil gauche :</h5></td>
                <td style=' font-family: Geneva;'>$ogp</td>
            </tr>
            <tr>
                <td></td>
                <td><h5 style=' font-family: Geneva;'>Oeil droite :</h5></td>
                <td style=' font-family: Geneva;'>$odp</td>
            </tr>
        </table>
    </div>
    <div style=' margin-top:50px; text-align:center;'>
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


}?>