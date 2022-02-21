<?php  include('partials/menu.php');  ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Add Admin</h1>
        <?php 
        if(isset($_SESSION['add'])) {
            echo $_SESSION['add']; // displaying session message
            unset($_SESSION['add']);//removing session message
        } ?>
        <form action="" method="POST">

            <table class="tbl-30">
                <tr>
                    <td>Full Name:</td>
                    <td><input type="text" name="full_name" placeholder="type your name"></td>
                </tr>
                <tr>
                    <td>Username:</td>
                    <td><input type="text" name="username" placeholder="choose a user name" required></td>


                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="password" name="password" placeholder="type your password" required></td>


                </tr>

                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Add Admin" class="btn-secondary" required>
                    </td>
                </tr>
            </table>
        </form>
    </div>



</div>
<?php include('partials/footer.php'); ?>


<?php 
//process the value from form and save it in the database

//check whether the sublit button is clicked or not
if(isset($_POST['submit']))
{
//retreive data from form
$full_name=$_POST['full_name'];
$username=$_POST['username'];
$password= md5( $_POST['password']); //password encryption with MD5
    
//1. sql query to save data into database
$sql="insert into user values(null,'$full_name','$username','$password','admin','yes',null,5648796)";

//2. execute query and save data into db



//3. excuitng query and saving data into db
$res= mysqli_query($conn, $sql) ;

//4. check whthere the (query is executed ) data is inserted or not and display appropirate message
if ($res==TRUE) {
   //create a session variable to display message
   $_SESSION['add'] = "Admin added Successfully !" ;
   //redirect page to manage admin
   header("location:".SITE_URL.'admin/manage-admin.php');
}
else {
    $_SESSION['add'] = "Failed to add admin !" ;
   //redirect page to manage admin
   header("location:".SITE_URL.'admin/add-admin.php');
}
}



?>