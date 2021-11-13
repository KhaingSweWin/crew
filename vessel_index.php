<?php
include_once "controller/vesselcontroller.php";

$vesselcontroller=new VesselController();
$results=$vesselcontroller->showVessels();

?>
<?php include_once "master_layouts/header.php";?>


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Vessel Type</h1>
                        <a href="vessel_create.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Add Vessel </a>
                    </div>

                    <!-- Content Row -->
                    <div class="row">
                        <div class="col">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                          <td> Vessel Name </td>
                                          
                                          <td> Actions </td>
                                        </tr>
                                    </thead>
                                    <tbody>
                        <?php
                        foreach($results as $result){
                          echo "<tr>";
                          echo "<td>" . $result['name']."</td>";
                          
                          echo "<td><a href='#' class='btn btn-warning mx-2'>Edit</a><a href='#' class='btn btn-danger'>Delete</a></td>";
                          echo "</tr>";
                        }
                        ?>
                        </tbody>
                                </table>
                            </div>
                        </div>
                      
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