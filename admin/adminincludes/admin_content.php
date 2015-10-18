 <div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Admin
                <small>Subheading</small>
            </h1>

            <?php


                   //$result_set = User::find_all_users();                   

                    //while($row = mysqli_fetch_array($result_set)) {

                      //echo $row['username'] . '<br>';
                    //}
           /* $user_found = User::find_user_by_id(3);   

            $user = User::instantiation($user_found);

            echo $user->username;        

            echo "<br>";

                   // echo $user_found['username'];*/
           /* $users = User::find_all_users();

            foreach ($users as $user) {
                echo $user->username . '/' . $user->id . '<br>';
            }*/
        /*echo "<pre>";            
        var_dump($users);
        echo "</pre>";*/

        $user_found = User::find_user_by_id(3);

        echo $user_found->username;

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
