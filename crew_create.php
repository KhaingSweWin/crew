<?php
include_once "controller/crewcontroller.php";
if(isset($_POST['submit']))
{
if(empty($_POST['firstname']))
$firstname_error="Enter first name";
else {
    $firstname=$_POST["firstname"];
}
if(empty($_POST['lastname']))
$lastname_error="Enter last name";
else {
    $lastname=$_POST["lastname"];
}
if(empty($firstname_error)  && empty($lastname_error))
{
    $crewController=new CrewController();
    $result=$crewController->addCrew($firstname,$lastname);
}
}
?>
<?php include_once "master_layouts/header.php";?>


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Crew Personal Info</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>
                    <form method="post">
                        <!-- Content Row -->
                    <div class="row">
                        <div class="col-md-4">
                            <label class="form-label">First Name</label>
                            <input type="text" name='firstname' class="form-control" >
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Middle Name</label>
                            <input type="text" name='middlename' class="form-control" >
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Last Name</label>
                            <input type="text" name='lastname' class="form-control">
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label class="form-label">Father Name</label>
                            <input type="text" name='fathername' class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Mother Name</label>
                            <input type="text" name='mothername' class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Nationality</label>
                            <input type="text" name='nationality' class="form-control">
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label class="form-label">Birthdate</label>
                            <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-calendar"></i></span>
                                <input type="text" class="form-control" id="birthdate" placeholder="birthdate">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Rank</label>
                            <input type="text" name='middlename' class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Vessel Type</label>
                            <select class="form-select" name="vessel_type">
                                <option>Tanker</option>
                                <option>Container</option>
                                <option>Passenger</option>
                                
                            </select>
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