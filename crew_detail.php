<?php
include_once "controller/crewcontroller.php";
$cid=$_GET["cid"];
$crewcontroller=new CrewController();
$result=$crewcontroller->showCrewInfo($cid);

?>
<?php include_once "master_layouts/header.php";?>


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Crew Detail Information</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Export PDF </a>
                    </div>

                    <!-- Content Row -->
                    <div class="row">
                        <div class="col-md-4">
                            <label class="col-sm-4 col-form-label">First Name</label>
                            <label class="col-sm-4 col-form-label">:<?php echo $result['firstname'];?></label>
                            
                        </div>
                        <div class="col-md-4">
                        <label class="col-sm-4 col-form-label">Middle Name</label>
                        <label class="col-sm-4 col-form-label">:<?php echo $result['firstname'];?></label>
                        </div>
                        <div class="col-md-4">
                        <label class="col-sm-4 col-form-label">Last Name</label>
                        <label class="col-sm-4 col-form-label">:<?php echo $result['firstname'];?></label>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label class="col-sm-4 col-form-label">First Name</label>
                            <label class="col-sm-4 col-form-label">:<?php echo $result['firstname'];?></label>
                            
                        </div>
                        <div class="col-md-4">
                        <label class="col-sm-4 col-form-label">Middle Name</label>
                        <label class="col-sm-4 col-form-label">:<?php echo $result['firstname'];?></label>
                        </div>
                        <div class="col-md-4">
                        <label class="col-sm-4 col-form-label">Last Name</label>
                        <label class="col-sm-4 col-form-label">:<?php echo $result['firstname'];?></label>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label class="col-sm-4 col-form-label">First Name</label>
                            <label class="col-sm-4 col-form-label">:<?php echo $result['firstname'];?></label>
                            
                        </div>
                        <div class="col-md-4">
                        <label class="col-sm-4 col-form-label">Middle Name</label>
                        <label class="col-sm-4 col-form-label">:<?php echo $result['firstname'];?></label>
                        </div>
                        <div class="col-md-4">
                        <label class="col-sm-4 col-form-label">Last Name</label>
                        <label class="col-sm-4 col-form-label">:<?php echo $result['firstname'];?></label>
                        </div>
                        
                    </div>

                    

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
<?php 
session_destroy();
?>

<?php include "master_layouts/footer.php";?>