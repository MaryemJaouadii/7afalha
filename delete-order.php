<?php 
    //Include COnstants Page
    include('config/constants.php');

    //echo "Delete content Page";

    if(isset($_GET['id'])) //Either use '&&' or 'AND'
    {
        //Process to Delete
        //echo "Process to Delete";

        //1.  Get ID and Image NAme
        $id = $_GET['id'];
    
        
        //3. Delete content from Database
        $sql = "DELETE FROM order_managemenet  WHERE id=$id";
        //Execute the Query
        $res = mysqli_query($conn, $sql);

        //CHeck whether the query executed or not and set the session message respectively
        //4. Redirect to Manage content with Session Message
        if($res==true)
        {
            //content Deleted
            $_SESSION['delete'] = "<div class='success'>Announcement Deleted Successfully.</div>";
            header("location:".SITE_URL."index-vendeur.php?id=$id_seller");
        }
        else
        {
            //Failed to Delete content
            $_SESSION['delete'] = "<div class='error'>Failed to Delete Content .</div>";
          //  header('location:'.SITE_URL.'admin/manage-content.php');
        }

        

    }
    else
    {
        //Redirect to Manage content Page
        //echo "REdirect";
        $_SESSION['unauthorize'] = "<div class='error'>Unauthorized Access.</div>";
      //  header('location:'.SITE_URL.'admin/manage-content.php');
    }

?>