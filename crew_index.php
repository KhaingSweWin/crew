<?php
include_once "controller/crewcontroller.php";

$crewcontroller=new CrewController();
$results=$crewcontroller->showCrews();

?>
<?php include_once "master_layouts/header.php";?>


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Crew List</h1>
                        <a href="crew_create.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Add Crew </a>
                    </div>

                    <!-- Content Row -->
                    <div class="row">
                        <div class="col">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                          <td> First Name </td>
                                          <td> Last Name</td>
                                          <td> Rank</td>
                                          <td> Porposed Vessel Type</td>
                                          <td> Nationality </td>
                                          <td> Actions </td>
                                        </tr>
                                    </thead>
                                    <tbody id="tbody">
                        <?php
                        foreach($results as $result){
                          echo "<tr>";
                          echo "<td>" . $result['firstname']."</td>";
                          echo "<td>" . $result['lastname']."</td>";
                          echo "<td>" . $result['rank']."</td>";
                          echo "<td>" . $result['vesseltype']."</td>";
                          echo "<td>" . $result['nationality']."</td>";
                          echo "<td cid=".$result['id']."><a href='crew_detail.php?cid=". $result['id'] ."' class='btn btn-info mx-2s'>Read</a><a href='crew_edit.php?cid=". $result['id'] ."' class='btn btn-warning mx-2'>Edit</a><a class='btn btn-danger delete' ><i class='fa fa-trash'></i></a></td>";
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