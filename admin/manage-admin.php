<?php  include('partials/menu.php')?>
<!-- Main content Section starts -->

<div class="main-content">
    <div class="wrapper">

        <h1>Admin management</h1>
        <!--button to add admin -->
        <br>

        <?php
         if(isset($_SESSION['add']))
        {
            echo $_SESSION['add'];// displaying session message
            unset($_SESSION['add']); //remocing session message
            //el faza hedhy bech ki taaml refresh yetnaha el msg
        }

        if (isset($_SESSION['delete']))    
         {
               echo $_SESSION['delete'];
                unset($_SESSION['delete']);
         }  
       
         if (isset($_SESSION['update'])) {
            echo $_SESSION['update'];
            unset($_SESSION['update']);
         }

         if(isset($_SESSION['user-not-found'])) {
             echo $_SESSION['user-not-found'];
             unset($_SESSION['user-not-found']);
             
         }

         if(isset($_SESSION['pwd-not-match'])) {
            echo $_SESSION['pwd-not-match'];
            unset($_SESSION['pwd-not-match']);
            
        }
        if(isset($_SESSION['change-pwd'])) {
            echo $_SESSION['change-pwd'];
            unset($_SESSION['change-pwd']);
            
        }
        
        
        ?>
        <br>
        <br>


        <a href="add-admin.php" class="btn-primary">Add Admin</a>
        <br>
        <br>
        <br>



        <table class="tbl-full">
            <tr>
                <th>S.N.</th>
                <th>Full Name</th>
                <th>Username</th>
                <th>Actions</th>
            </tr>


            <?php 
            //query to get all admin
            $sql = "select * from user where role='admin'";
            //execute the query
            $res = mysqli_query($conn,$sql);
            //check whetehr the query is executed or not
            if($res == TRUE) 
            {
                //count rows to check whetehr we have data in db
                $count = mysqli_num_rows($res); // fucntion to get all the rows in db
               $sn= 1;
               
               
                //check the number of rows
                if ($count >0 ) {
                    while($rows = mysqli_fetch_assoc($res)) // get all the rows
                     {
                         $id= $rows['id'];
                         $full_name=$rows['full_name'];
                         $username=$rows['username'];
                         

                         // display the values in our table:
                         ?>

            <tr>
                <td> <?php echo $sn++ ; ?></td>
                <td> <?php echo $full_name ; ?> </td>
                <td><?php echo $username ;?> </td>
                <td>
                    <a href="<?php echo SITE_URL;?>admin/update-password.php?id=<?php echo $id; ?>" class="btn-primary">
                        Change
                        password</a>
                    <a href="<?php echo SITE_URL; ?>admin/update-admin.php?id=<?php echo $id; ?>"
                        class="btn-secondary">Update Admin</a>
                    <a href="<?php echo SITE_URL; ?>admin/delete-admin.php?id=<?php echo $id; ?>"
                        class="btn-danger">Delete
                        Admin</a>

                </td>
            </tr>




            <?php
        
        
        } } else { } } else { } ?>



        </table>
        <div class=" clearfix">
        </div>



    </div>

</div>
<!-- Main content Section ends -->


<?php  include('partials/footer.php')?>