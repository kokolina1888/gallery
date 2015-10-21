 <div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Admin
                <small>Subheading</small>
            </h1>

           <?php 
/*$user = new User();
$user->username = "example_username2";
$user->password = "123";
$user->first_name = "FirstName2";
$user->last_name = "LastName2";
$user->create();*/

$user = User::find_user_by_id(1);
$user->last_name = "Williams";
$user->update();

           ?>

<ol class="breadcrumb">
    <li class="active">
        <i class="fa fa-dashboard"></i> Dashboard
    </li>
    <li class="active"> 
        <i class="fa fa-file"> Blank Page</i>
    </li>
</ol>
</div>
</div>
<!-- /.row -->




</div>
<!-- /.container-fluid -->
