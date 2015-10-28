<?php include_once ("adminincludes/admin_header.php"); ?>

<div id="wrapper">

    <!-- Navigation -->
    <?php include_once ("adminincludes/admin_top_nav.php"); ?>

    <?php include_once ("adminincludes/admin_sidebar_nav.php"); ?>
    <?php if(!$session->is_signed_in()) {redirect("login.php");} ?>

    <?php 

    if (empty($_GET['id'])) {
        redirect("photos.php");
    } else {
        $photo = Photo::find_by_id($_GET['id']);

if (isset($_POST['update'])) {

    if ($photo) {
        $photo->title       = $_POST['title'];
        $photo->caption   = $_POST['caption'];
        $photo->alt       = $_POST['alt'];
        $photo->description = $_POST['description'];
    }

    $photo->save();



}
}


    //$photos = Photo::find_all();
?>

<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    PHOTOS  <small>Subheading</small>
                </h1>
                <form action="" method="post">

                    <div class="col-md-8">
                        <div class="form-group">
                            <input type="text" name="title" class="form-control" value="<?php echo $photo->title; ?>">
                        </div>
                         <div class="form-group">
                            <a href="#" class="thumbnail"><img src="<?php echo $photo->picture_path(); ?>" alt="" width="200"></a>
                        </div>
                        <div class="form-group">
                         <label for="caption">caption</label>
                         <input type="text" name="caption" class="form-control" value="<?php echo $photo->caption; ?>">
                     </div>
                     <div class="form-group">
                         <label for="alt">Alternate text</label>
                         <input type="text" name="alt" class="form-control" value="<?php echo $photo->alt; ?>">
                     </div>
                     <div class="form-group">
                         <label for="description">description</label>
                         <textarea name="description" cols="30" rows="10" class="form-control"><?php echo $photo->description; ?></textarea>
                     </div>


                 </div>
                 <div class="col-md-4">
                    <div class="photo-info-box">
                        <div class="photo-info-header">
                            <h4>Save <span id="toggle" class="glyphicon glyphicon-menu-up pull-right"></span></h4>
                        </div>
                    </div>
                    <div class="inside">
                        <div class="box-inner">
                            <p class="text">
                               <span class="glyphicon glyphicon-calendar"></span>Uploaded on 22 April, 2015
                           </p>
                           <p class="text">
                               Photo Id <span class="data photo-id-box">34</span>
                           </p>
                           <p class="text">
                               Filename<span class="data">image.jpeg</span>
                           </p>
                           <p class="text">
                               Filetype<span class="data">JPG</span>
                           </p>
                           <p class="text">
                             File size<span class="data">323232</span>
                         </p>
                     </div>
                     <div class="info-box-footer clearfix">
                         <div class="info-box-delete pull-left">
                             <a href="delete_photo.php?id=<?php echo $photo->id?>" class="btn btn-danger">Delete</a>
                         </div>
                         <div class="info-box-update pull-right">
                             <input type="submit" name="update" value="Update" class="btn btn-info">
                         </div>
                     </div>
                 </div>
             </div>

         </div>
     </div>
 </form>
</div><!-- /.row -->




</div>
<!-- /.container-fluid -->

<?php include_once ("adminincludes/admin_footer.php"); ?>