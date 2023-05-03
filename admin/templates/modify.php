<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 4 admin, bootstrap 4, css3 dashboard, bootstrap 4 dashboard, AdminWrap lite admin bootstrap 4 dashboard, frontend, responsive bootstrap 4 admin template, Elegant admin lite design, Elegant admin lite dashboard bootstrap 4 dashboard template">
    <meta name="description"
        content="Elegant Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Gestion du cabinet</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/elegant-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <!-- This page CSS -->
    <!-- chartist CSS -->
    <link href="../assets/node_modules/morrisjs/morris.css" rel="stylesheet">
    <!--c3 plugins CSS -->
    <link href="../assets/node_modules/c3-master/c3.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="dist/css/style.css" rel="stylesheet">
    <!-- Dashboard 1 Page CSS -->
    <link href="dist/css/pages/dashboard1.css" rel="stylesheet">
    <link href="dist/css/app.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="skin-default-dark fixed-layout">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Cabinet Medical</p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon --><b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="../assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
                            <!-- Light Logo icon -->
                            <img src="../assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text --><span>
                            <!-- dark Logo text -->
                            <img src="../assets/images/logo-text.png" alt="homepage" class="dark-logo" />
                            <!-- Light Logo text -->
                            <img src="../assets/images/logo-light-text.png" class="light-logo" alt="homepage" /></span>
                    </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto">
                        <!-- This is  -->
                        <li class="nav-item hidden-sm-up"> <a class="nav-link nav-toggler waves-effect waves-light"
                                href="javascript:void(0)"><i class="ti-menu"></i></a></li>
                        <!-- ============================================================== -->
                       
                    </ul>
                   
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <div class="d-flex no-block nav-text-box align-items-center">
                
                <a class="waves-effect waves-dark ml-auto hidden-sm-down" href="javascript:void(0)"><i
                        class="ti-menu"></i></a>
                <a class="nav-toggler waves-effect waves-dark ml-auto hidden-sm-up" href="javascript:void(0)"><i
                        class="ti-menu ti-close"></i></a>
            </div>
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li> <a class="waves-effect waves-dark" href="index.php" aria-expanded="false"><i
                                    class="fa fa-tachometer"></i><span class="hide-menu">Accueil</span></a></li>
                        <li> <a class="waves-effect waves-dark" href="?page=acount&action=updateAcount" aria-expanded="false"><i
                                    class="fa fa-pencil"></i><span class="hide-menu">Mise à jour du compte</span></a></li>
                        <li> <a class="waves-effect waves-dark" href="?page=patient" aria-expanded="false"><i
                                    class="fa fa-user-o"></i><span class="hide-menu"></span>Patient normal</a></li>
                        <li> <a class="waves-effect waves-dark" href="?page=permis" aria-expanded="false"><i
                                    class="fa fa-drivers-license"></i><span class="hide-menu"></span>Permis</a></li>
                        <li> <a class="waves-effect waves-dark" href="?page=expertise" aria-expanded="false"><i
                                    class="fa fa-gavel"></i><span class="hide-menu"></span>Expertises</a></li>
                        <li> <a class="waves-effect waves-dark" href="?page=visite" aria-expanded="false"><i
                                    class="fa fa-hospital-o"></i><span class="hide-menu"></span>Visite</a></li>
                        <li> <a class="waves-effect waves-dark" href="?page=rendez-vous" aria-expanded="false"><i
                                    class="fa fa-calendar"></i><span class="hide-menu"></span>Rendez-vous</a></li>
                        <li> <a class="waves-effect waves-dark" href="?page=acount&action=logout" aria-expanded="false"><i
                                    class="fa fa-power-off"></i><span class="hide-menu"></span>Deconnexion</a></li>
                       
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
      
     <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Page de modification</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Accueil</a></li>
                                <li class="breadcrumb-item active">Modification</li>
                            </ol>
                            
                        </div>
                    </div>
                </div>
                <div class="message"><?php if(isset($alert)){ echo alertMessage($alert); } ?></div>
        
            <?php if($_GET['action']=='edit_expertise'){ ?>
                <div>
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 style="font-size:25px;" class="modal-title text-primary">Modifier les informations du patient</h5>
                        
                    </div>
                    <form action="" method="POST">
                    <div class="modal-body">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label text-primary">Tribunal</label>
                            <div class="col-sm-10">
                            <input name="Newtribunal" type="text" value="<?php echo $reponses->tribunal; ?>" class="form-control" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label text-primary">Type de cas</label>
                            <div class="col-sm-10">
                            <input name="Newtype" type="text" class="form-control" value="<?php echo $reponses->type_cas; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label text-primary">Victime</label>
                            <div class="col-sm-10">
                            <input name="Newvictime" type="text" class="form-control" value="<?php echo $reponses->victime; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label text-primary">CIN</label>
                            <div class="col-sm-10">
                            <input name="Newcin" type="text" class="form-control" value="<?php echo $reponses->cin_expertise; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label text-primary">TEL</label>
                            <div class="col-sm-10">
                            <input name="Newtel" type="text" class="form-control" value="<?php echo $reponses->tel_expertise; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label text-primary">Avocat</label>
                            <div class="col-sm-10">
                            <input name="Newavocat" type="text" class="form-control" value="<?php echo $reponses->avocat; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label text-primary">Juge</label>
                            <div class="col-sm-10">
                            <input name="Newjuge" type="text" class="form-control" value="<?php echo $reponses->juge; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label text-primary">Date de réception</label>
                            <div class="col-sm-10">
                            <input name="NewdateReception" type="text" class="form-control" value="<?php echo $reponses->date1; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label text-primary">Date de remise</label>
                            <div class="col-sm-10">
                            <input name="NewdateRemise" type="text" class="form-control" value="<?php echo $reponses->date2; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label text-primary">Date d'audience</label>
                            <div class="col-sm-10">
                            <input name="NewdateAudience" type="text" class="form-control" value="<?php echo $reponses->date3; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button name="fermer" type="submit" class="btn btn-secondary">Fermer</button>
                        <button name="modifier" type="submit" class="btn btn-primary">Modifier</button>
                    </div>
                    </form>
                    </div>
                </div>
                </div>
                <?php }elseif($_GET['action']=='edit_patient'){ ?> 

                    <div>
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 style="font-size:25px;" class="modal-title text-primary">Modifier les informations du patient</h5>
                        
                    </div>
                    <form action="" method="POST">
                    <div class="modal-body">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label text-primary">Nom</label>
                            <div class="col-sm-10">
                            <input name="Newnom" type="text" value="<?php echo $reponses->nom_patient; ?>" class="form-control" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label text-primary">Prenom</label>
                            <div class="col-sm-10">
                            <input name="Newprenom" type="text" class="form-control" value="<?php echo $reponses->prenom_patient; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label text-primary">CIN</label>
                            <div class="col-sm-10">
                            <input name="Newcin" type="text" class="form-control" value="<?php echo $reponses->cin_patient; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label text-primary">Adresse</label>
                            <div class="col-sm-10">
                            <input name="Newadresse" type="text" class="form-control" value="<?php echo $reponses->adresse_patient; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label text-primary">Tel</label>
                            <div class="col-sm-10">
                            <input name="Newtel" type="text" class="form-control" value="<?php echo $reponses->tel_patient; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label text-primary">Date naissance</label>
                            <div class="col-sm-10">
                            <input name="NewdateN" type="text" class="form-control" value="<?php echo $reponses->date_naissance; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label text-primary">Couverture sociale</label>
                            <div class="col-sm-10">
                            <input name="Newcouverture" type="text" class="form-control" value="<?php echo $reponses->couverture_patient; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label text-primary">Informations</label>
                            <div class="col-sm-10">
                            <textarea name="Newinfos" class="form-control"><?php echo $reponses->infos; ?></textarea>
                            </div>
                        </div>
                        
                    </div>
                    <div class="modal-footer">
                        <button name="fermer" type="submit" class="btn btn-secondary">Fermer</button>
                        <button name="modifier" type="submit" class="btn btn-primary">Modifier</button>
                    </div>
                    </form>
                    </div>
                </div>
                </div>

                <?php }elseif($_GET['action']=='edit_permis'){ ?> 

                    <div>
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 style="font-size:25px;" class="modal-title text-primary">Modifier les informations du patient</h5>
                        
                    </div>
                    <form action="" method="POST">
                    <div class="modal-body">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label text-primary">Nom</label>
                            <div class="col-sm-10">
                            <input name="Newnom" type="text" value="<?php echo $reponses->nom_permis; ?>" class="form-control" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label text-primary">Prenom</label>
                            <div class="col-sm-10">
                            <input name="Newprenom" type="text" class="form-control" value="<?php echo $reponses->prenom_permis; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label text-primary">CIN</label>
                            <div class="col-sm-10">
                            <input name="Newcin" type="text" class="form-control" value="<?php echo $reponses->cin_permis; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label text-primary">Date de naissance</label>
                            <div class="col-sm-10">
                            <input name="NewdateN" type="text" class="form-control" value="<?php echo $reponses->date1; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label text-primary">Adresse</label>
                            <div class="col-sm-10">
                            <input name="Newadresse" type="text" class="form-control" value="<?php echo $reponses->adresse_permis; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label text-primary">Tel</label>
                            <div class="col-sm-10">
                            <input name="Newtel" type="text" class="form-control" value="<?php echo $reponses->tel_permis; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label text-primary">Categorie de permis</label>
                            <div class="col-sm-10">
                            <input name="Newcategorie" type="text" class="form-control" value="<?php echo $reponses->categorie_permis; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label text-primary">Date d'examen</label>
                            <div class="col-sm-10">
                            <input name="NewdateE" type="text" class="form-control" value="<?php echo $reponses->date2; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label text-primary">Poids</label>
                            <div class="col-sm-10">
                            <input name="Newpoids" type="text" class="form-control" value="<?php echo $reponses->poids; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label text-primary">Taille</label>
                            <div class="col-sm-10">
                            <input name="Newtaille" type="text" class="form-control" value="<?php echo $reponses->taille; ?>">
                            </div>
                        </div>
                        <label for="inputPassword3" class="col-sm-2 col-form-label text-primary">De loin:</label>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label text-primary">Oeil gauche</label>
                            <div class="col-sm-10">
                            <input name="Newogl" type="text" class="form-control" value="<?php echo $reponses->og_loin; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label text-primary">Oeil droite</label>
                            <div class="col-sm-10">
                            <input name="Newodl" type="text" class="form-control" value="<?php echo $reponses->od_loin; ?>">
                            </div>
                        </div>
                        <label for="inputPassword3" class="col-sm-2 col-form-label text-primary">De pres:</label>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label text-primary">Oeil gauche</label>
                            <div class="col-sm-10">
                            <input name="Newogp" type="text" class="form-control" value="<?php echo $reponses->og_pres; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label text-primary">Oeil droite</label>
                            <div class="col-sm-10">
                            <input name="Newodp" type="text" class="form-control" value="<?php echo $reponses->od_pres; ?>">
                            </div>
                        </div>
                        
                    </div>
                    <div class="modal-footer">
                        <button name="fermer" type="submit" class="btn btn-secondary">Fermer</button>
                        <button name="modifier" type="submit" class="btn btn-primary">Modifier</button>
                    </div>
                    </form>
                    </div>
                </div>
                </div>


                <?php }elseif($_GET['action']=='edit_rendez-vous'){ ?> 

                    <div>
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 style="font-size:25px;" class="modal-title text-primary">Modifier</h5>
                        
                    </div>
                    <form action="" method="POST">
                    <div class="modal-body">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label text-primary">Date</label>
                            <div class="col-sm-10">
                            <input name="Newdate" type="text" value="<?php echo $reponses->date1; ?>" class="form-control" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label text-primary">Numéro de dossier</label>
                            <div class="col-sm-10">
                            <input name="Newdossier" type="text" class="form-control" value="<?php echo $reponses->dossier_patient; ?>">
                            </div>
                        </div>
                        
                    </div>
                    <div class="modal-footer">
                        <button name="fermer" type="submit" class="btn btn-secondary">Fermer</button>
                        <button name="modifier" type="submit" class="btn btn-primary">Modifier</button>
                    </div>
                    </form>
                    </div>
                    </div>
                    </div>


                    <?php }elseif($_GET['action']=='edit_visite'){ ?> 

                        <div>
                        <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 style="font-size:25px;" class="modal-title text-primary">Modifier</h5>
                            
                        </div>
                        <form action="" method="POST">
                        <div class="modal-body">
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label text-primary">Date</label>
                                <div class="col-sm-10">
                                <input name="Newdate" type="text" value="<?php echo $reponses->date1; ?>" class="form-control" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label text-primary">Numéro de dossier</label>
                                <div class="col-sm-10">
                                <input name="Newdossier" type="text" class="form-control" value="<?php echo $reponses->dossier_patient; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label text-primary">Médicament</label>
                                <div class="col-sm-10">
                                <input name="Newmedicament" type="text" value="<?php echo $reponses->medicament; ?>" class="form-control" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label text-primary">Quantité</label>
                                <div class="col-sm-10">
                                <input name="Newquantite" type="text" class="form-control" value="<?php echo $reponses->quantite; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label text-primary">Type de séance</label>
                                <div class="col-sm-10">
                                <input name="Newtype" type="text" value="<?php echo $reponses->type1; ?>" class="form-control" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label text-primary">Prix</label>
                                <div class="col-sm-10">
                                <input name="Newprix" type="text" class="form-control" value="<?php echo $reponses->prix; ?>">
                                </div>
                            </div>
                            
                        </div>
                        <div class="modal-footer">
                            <button name="fermer" type="submit" class="btn btn-secondary">Fermer</button>
                            <button name="modifier" type="submit" class="btn btn-primary">Modifier</button>
                        </div>
                        </form>
                        </div>
                        </div>
                        </div>


                        <?php } ?>


                
                <!-- ============================================================== -->
                <!-- News -->
                <!-- ============================================================== -->
                
    </div>
    


<?php getFooter(); ?>