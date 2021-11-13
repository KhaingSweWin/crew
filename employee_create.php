<?php

if(isset($_POST["submit"])){

   if(empty($_POST["name"]))
   {
       $name_error="Please enter name";
   } 
   else{
       $name=$_POST["name"];
   }
   if(empty($_POST["email"]))
   {
       $email_error="Please enter email";
   } 
   else{
       $email=$_POST["email"];
   }
   if(empty($_POST["phone"]))
   {
       $phone_error="Please enter phone";
   } 
   else{
       $phone=$_POST["phone"];
   }
   if(empty($_POST["address"]))
   {
       $address_error="Please enter address";
   } 
   else{
       $address=$_POST["name"];
   }
   $file=$_FILES["file"];
   print_r($file);
   $filename=$file["name"];
   $fileExt=explode(".",$filename); //divide string into arrays
   $file_actual_extension=strtolower(end($fileExt));
   $allowed=array("jpeg","jpg","png","pdf");
   if(in_array($file_actual_extension,$allowed))
   {
        if($file["error"]==0){
            if($file["size"]<5000000)
            {
                $filenewname=uniqid("reg",true).".".$file_actual_extension;
                print_r($filenewname);
                $filedestination="uploads/".$filenewname;
                move_uploaded_file($file["tmp_name"],$filedestination);
                header("location:success.php?filename=$filenewname");
            }
            else{
            }
        }
   }
   else
   {

   }
}

?>
<?php include_once "master_layouts/header.php";?>


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Employee Form -->
                        <div class="col-md-6">
                            <form class="form-group" method="post" enctype="multipart/form-data">
                                <div class="mb-3">
                                <label  class="form-label">Name </label>
                                <input type="text" class="form-control" name="name" require>
                                <span><?php if(isset($name_error)) echo $name_error;?></span>
                                </div>
                                <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="text" class="form-control" name="email" >
                                </div>
                                <div class="mb-3">
                                <label  class="form-label">Phone</label>
                                <input type="text" class="form-control" name="phone" >
                                </div>
                                <div class="mb-3">
                                <label  class="form-label">Address</label>
                                <input type="text" class="form-control" name="address" >
                                </div>
                                <div class="mb-3">
                                <input type="file" name="file" >
                                </div>
                                <div class="mb-3">
                                
                                <button type="submit" class="btn btn-primary" name="submit"> Submit
                                </div>
                            </form>
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