<?php
session_start();
if(isset($_SESSION['admin'])){
    require_once('app/fonctions.php');

    if(isset($_GET['page'])){

        switch ($_GET['page']){
            case 'accueil':
                getTemplate('accueil');
                break;

            case 'acount':
                getTemplateApp('acount','acount');
                break;

            case 'patient':
                getTemplateApp('patient','patient');
                break;

            case 'permis':
                getTemplateApp('permis','permis');
                break;
    
            case 'expertise':
                getTemplateApp('expertise','expertise');
                break;

            case 'modify':
                getTemplateApp('modify','modify');
                break;

            case 'visite':
                getTemplateApp('visite','visite');
                break;

            case 'rendez-vous':
                getTemplateApp('rendez-vous','rendez-vous');
                break;

            case 'index':
                getTemplateApp('index','index');
                break;

            case 'index2':
                getTemplateApp('index2','index2');
                break;

            case 'index3':
                getTemplateApp('index3','index3');
                break;

            case 'index4':
                getTemplateApp('index4','index4');
                break;

            default:
                getTemplate('error_404');
                break;
        }

    }
    else{
        getTemplate('error_404');
    }

}
else{
    header('location:index.php');
}


?>