<?php
include_once "controller/vesselcontroller.php";
if(isset($_POST['submit']))
{
if(empty($_POST['name']))
$name_error="Enter vessel type";
else {
    $name=$_POST["name"];
}

if(empty($name_error))
{
    $vesselController=new VesselController();
    $result=$vesselController->addVessel($name);
}
}
?>
<?php include_once "master_layouts/header.php";?>


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Vessel Info</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>
                    <form method="post">
                        <!-- Content Row -->
                    <div class="row">
                        <div class="col-md-4">
                            <label class="form-label">Veseel Type</label>
                            <input type="text" name='name' class="form-control" >
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <button name="submit" class="btn btn-primary">Save</button>
                            <button name="cancel" class="btn btn-danger">Cancel </button>
                        </div>
                    </div>
                    </form>
                    

                    

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
<?php 
session_destroy();
?>

<?php include "master_layouts/footer.php";?>