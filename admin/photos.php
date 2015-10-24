<?php include_once ("adminincludes/admin_header.php"); ?>

<div id="wrapper">

    <!-- Navigation -->
    <?php include_once ("adminincludes/admin_top_nav.php"); ?>

    <?php include_once ("adminincludes/admin_sidebar_nav.php"); ?>
    <?php if(!$session->is_signed_in()) {redirect("login.php");} ?>

    <?php 
$photos = Photo::find_all();
    ?>

    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        PHOTOS  <small>Subheading</small>
                    </h1>
                    
                    <div class="class-md-12">

                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Photo</th>
                                    <th>Id</th>
                                    <th>Filename</th>
                                    <th>Title</th>
                                    <th>Size</th>
                                </tr>
                            </thead>

                            <tbody>

                            <?php foreach ($photos as $photo) : ?>
                                
                            

                                <tr>
                                    <td><img src="<?php echo $photo->picture_path()?>" width="162" alt=""></td>
                                    <td><?php echo $photo->photo_id; ?></td>
                                    <td><?php echo $photo->filename; ?></td>
                                    <td><?php echo $photo->title; ?></td>
                                    <td><?php echo $photo->size; ?></td>
                                </tr>

                            <?php endforeach; ?>


                            </tbody>
                        </table><!--End-of-table-->
                    </div>

                </div>
            </div>
            <!-- /.row -->

            


        </div>
        <!-- /.container-fluid -->

        <?php include_once ("adminincludes/admin_footer.php"); ?>