<?php include('config/constants.php');?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="viewport" content="initial-scale=1, maximum-scale=1" />
    <!-- site metas -->
    <title>7affalha</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css" />
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css" />
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css" />
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen" />
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script
    ><![endif]-->
</head>
<!-- body -->

<?php
if (isset($_GET['id'])) {
$id=$_GET['id'];
$sql2="select * from annonce where id=$id";
$res2=mysqli_query($conn,$sql2);
$count2=mysqli_num_rows($res2);
if($count2>0) 
{
    while ($row2=mysqli_fetch_assoc($res2)) {
        $title=$row2['title'];
        $description=$row2['description'];
        $price=$row2['price'];
        $current_image=$row2['image_name'];
        $current_content=$row2['content_id'];
        $category_id=$row2['category_id'];
        $id_seller=$row2['seller_id'];
       
        
        
    } 
}
}

?>




<body class="main-layout">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="#" /></div>
    </div>
    <!-- end loader -->
    <!-- header -->
    <header>
        <!-- header inner -->
        <div class="head_top">
            <div class="container">
                <div class="header">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                            <div class="full">
                                <div class="center-desk">
                                    <div class="logo">
                                        <a href="index.html"><img src="images/logo-dancing.png" wi alt="#" /></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                            <nav class="navigation navbar navbar-expand-md navbar-dark">
                                <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#navbarsExample04" aria-controls="navbarsExample04"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarsExample04">
                                    <ul class="navbar-nav mr-auto">
                                        <!-- navbarrrr feha echo site_url -->
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end header inner -->
            <!-- end header -->
            <!-- banner -->
            <section class="banner_main">

            </section>
        </div>
    </header>
    <!-- end banner -->


    <!-- regist -->
    <div id=" regist" class="regist">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Update Announcement</h2>
                        <!-- <span>Hello Again! <strong>7affalha</strong> Missed you so much! </span> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form class="main_form" method="POST" action="" enctype="multipart/form-data">
                        <div class="row">

                            <div class="col-md-6">
                                <input class="contactus" placeholder="Title" type="text" name="title"
                                    value="<?php echo $title; ?>" />
                            </div>
                            <div class="col-md-6">
                                <input name="description" class="contactus" type="text"
                                    value="<?php echo $description; ?>">

                            </div>
                            <div class="col-md-6">
                                <input class="contactus" placeholder="Price" type="number" name="price"
                                    value="<?php echo $price; ?>" />
                            </div>
                            <div class="col-md-6">









                                <?php 
                                if($current_image == "")
                                {
                                    //Image not Available 
                                    echo "<div class='error'>Image not Available.</div>";
                                }
                                else
                                {
                                    //Image Available
                                    ?>
                                <img src="<?php echo SITE_URL; ?>images/annonce/<?php echo $current_image; ?>"
                                    width="100px" height="100px">
                                <?php
                                }
                                 ?>

                                <input type=" file" name="image" placeholder="select new image">



                                <select name="content">

                                    <?php 
                                //Query to Get ACtive Categories
                                $sql = "SELECT * FROM content_managament WHERE category_id='$category_id' order by title";
                                //Execute the Query
                                $res = mysqli_query($conn, $sql);
                                //Count Rows
                                $count = mysqli_num_rows($res);

                                //Check whether category available or not
                                if($count>0)
                                {
                                    //CAtegory Available
                                    while($row=mysqli_fetch_assoc($res))
                                    {
                                        $content_title = $row['title'];
                                        $content_id = $row['id'];
                                        
                                        //echo "<option value='$category_id'>$category_title</option>";
                                        ?>
                                    <option <?php if($current_content==$content_id){echo "selected";} ?>
                                        value="<?php echo $content_id; ?>"><?php echo $content_title; ?></option>
                                    <?php
                                    }
                                }
                                else
                                {
                                    //CAtegory Not Available
                                    echo "<option value='0'>Content Not Available.</option>";
                                }

                                ?>

                                </select>
                            </div>
                            <input type="hidden" name="id" value="<?php echo $id; ?>">
                            <input type="hidden" name="current_image" value="<?php echo $current_image; ?>">

                            <div class="col-sm-12">
                                <input type="submit" name="submit" class="register" value="Update" />
                                <br>

                            </div>


                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <br> <br> <br>

