<?php
if($_GET['page']=='index3'){
if(isset($_POST['btn3'])){
$nom=$_POST['nom'];
$pg=$_POST['pg'];
$pu1=$_POST['pu1'];
$nombre1=$_POST['nombre1'];
$pt1=$_POST['pt1'];
$pg2=$_POST['pg2'];
$pu2=$_POST['pu2'];
$nombre2=$_POST['nombre2'];
$pt2=$_POST['pt2'];
$pg3=$_POST['pg3'];
$pu3=$_POST['pu3'];
$nombre3=$_POST['nombre3'];
$pt3=$_POST['pt3'];
$ajout=$_POST['ajout'];
$rdv=$_POST['rdv'];
$lieu=$_POST['lieu'];
$dateV=$_POST['dateV'];
$montant=$_POST['montant'];

$html="<!DOCTYPE html>
<html>
<head>
	<meta charset='utf-8'>
	<meta name='viewport' content='width=device-width, initial-scale=1'>
	<title>Ordonnance</title>
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
					<h4 style=' font-family: Geneva;'>ORDONNANCE</h4>
				</div>
			</div>
		</div>
		<br><br>
    
	<div>
		<table border='1' align='center' cellspacing='1' cellpadding='7'>
            <tr>
                <td colspan='4'><h5 style=' font-family: Geneva;'>P.U</h5></td>
                <td colspan='4'><h5 style=' font-family: Geneva;'>Nombre</h5></td>
                <td colspan='4'><h5 style=' font-family: Geneva;'>Prix Total</h5></td>
                <td colspan='24'><h5 style=' font-family: Geneva;'>Ordonnance</h5></td>
            </tr>
			<tr>
                <td colspan='4' style=' font-family: Geneva;'>
                    
                    <p style=' font-family: Geneva;'>$pu1</p><br>
                    <p style=' font-family: Geneva;'>$pu2</p><br>
                    <p style=' font-family: Geneva;'>$pu3</p><br>
                </td>
                <td colspan='4' style=' font-family: Geneva;'>
                    
                    <p style=' font-family: Geneva;'> $nombre1</p><br>
                    <p style=' font-family: Geneva;'> $nombre2</p><br>
                    <p style=' font-family: Geneva;'> $nombre3</p><br>
                </td>
                <td colspan='4' style=' font-family: Geneva;'>
                    
                    <p style=' font-family: Geneva;'>$pt1</p><br>
                    <p style=' font-family: Geneva;'>$pt2</p><br>
                    <p style=' font-family: Geneva;'>$pt3</p><br>
                </td>
				<td colspan='24' style=' font-family: Geneva;'>
                    <p><b style=' font-family: Geneva;'>Nom et prénom du malade:</b></p>
                    <p style=' font-family: Geneva;'>$nom</p><br><br><br><br><br>
                    <p style=' font-family: Geneva;'>$pg</p><br>
                    <p style=' font-family: Geneva;'>$pg2</p><br>
                    <p style=' font-family: Geneva;'>$pg3</p>
                    <br><br>
                    <p style=' font-family: Geneva;'> $ajout</p><br>
                    <p><b style=' font-family: Geneva;'>Rendez-vous:</b> $rdv</p><br>
                    <p style=' font-family: Geneva;'><b>A:</b> $lieu        <b>Le:</b> $dateV</p>
                    <br>
                </td>
            </tr>
            <tr>
                <td rowspan='6' colspan='6' style=' font-family: Geneva;'>Montant Global</td><br><br>
                <td rowspan='6' colspan='6' style=' font-family: Geneva;'>$montant</td><br><br>
                <td rowspan='6' colspan='24'><h5 style=' font-family: Geneva;'>Cachet et Signature Pharmacien: <br> avec INPE</h5></td><br><br>
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