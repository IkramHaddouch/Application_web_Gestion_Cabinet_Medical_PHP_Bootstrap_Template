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
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item search-box"> <a class="nav-link waves-effect waves-dark"
                                href="javascript:void(0)" data-toggle="modal" data-target="#exampleModal3"><i class="fa fa-search"></i></a>
                            
                        </li>
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
            <br>
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor" style="color: rgb(218,5,5)"><b>Archives des preuves médicales pour le permis</b></h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Accueil</a></li>
                                <li class="breadcrumb-item active">Patient</li>
                            </ol>
                            <button name="ajouter" type="button" class="btn btn-primary m-l-10" data-toggle="modal" data-target="#exampleModal">
                            Ajouter un patient
                            </button>
                        </div>
                    </div>
                </div>
                <button name="rapport2" type="button" style="background: rgb(218,5,5); border-radius: 5px;">
                    <a class="text-light" href="?page=index2">Rapport permis</a>
                </button>
                <br><br><br>
                <div class="message"><?php if(isset($alert)){ echo alertMessage($alert); } ?></div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->

                <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 style="font-size:25px;" class="modal-title text-primary" id="exampleModalLabel">Recherche</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="" method="POST">
                        <div class="modal-body">
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label text-primary">Nom</label>
                                <div class="col-sm-10">
                                <input name="nom" type="text" class="form-control" placeholder="Entrer le nom">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label text-primary">Prenom</label>
                                <div class="col-sm-10">
                                <input name="prenom" type="text" class="form-control" placeholder="Entrer le prenom">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                            <button name="rechercher" type="submit" class="btn btn-primary">Rechercher</button>
                        </div>
                    </form>
                    </div>
                </div>
                </div>
                
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 style="font-size:25px;" class="modal-title text-primary" id="exampleModalLabel">Ajouter le patient</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="" method="POST">
                    <div class="modal-body">
                        
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label text-primary">Nom</label>
                            <div class="col-sm-10">
                            <input name="nom" type="text" class="form-control" placeholder="Entrer le nom">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label text-primary">Prenom</label>
                            <div class="col-sm-10">
                            <input name="prenom" type="text" class="form-control" placeholder="Entrer le prenom">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label text-primary">CIN</label>
                            <div class="col-sm-10">
                            <input name="cin" type="text" class="form-control" placeholder="Entrer le numéro d'identité national">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label text-primary">Adresse</label>
                            <div class="col-sm-10">
                            <input name="adresse" type="text" class="form-control" placeholder="Entrer l'adresse">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label text-primary">Tel</label>
                            <div class="col-sm-10">
                            <input name="tel" type="text" class="form-control" placeholder="Entrer le numéro de téléphone">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label text-primary">Date de naissance</label>
                            <div class="col-sm-10">
                            <input name="dateN" type="text" class="form-control" placeholder="Entrer la date de naissance">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label text-primary">Categorie de permis</label>
                            <div class="col-sm-10">
                            <input name="categorie" type="text" class="form-control" placeholder="Entrer la categorie de permis">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label text-primary">Date d'examen</label>
                            <div class="col-sm-10">
                            <input name="dateE" type="text" class="form-control" placeholder="Entrer la date d'examen">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label text-primary">Poids</label>
                            <div class="col-sm-10">
                            <input name="poids" type="text" class="form-control" placeholder="Entrer le poids">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label text-primary">Taille</label>
                            <div class="col-sm-10">
                            <input name="taille" type="text" class="form-control" placeholder="Entrer la taille en cm">
                            </div>
                        </div>
                        <div>
                            <label for="inputEmail3" class="col-sm-2 col-form-label text-primary">De loin:</label>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label text-primary">OG</label>
                                <div class="col-sm-10">
                                <input name="ogl" type="text" class="form-control" placeholder="oeil gauche">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label text-primary">OD</label>
                                <div class="col-sm-10">
                                <input name="odl" type="text" class="form-control" placeholder="oeil droite">
                                </div>
                            </div>
                        </div>
                       <div>
                            <label for="inputEmail3" class="col-sm-2 col-form-label text-primary">De près:</label>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label text-primary">OG</label>
                                <div class="col-sm-10">
                                <input name="ogp" type="text" class="form-control" placeholder="oeil gauche">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label text-primary">OD</label>
                                <div class="col-sm-10">
                                <input name="odp" type="text" class="form-control" placeholder="oeil droite">
                                </div>
                            </div>
                       </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                        <button name="enregistrer" type="submit" class="btn btn-primary">Enregistrer</button>
                    </div>
                    </form>
                    </div>
                </div>
                </div>

                <!-- ============================================================== -->
                <!-- News -->
                <!-- ============================================================== -->
                <?php if(isset($_POST['rechercher'])){ ?>
                <div class="row">
                    <!-- column -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div>
                                        <form action="" method="POST">
                                                <input style="margin-left:1000px;" type="date" class="btn btn-secondary d-inline m-l-15" name="date" />
                                                <button class="btn btn-warning" style="margin-right:10px;" name="search" type="submit"><i class="fa fa-search"></i></button>
                                        </form>
                                        <h5 class="card-title">Nos patients</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th class="text-center">NUMERO DOSSIER</th>
                                            <th class="text-center">NOM</th>
                                            <th class="text-center">PRENOM</th>
                                            <th class="text-center">CIN</th>
                                            <th class="text-center">DATE DE NAISSANCE</th>
                                            <th class="text-center">ADRESSE</th>
                                            <th class="text-center">TEL</th>
                                            <th class="text-center">CATEGORIE PERMIS</th>
                                            <th class="text-center">DATE EXAMEN</th>
                                            <th class="text-center">POIDS</th>
                                            <th class="text-center">TAILLE</th>
                                            <th class="text-center">OG LOIN</th>
                                            <th class="text-center">OD LOIN</th>
                                            <th class="text-center">OG PRES</th>
                                            <th class="text-center">OD PRES</th>
                                            <th class="text-center">ACTION1</th>
                                            <th class="text-center">ACTION2</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php if(!empty($_POST['nom']) && !empty($_POST['prenom'])){ ?>
                                    <?php  $nbLignes = $dossierPatient->rowCount();
                                        if($nbLignes != 0){ ?>
                                        <tr>
                                            <td class="text-center"><?php echo $reponses->dossier_permis; ?></td>
                                            <td class="text-center"><?php echo $reponses->nom_permis; ?></td>
                                            <td class="text-center"><?php echo $reponses->prenom_permis; ?></td>
                                            <td class="text-center"><?php echo $reponses->cin_permis; ?></td>
                                            <td class="text-center"><?php echo $reponses->date1; ?></td>
                                            <td class="text-center"><?php echo $reponses->adresse_permis; ?></td>
                                            <td class="text-center"><?php echo $reponses->tel_permis; ?></td>
                                            <td class="text-center"><?php echo $reponses->categorie_permis; ?></td>
                                            <td class="text-center"><?php echo $reponses->date2; ?></td>
                                            <td class="text-center"><?php echo $reponses->poids; ?></td>
                                            <td class="text-center"><?php echo $reponses->taille; ?></td>
                                            <td class="text-center"><?php echo $reponses->og_loin; ?></td>
                                            <td class="text-center"><?php echo $reponses->od_loin; ?></td>
                                            <td class="text-center"><?php echo $reponses->og_pres; ?></td>
                                            <td class="text-center"><?php echo $reponses->od_pres; ?></td>
                                            <td class="txt-oflo"><a class="text-primary" href="admin.php?page=modify&action=edit_permis&dossier_permis=<?php echo $reponses->dossier_permis ?>"><i class="fa fa-edit"></i>Modifier</a></td>
                                            <td class="txt-oflo"><a class="text-danger" href="" onclick="event.preventDefault();confirm('êtes-vous sur que vous voulez supprimer?') && window.location.replace('admin.php?page=permis&action=delete&dossier_permis=<?php echo $reponses->dossier_permis ?>')"><i class="fa fa-trash-o"></i></span>Supprimer</a></td>
                                            
                                        </tr>
                                        <?php } ?>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <?php }elseif(isset($_POST['search'])){ ?>

                    <div class="row">
                        <!-- column -->
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                <div class="d-flex">
                                    <div>
                                        <form action="" method="POST">
                                                <input style="margin-left:1000px;" type="date" class="btn btn-secondary d-inline m-l-15" name="date" />
                                                <button class="btn btn-warning" style="margin-right:10px;" name="search" type="submit"><i class="fa fa-search"></i></button>
                                        </form>
                                        <h5 class="card-title">Nos patients</h5>
                                    </div>
                                </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th class="text-center">NUMERO DOSSIER</th>
                                                <th class="text-center">NOM</th>
                                                <th class="text-center">PRENOM</th>
                                                <th class="text-center">CIN</th>
                                                <th class="text-center">DATE DE NAISSANCE</th>
                                                <th class="text-center">ADRESSE</th>
                                                <th class="text-center">TEL</th>
                                                <th class="text-center">CATEGORIE PERMIS</th>
                                                <th class="text-center">DATE EXAMEN</th>
                                                <th class="text-center">POIDS</th>
                                                <th class="text-center">TAILLE</th>
                                                <th class="text-center">OG LOIN</th>
                                                <th class="text-center">OD LOIN</th>
                                                <th class="text-center">OG PRES</th>
                                                <th class="text-center">OD PRES</th>
                                                <th class="text-center">ACTION1</th>
                                                <th class="text-center">ACTION2</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php while($reponses=$datePatient->fetch(PDO::FETCH_OBJ)): ?>
                                            <tr>
                                                <td class="text-center"><?php echo $reponses->dossier_permis; ?></td>
                                                <td class="text-center"><?php echo $reponses->nom_permis; ?></td>
                                                <td class="text-center"><?php echo $reponses->prenom_permis; ?></td>
                                                <td class="text-center"><?php echo $reponses->cin_permis; ?></td>
                                                <td class="text-center"><?php echo $reponses->date1; ?></td>
                                                <td class="text-center"><?php echo $reponses->adresse_permis; ?></td>
                                                <td class="text-center"><?php echo $reponses->tel_permis; ?></td>
                                                <td class="text-center"><?php echo $reponses->categorie_permis; ?></td>
                                                <td class="text-center"><?php echo $reponses->date2; ?></td>
                                                <td class="text-center"><?php echo $reponses->poids; ?></td>
                                                <td class="text-center"><?php echo $reponses->taille; ?></td>
                                                <td class="text-center"><?php echo $reponses->og_loin; ?></td>
                                                <td class="text-center"><?php echo $reponses->od_loin; ?></td>
                                                <td class="text-center"><?php echo $reponses->og_pres; ?></td>
                                                <td class="text-center"><?php echo $reponses->od_pres; ?></td>
                                                <td class="txt-oflo"><a class="text-primary" href="admin.php?page=modify&action=edit_permis&dossier_permis=<?php echo $reponses->dossier_permis ?>"><i class="fa fa-edit"></i>Modifier</a></td>
                                                <td class="txt-oflo"><a class="text-danger" href="" onclick="event.preventDefault();confirm('êtes-vous sur que vous voulez supprimer?') && window.location.replace('admin.php?page=permis&action=delete&dossier_permis=<?php echo $reponses->dossier_permis ?>')"><i class="fa fa-trash-o"></i></span>Supprimer</a></td>
                                                
                                            </tr>
                                            <?php endwhile ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>


                <?php }else{ ?>

                    <div class="row">
                        <!-- column -->
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div>
                                        <form action="" method="POST">
                                                <input style="margin-left:1000px;" type="date" class="btn btn-secondary d-inline m-l-15" name="date" />
                                                <button class="btn btn-warning" style="margin-right:10px;" name="search" type="submit"><i class="fa fa-search"></i></button>
                                        </form>
                                            <h5 class="card-title">Nos patients</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                        <tr>
                                            <th class="text-center">NUMERO DOSSIER</th>
                                            <th class="text-center">NOM</th>
                                            <th class="text-center">PRENOM</th>
                                            <th class="text-center">CIN</th>
                                            <th class="text-center">DATE DE NAISSANCE</th>
                                            <th class="text-center">ADRESSE</th>
                                            <th class="text-center">TEL</th>
                                            <th class="text-center">CATEGORIE PERMIS</th>
                                            <th class="text-center">DATE EXAMEN</th>
                                            <th class="text-center">POIDS</th>
                                            <th class="text-center">TAILLE</th>
                                            <th class="text-center">OG LOIN</th>
                                            <th class="text-center">OD LOIN</th>
                                            <th class="text-center">OG PRES</th>
                                            <th class="text-center">OD PRES</th>
                                            <th class="text-center">ACTION1</th>
                                            <th class="text-center">ACTION2</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php while($reponses=$allPatient->fetch(PDO::FETCH_OBJ)): ?>
                                            <tr>
                                                <td class="text-center"><?php echo $reponses->dossier_permis; ?></td>
                                                <td class="text-center"><?php echo $reponses->nom_permis; ?></td>
                                                <td class="text-center"><?php echo $reponses->prenom_permis; ?></td>
                                                <td class="text-center"><?php echo $reponses->cin_permis; ?></td>
                                                <td class="text-center"><?php echo $reponses->date1; ?></td>
                                                <td class="text-center"><?php echo $reponses->adresse_permis; ?></td>
                                                <td class="text-center"><?php echo $reponses->tel_permis; ?></td>
                                                <td class="text-center"><?php echo $reponses->categorie_permis; ?></td>
                                                <td class="text-center"><?php echo $reponses->date2; ?></td>
                                                <td class="text-center"><?php echo $reponses->poids; ?></td>
                                                <td class="text-center"><?php echo $reponses->taille; ?></td>
                                                <td class="text-center"><?php echo $reponses->og_loin; ?></td>
                                                <td class="text-center"><?php echo $reponses->od_loin; ?></td>
                                                <td class="text-center"><?php echo $reponses->og_pres; ?></td>
                                                <td class="text-center"><?php echo $reponses->od_pres; ?></td>
                                                <td class="txt-oflo"><a class="text-primary" href="admin.php?page=modify&action=edit_permis&dossier_permis=<?php echo $reponses->dossier_permis ?>"><i class="fa fa-edit"></i>Modifier</a></td>
                                                <td class="txt-oflo"><a class="text-danger" href="" onclick="event.preventDefault();confirm('êtes-vous sur que vous voulez supprimer?') && window.location.replace('admin.php?page=permis&action=delete&dossier_permis=<?php echo $reponses->dossier_permis ?>')"><i class="fa fa-trash-o"></i></span>Supprimer</a></td>
                                                <td></td>
                                            </tr>
                                            <?php endwhile ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php } ?> 
                <!-- ============================================================== -->
    </div>
    


<?php getFooter(); ?>