</body>
<!-- end regist -->

<?php include ('partials-front/footer.php');?>



<?php 
        
        if(isset($_POST['submit']))
        {
            //echo "Button Clicked";

            //1. Get all the details from the form
          //  $id = $_POST['id'];
            $title = $_POST['title'];
            $description = $_POST['description'];
            $price = $_POST['price'];
            $content=$_POST['content'];
          //  $current_image = $_POST['current_image'];
          
            


            //2. Upload the image if selected

            //CHeck whether upload button is clicked or not
            if(isset($_FILES['image']['name']))
            {
                //Upload BUtton Clicked
                $image_name = $_FILES['image']['name']; //New Image NAme

                //CHeck whether th file is available or not
                if($image_name!="")
                {
                    //IMage is Available
                    //A. Uploading New Image

                    //REname the Image
                    $ext = end(explode('.', $image_name)); //Gets the extension of the image

                    $image_name = "Content-Name-".rand(0000, 9999).'.'.$ext; //THis will be renamed image

                    //Get the Source Path and DEstination PAth
                    $src_path = $_FILES['image']['tmp_name']; //Source Path
                    $dest_path = "../images/content/".$image_name; //DEstination Path

                    //Upload the image
                    $upload = move_uploaded_file($src_path, $dest_path);

                    /// CHeck whether the image is uploaded or not
                    if($upload==false)
                    {
                        //FAiled to Upload
                        $_SESSION['upload'] = "<div class='error'>Failed to Upload new Image.</div>";
                        //REdirect to Manage content
                       // header('location:'.SITE_URL.'admin/manage-content.php');
                        //Stop the Process
                        die();
                    }
                    //3. Remove the image if new image is uploaded and current image exists
                    //B. Remove current Image if Available
                    if($current_image!="")
                    {
                        //Current Image is Available
                        //REmove the image
                        $remove_path = "../images/content/".$current_image;

                        $remove = unlink($remove_path);

                        //Check whether the image is removed or not
                        if($remove==false)
                        {
                            //failed to remove current image
                            $_SESSION['remove-failed'] = "<div class='error'>Faile to remove current image.</div>";
                            //redirect to manage content
                            //header('location:'.SITE_URL.'admin/manage-content.php');
                            //stop the process
                            die();
                        }
                    }
                }
                else
                {
                    $image_name = $current_image; //Default Image when Image is Not Selected
                }
            }
            else
            {
                $image_name = $current_image; //Default Image when Button is not Clicked
            }

            

            //4. Update the content in Database
            $sql3 = "UPDATE annonce SET 
                title = '$title',
                description = '$description',
                price = $price,
                content_id=$content,
                image_name = '$image_name'
                
                WHERE id=$id
            ";

            //Execute the SQL Query
            $res3 = mysqli_query($conn, $sql3);

            //CHeck whether the query is executed or not 
            if($res3==true)
            {
                //Query Exectued and content Updated
                $site='http://localhost/blessed/index-vendeur.php?id=$id_seller';
                $_SESSION['update'] = "<div class='success'>Content Updated Successfully.</div>";
                echo "<script type='text/javascript'>window.top.location='http://localhost/blessed/index-vendeur.php?id='+$id_seller;</script>"; exit;
               // header("location:".SITE_URL."index-vendeur.php?id=$id_seller");
                
            }
            else
            {
                //Failed to Update content
                $_SESSION['update'] = "<div class='error'>Failed to Update Content.</div>";
                echo "   ";
                echo $title;
                echo  "   ";
                echo $description;
                echo "  prince: ";
                echo $price;
                echo  " imagename:  ";
                echo $image_name;
                echo " categoryid:  ";
                echo $category_id;
                echo " contentid:  ";
                echo $content;
                echo "   ";
                echo "   ";
                echo $id_seller;
          
            }

            
        }
    
    ?>