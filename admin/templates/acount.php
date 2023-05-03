<?php getHeader(); ?>

<!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor" style="color: rgb(218,5,5)"><b>Profile</b></h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="?page=accueil">Acceuil</a></li>
                                <li class="breadcrumb-item active">Mise à jour</li>
                            </ol>
                            
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row">
                   
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-12 col-xlg-9 col-md-7">
                        <div class="card">
                            <!-- Tab panes -->
                            <div class="card-body">
                                <?php if(isset($alert)){ echo alertMessage($alert);} ?>
                                <form class="form-horizontal form-material" method="POST" action="">
                                    <div class="form-group">
                                        <label style="color:blue;" class="col-md-12"><b>Full Name</b></label>
                                        <div class="col-md-12">
                                            <input name="name" type="text" placeholder="enter le nom d'utilisateur"
                                                class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label style="color:blue;" for="example-email" class="col-md-12"><b>Email</b></label>
                                        <div class="col-md-12">
                                            <input name="email" type="email" placeholder="entrer l'email"
                                                class="form-control form-control-line" name="example-email"
                                                id="example-email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label style="color:blue;" class="col-md-12"><b>Ancien mot de passe</b></label>
                                        <div class="col-md-12">
                                            <input name="OldPassword" type="password" placeholder="enter l'ancien mot de passe"
                                                class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label style="color:blue;" class="col-md-12"><b>Nouveau mot de passe</b></label>
                                        <div class="col-md-12">
                                            <input name="NewPassword" type="password" placeholder="enter le nouveau mot de passe"
                                                class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label style="color:blue;" class="col-md-12"><b>Confirmer le nouveau mot de passe</b></label>
                                        <div class="col-md-12">
                                            <input name="ConfirmNewPassword" type="password" placeholder="enter le nouveau mot de passe"
                                                class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button type="submit" name="modifier" class="btn btn-primary p-l-40 p-r-40">Modifier</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- Row -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->

<?php getFooter(); ?>