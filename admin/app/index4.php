<?php
if($_GET['page']=='index4'){
if(isset($_POST['btn4'])){
$nom=$_POST['nom'];
$dossier=$_POST['dossier'];
$adresseCabinet=$_POST['adresseCabinet'];
$adresseClient=$_POST['adresseClient'];
$facture=$_POST['facture'];
$date=$_POST['date'];
$echeance=$_POST['echeance'];
$paiement=$_POST['paiement'];
$num1=$_POST['num1'];
$service1=$_POST['service1'];
$prix1=$_POST['prix1'];
$num2=$_POST['num2'];
$service2=$_POST['service2'];
$prix2=$_POST['prix1'];
$num3=$_POST['num3'];
$service3=$_POST['service3'];
$prix3=$_POST['prix3'];
$pt=$_POST['pt'];
$ajout=$_POST['ajout'];

$html="<!DOCTYPE html>
<html>
<head>
	<meta charset='utf-8'>
	<meta name='viewport' content='width=device-width, initial-scale=1'>
	<title>Facture</title>
</head>
<body>

<div style='border: double; padding: 20px;'>
		<div>
			<div>
				<div style='margin-top: 20px; margin-left: 60px ; margin-bottom: 10px;'>
					<h5 style=' font-family: Geneva; padding:0px; margin:0px;'>Dr.RAHMANI HAMID</h5>
					<h6 style=' font-family: Geneva; padding:0px; margin:0px;'>Psychiatre-Psychothérapeute</h6>
				</div>
				<div style='margin-left: 30px ; margin-bottom: 30px;'>
					<h6 style=' font-family: Geneva; padding:0px; margin:0px;'>6, Angle Rue Kenitra, Av.Hassan II - 1èr Etage, Meknès</h6>
					<h6 style=' font-family: Geneva; padding:0px; margin:0px;'>Tel:0535523366</h6>
					<hr>
				</div>
			</div>
			
			<div>
				<div style='text-align: center; border: double; margin-left:150px; margin-right:150px;'>
					<h4 style=' font-family: Geneva;'>FACTURE</h4>
				</div>
			</div>
		</div>
		<br><br>
    
	<div>
		<table align='left' cellspacing='1' cellpadding='7'>
            <tr>
                <td><h4 style=' font-family: Geneva;'>FACTURE A : </h4></td>
            </tr>
            <tr>
                <td style=' font-family: Geneva;'> $adresseCabinet</td>
            </tr>
        </table>
        <table align='left' cellspacing='1' cellpadding='7'>
            <tr>
                <td><h4 style=' font-family: Geneva;'>ENVOYE A : </h4></td>
                <td></td>
            </tr>
            <tr>
                <td><h5 style=' font-family: Geneva;'>Nom du client :</h5></td>
                <td style=' font-family: Geneva;'> $nom</td>
            </tr>
            <tr>
                <td><h5 style=' font-family: Geneva;'>Dossier Nº :</h5></td>
                <td style=' font-family: Geneva;'> $dossier</td>
            </tr>
            <tr>
                <td><h5 style=' font-family: Geneva;'>Adresse :</h5></td>
                <td style=' font-family: Geneva;'> $adresseClient</td>
            </tr>
		</table>
        <table align='right' cellspacing='1' cellpadding='7'>
            <tr>
                <td><h5 style=' font-family: Geneva;'>Facture Nº : </h5></td>
                <td style=' font-family: Geneva;'> $facture</td>
            </tr>
            <tr>
                <td><h5 style=' font-family: Geneva;'>Date : </h5></td>
                <td style=' font-family: Geneva;'> $date</td>
            </tr>
            <tr>
                <td><h5 style=' font-family: Geneva;'>Echéance : </h5></td>
                <td style=' font-family: Geneva;'> $echeance</td>
            </tr>
            <tr>
                <td><h5 style=' font-family: Geneva;'>Paiement : </h5></td>
                <td style=' font-family: Geneva;'> $paiement</td>
            </tr>
        </table>
        <br><br><br>
        <table border='1' align='center' cellspacing='1' cellpadding='7'>
            <tr>
                <td><h5 style=' font-family: Geneva;'>Service Nº</h5></td>
                <td><h5 style=' font-family: Geneva;'>Service </h5></td>
                <td><h5 style=' font-family: Geneva;'>Prix </h5></td>
            </tr>
            <tr>
                <td>
                    <p style=' font-family: Geneva;'>$num1</p>
                    <br>
                    <p style=' font-family: Geneva;'>$num2</p>
                    <br>
                    <p style=' font-family: Geneva;'>$num3</p>
                    <br>
                </td>
                <td>
                    <p style=' font-family: Geneva;'>$service1</p>
                    <br>
                    <p style=' font-family: Geneva;'>$service2</p>
                    <br>
                    <p style=' font-family: Geneva;'>$service3</p>
                    <br>
                </td>
                <td>
                    <p style=' font-family: Geneva;'>$prix1</p>
                    <br>
                    <p style=' font-family: Geneva;'>$prix2</p>
                    <br>
                    <p style=' font-family: Geneva;'>$prix3</p>
                    <br>
                </td>
            </tr>
        </table>
    </div>
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


}?>