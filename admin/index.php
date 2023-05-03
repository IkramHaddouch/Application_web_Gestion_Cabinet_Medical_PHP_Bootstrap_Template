<?php 
session_start();
if(isset($_SESSION['admin'])){

	header('location:admin.php?page=accueil');

}
else{
	require_once('app/fonctions.php'); 

	getTemplateApp('login','login');
}
?>

