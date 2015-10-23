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
$user->username = "example_username14";
$user->password = "123";
$user->first_name = "FirstName14";
$user->last_name = "LastName14";
$user->create();*/

/*$user = User::find_user_by_id(11);
$user->first_name = "Williams10";
$user->update();
//$user->delete();
/*$user = User::find_user_by_id(3);
$user->username = "Whatever";
$user->save();*/
//$user = new User();
//$user->username = "Whatever_6";
//$user->save();
$users = User::find_all();

foreach ($users as $user) {
   echo $user->username . "<br>";
}

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
