
<?php 

if(isset($_POST["submit"]))
{
    
    $file=$_FILES["upload_file"];
    
    $fileactualextension=explode('.',$file["name"]);
    $fileExt=strtolower(end($fileactualextension));
    $allowed=array('jpg','jpeg','png','pdf');
    if(in_array($fileExt,$allowed))
    {
        if($file["error"]===0){
            if($file["size"]<5000000)
            {
                $filenewname=uniqid('stu',true). ".".$fileExt;
                $filedestination="uploads/".$filenewname;
                move_uploaded_file($file["tmp_name"],$filedestination);
                header("location:success.php?filename=$filenewname");
            }

        }
    }
    else{
        echo "your file is denied";
    }

}
include_once "master_layouts/header.php";
?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Create Student</h1>
                        
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <form method="post" enctype="multipart/form-data">
                                        <input type="file" name="upload_file" >
                                        <button type="submit" name="submit">Create</button>
                                    </form>     
                                </div>
                            </div>
                        </div>

                        
                    </div>

                    

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

<?php include "master_layouts/footer.php";?>