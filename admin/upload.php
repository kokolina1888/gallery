 <?php include_once ("adminincludes/admin_header.php");?>
 <?php if(!$session->is_signed_in()) {redirect("login.php");} ?>

 

 <div id="wrapper">

    <!-- Navigation -->
    <?php include_once ("adminincludes/admin_top_nav.php");?>

    <?php include_once ("adminincludes/admin_sidebar_nav.php"); ?>

    <div id="page-wrapper">
    <?php 
$message = "";
 if (isset($_POST['submit'])) {
     $photo = new Photo();
    $photo->title = $_POST['title'];
    $photo->set_file($_FILES['file_upload']);

    if ($photo->save()) {
        $message = "Photo saved successfully!";
    } else {

        $message = join("<br>", $photo->errors);

    }
 }
 ?>

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        UPLOAD  <small>Subheading</small>
                    </h1>

                    <div class="col-md-6">
                    <?php echo $message; ?>
                        <form action="upload.php" method="post" enctype="multipart/form-data">

                            <div class="form-group">
                              <input type="text" name="title" class="form-control">
                          </div>
                          <div class="form-group">
                           <input type="file" name="file_upload" >
                       </div>
                       <input type="submit" name="submit">
                   </div>
               </form>
           </div>
       </div>
       <!-- /.row -->




   </div>
   <!-- /.container-fluid -->

   <?php include_once ("adminincludes/admin_footer.php"); ?>