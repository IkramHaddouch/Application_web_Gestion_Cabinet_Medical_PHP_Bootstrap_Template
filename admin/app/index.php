<?php
if($_GET['page']=='index'){
if(isset($_POST['btn'])){
$date=$_POST['date'];
$magistrat=$_POST['magistrat'];
$dossier=$_POST['dossier'];
$dateJug=$_POST['dateJug'];
$dateJugProb=$_POST['dateJugProb'];
$assurance=$_POST['assurance'];
$ref=$_POST['ref'];
$dateDep=$_POST['dateDep'];
$victime=$_POST['victime'];
$cin=$_POST['cin'];
$dateJugProb=$_POST['dateJugProb'];
$dateDeliv=$_POST['dateDeliv'];
$docteur=$_POST['docteur'];
$dossierMed=$_POST['dossierMed'];
$certificate1=$_POST['certificate1'];
$certificate2=$_POST['certificate2'];
$certificate3=$_POST['certificate3'];
$examem=$_POST['examem'];
$conclusion=$_POST['conclusion'];

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
					<h5 style='text-align: center; margin-bottom:20px; font-family: Geneva;'>Meknès le: $date</h5>
				</div>
				<div style='text-align: center; border: double; margin-left:150px; margin-right:150px;'>
					<h4 style=' font-family: Geneva;'>Rapport d'Expertise Médicale</h4>
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
				<td><h5 style=' font-family: Geneva;'>N:REF :</h5></td>
				<td style=' font-family: Geneva;'>$date</td>
			</tr>
			<tr>
				<td><h5 style=' font-family: Geneva;'>Magistrat :</h5></td>
				<td style=' font-family: Geneva;'>$magistrat</td>
			</tr>
			<tr>
				<td style=' font-family: Geneva;'>TPI de Meknès</td>
			</tr>
			<tr>
				<td><h5 style=' font-family: Geneva;'>Dossier Nº :</h5></td>
				<td style=' font-family: Geneva;'>$dossier</td>
			</tr>
			<tr>
				<td><h5 style=' font-family: Geneva;'>Jugement du :</h5></td>
				<td style=' font-family: Geneva;'>$dateJug</td>
			</tr>
			<tr>
				<td><h5 style=' font-family: Geneva;'>Jugement probatoire :</h5></td>
				<td style=' font-family: Geneva;'>$dateJugProb</td>
			</tr>
			<tr>
				<td><h5 style=' font-family: Geneva;'>Compagnie d'assurance :</h5></td>
				<td style=' font-family: Geneva;'>$assurance</td>
			</tr>
		</table>
	</div>
	<br><br>
	<div>
	    $ref
		<br>
		Déposées à Meknès principal, le: $dateDep
		<br>
		Et LES lettres pour les AVOCATS
		<br>
		<b style=' font-family: Geneva;'>La victime:</b> $victime CIN Nº : $cin
	</div>
	<div style='margin-top: 60px'>
		<p style=' font-family: Geneva;'>
		    Conformément au jugement probatoire Du $dateJugProb du TP de Meknès,dossier correctionnel Nº : $dossier et dans
			le cadre du dahir du 02/10/1984 et Conformément au décret du 14/01/85, je soussigné Dr Rahmani certifie 
			avoir procédé à l'expertise de la victime sus mentionnés.
	    </p>
	</div>
	<br><br><br>
	<div>
		<div style='background: rgb(189, 189, 189);'><h5  style=' font-family: Geneva; padding:0px; margin:0px;'>Dossier médical</h5></div>
		
		<p style=' font-family: Geneva;'>
			CMI délivré le $dateDeliv par Dr $docteur à Meknès qui rélève ce qui suit:
		$dossierMed
        </p>
	</div>
	<br><br><br><br>
	<div>
    	<p style=' font-family: Geneva;'>
           $certificate1
		   <br>
		   $certificate2
		   <br>
		   $certificate3
	    </p>
	</div>
	<br>
	<div>
	    <div style='background: rgb(189, 189, 189);'><h5 style=' font-family: Geneva; padding:0px; margin:0px;'>Examen médical</h5></div>
		
		<p style=' font-family: Geneva;'>
		    $examem
        </p>
	</div>
	<div>
	    <div style='background: rgb(189, 189, 189);'><h5  style=' font-family: Geneva; padding:0px; margin:0px;'>Conclusion de l'expertise du Dr Rahmani</h5></div>
		
		<p style=' font-family: Geneva;'>
		    $conclusion
        </p>
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