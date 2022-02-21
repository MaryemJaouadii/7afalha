<?php include('config/constants.php'); ?>
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
                                        <!--  navbar feha home-->
                                        <!-- navbar feha category -->
                                        <!-- navbar feha contents -->
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Contact</a>
                                        </li>
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
                        <h2>Add Announcement</h2>
                        <!-- <span>Hello Again! <strong>7affalha</strong> Missed you so much! </span> -->
                    </div>
                </div>
            </div>
        </div>


        <?php 
        
        if(isset($_GET['id']))
            {
            $id_seller = $_GET['id'];
                    
            $sql1="select category from user where id='$id_seller'";
            $res1=mysqli_query($conn,$sql1);
            $count1=mysqli_num_rows($res1);
            if($count1>0) {
                while ($row=mysqli_fetch_assoc($res1)) {
            $category=$row['category'];
    
            $sql2="select id from category_management user where title='$category'";
            $res2=mysqli_query($conn,$sql2);
            $count2=mysqli_num_rows($res2);
            if($count2>0) {
               while ($row2=mysqli_fetch_assoc($res2)) {
                $category_id=$row2['id'];
                   
               }
                
            }
        }
    }
            

            }       
        
        ?>


        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form class="main_form" method="POST" action="" enctype="multipart/form-data">
                        <div class="row">

                            <div class="col-md-6">
                                <input class="contactus" placeholder="Title" type="text" name="title" />
                            </div>
                            <div class="col-md-6">
                                <input class="contactus" placeholder="Description" type="text" name="description" />
                            </div>
                            <div class="col-md-6">
                                <input class="contactus" placeholder="Price" type="number" name="price" />
                            </div>
                            <div class="col-md-6">
                                <input type="file" name="image">
                                <select name="content">

                                    <?php 
                                //Create PHP Code to display categories from Database
                                //1. CReate SQL to get all active categories from database
                                $sql = "SELECT * FROM content_managament WHERE category_id='$category_id' order by title";
                                
                                //Executing qUery
                                $res = mysqli_query($conn, $sql);
                                
                                //Count Rows to check whether we have categories or not
                                $count = mysqli_num_rows($res);

                                //IF count is greater than zero, we have categories else we donot have categories
                                
                                if($count>0)
                                {
                                    //WE have categories
                                    while($row=mysqli_fetch_assoc($res))
                                    {
                                        //get the details of categories
                                        $id_content = $row['id'];
                                        $title_content = $row['title'];

                                        ?>

                                    <option value="<?php echo $id_content; ?>"><?php echo $title_content; ?></option>

                                    <?php
                                    }
                                }
                                else
                                {
                                    //WE do not have category
                                    ?>
                                    <option value="0">No Content Found</option>
                                    <?php
                                }
                            

                                //2. Display on Drpopdown
                            ?>

                                </select>
                            </div>

                            <div class="col-sm-12">
                                <input type="submit" name="submit" class="register" value="Add" />
                                <br>

                            </div>


                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <br> <br> <br>
    <!-- end regist -->

    <?php include ('partials-front/footer.php');?>


    <?php
    

    $sql4="select * from content_managament where title='$title_content'";
    $res4=mysqli_query($conn,$sql4);
    $count4=mysqli_num_rows($res4);
    if ($count4>0) {
    while ($row4=mysqli_fetch_assoc($res4)) {
            
    $content_id=$row4['id'];   
}
}    
    
    ?>



    <?php
            
if(isset($_POST['submit'])) {
    $title_annonce=$_POST['title'];
    $description_annonce=$_POST['description'];
    $price=$_POST['price'];
    $content=$_POST['content'];
    $date=date("Y-m-d");

    $filename = md5(time());
    $filename .= $_FILES["image"]["name"];
    $tempname = $_FILES["image"]["tmp_name"];
    $folder = "images/annonce/".$filename;
    
if (move_uploaded_file($tempname, $folder))  {
    $success = "Image uploaded successfully";
}else{
    $error = "Failed to upload image";
}

                    
                
               


        $sql3="insert into annonce values(null,'$title_annonce','$description_annonce',$price,'$filename',$category_id,$content,'$date',null,null,$id_seller)";
                        //     title = '$title_annonce',
                        //     description = '$description_annonce',
                        //     price = '$price',
                        //     image_name = '$image_name',
                        //     category_id = '$category_id',
                        //     content_id='$id_content',
                        //     seller_id='$id_seller'
                        // ";
        

                 
                  $res3 = mysqli_query($conn, $sql3) ;

              
                  if($res3 == TRUE)
                  {
                      //Data inserted Successfullly
                      $_SESSION['add'] = "<div class='success'>Announcement Added Successfully.</div>";
                     // echo "success";
                     // header("location:".SITE_URL."index-vendeur.php?id=$id_seller");
                      echo "<script type='text/javascript'>window.top.location='http://localhost/blessed/index-vendeur.php?id='+$id_seller</script>"; exit;
                  }
                  else
                  {
                      //FAiled to Insert Data
                      $_SESSION['add'] = "<div class='error'>Failed to Add Announcement.</div>";
                      echo "failed";
                     // header("location:".SITE_URL."index-vendeur.php?id=$id_seller");
                     echo "   ";
                     echo $title_annonce;
                     echo  "   ";
                     echo $description_annonce;
                     echo "  prince: ";
                     echo $price;
                     echo  " imagename:  ";
                     echo $filename;
                     echo " categoryid:  ";
                     echo $category_id;
                     echo " contentid:  ";
                     echo $content;
                     echo "   ";
                     echo $date;
                     echo "   ";
                     echo $id_seller;
               
                  }
  
                  
              








              
    
    

}





                
     ?>