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
                                        <a href="index.html"><img src="images/logo-dancing.png" alt="#" /></a>
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
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?php echo SITE_URL; ?>"> Home </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link"
                                                href="<?php echo SITE_URL; ?>categories.php">Categories</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?php echo SITE_URL; ?>contents.php">Content</a>
                                        </li>
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
                <div class="container">
                    <div class="row d_flex">
                        <div class="col-md-12">
                            <div class="text-bg">
                                <span> Love Wedding Party Graduation</span>
                                <h1>and more !</h1>
                                <!-- <a href="<?php echo SITE_URL; ?>login-client.php">Join as Client</a> -->
                                <a href="<?php echo SITE_URL; ?>login-seller.php">Join as Seller</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </header>
    <!-- end banner -->


    <!-- content sEARCH Section Starts Here -->
    <br>
    <section class="content-search text-center">
        <div class="container">

            <form action="<?php echo SITE_URL; ?>content-search.php" method="POST">
                <input class="place-to-search" type="search" name="search" placeholder="Search for a content ..."
                    required>
                <input type="submit" name="submit" value="Search" class="btn btn-primary">
            </form>

        </div>
    </section>
    <!-- content sEARCH Section Ends Here -->





    <!-- weare -->
    <div class="weare">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Who We Are</h2>
                        <span>A group of students who want to make your party a JOY!</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="row">
                        <div class="col-md-6 margin_boo">
                            <div class="weare_box">
                                <figure><img src="images/weare_img1.png" alt="#" /></figure>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="weare_box">
                                <figure><img src="images/bd1.png" alt="#" /></figure>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="weare_box">
                        <p>
                            We are two motivated software engineering girls who aim to share happiness, love and fun!
                            With our website, you will be able to order whatever you need to make your party a joy!
                            We thought about every little detail you may need, and we will always do our best to offer
                            you the BEST SERVICE!
                        </p>
                        <a class="read_more" href="#">Read more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- weare -->
    <!-- Our -->
    <div id="" class="Our">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Our Planning Includes</h2>
                        <span>We are glad to provide these services for your party with
                            perfect planning.</span>
                    </div>
                </div>
            </div>

            <div class="row">
                <?php 
        // create sql query to dislpay categories from data base:
        $sql="select * from category_management";
        //execute the query 
        $res=mysqli_query($conn,$sql);
        //count the rows to check whether the categorie is available or not
        $count= mysqli_num_rows($res);
        if ($count >0)
         {
         while ($row=mysqli_fetch_assoc($res)) {
             $id=$row['id'];
             $title=$row['title'];
             $image_name=$row['image_name'];
             $description=$row['description'];
             ?>


                <div class="col-md-4">
                    <a href="<?php echo SITE_URL; ?>contents.php?id=<?php echo $id; ?>">
                        <div class="Our_box">

                            <?php
                    if ($image_name =="") {
                        echo "<div class='error'> image not available </div>";
                    }
                    else {
                        ?>
                            <i><img src="<?php echo SITE_URL;?>images/category/<?php echo $image_name;?>" alt="#" /></i>

                            <?php
                    
                    }
                    ?>
                            <h4><?php echo $title; ?> </h4> <br> <br>
                            <!--
                    <p>
                        <?php echo $description; ?>
                    </p> -->
                        </div>
                    </a>
                </div>



                <?php
         }   
        }
        else 
        {
            echo "<div class='error'>Category not added! </div>";
        }
        ?>

                <!--
            <div class="col-md-12">
                <a class="read_more" href="#">Read more</a>
            </div>
    -->
            </div>
        </div>
    </div>
    </div>
    <!-- end Our -->
    <!-- regist -->
    <div id="regist" class="regist">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Get Registered</h2>
                        <span>Register to our website to get notified about our newest offers!</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form class="main_form" method="POST">
                        <div class="row">
                            <div class="col-md-6">
                                <input class="contactus" placeholder="Full Name" type="text" name="full_name" />
                            </div>

                            <div class="col-md-6">
                                <input class="contactus" placeholder="Phone Number" type="text" name="phone_number" />
                            </div>
                            <div class="col-md-12">
                                <input class="contactus" placeholder="Email Address" type="text" name="username"
                                    required />
                            </div>
                            <div class="col-md-6">
                                <input class="contactus" placeholder="Password " type="text" name="password" required />
                            </div>
                            <div class="col-md-6">
                                <input class="contactus" placeholder="Confirm Password " type="text"
                                    name="confirm_password" />
                            </div>
                            <div class="col-sm-12">
                                <input class="register" type="submit" name="submit" value="Register Now">
                                <br>
                                <div class=" titlepage">
                                    <span>Already have an Account? <a
                                            href="<?php echo SITE_URL; ?>login-client.php"><strong>Login</strong></a>
                                    </span>
                                </div>
                            </div>

                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!-- end regist -->
    <!-- testimonial -->
    <div class="testimonial">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Testimonial</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor incididunt ut labore<br />
                            et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div id="myCarousel" class="carousel slide testimonial_Carousel" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="container">
                                    <div class="carousel-caption">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="test_box">
                                                    <div class="jons">
                                                        <i><img src="images/jons_img1.png" alt="#" /></i>
                                                        <h4>Jonson Donat</h4>
                                                    </div>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing
                                                        elit, sed do eiusmod aliquip ex ea commodo
                                                        consequat. Duis aute irure dolor in reprehe
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="test_box">
                                                    <div class="jons">
                                                        <i><img src="images/jons_img2.png" alt="#" /></i>
                                                        <h4>Jonson Donat</h4>
                                                    </div>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing
                                                        elit, sed do eiusmod aliquip ex ea commodo
                                                        consequat. Duis aute irure dolor in reprehe
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="container">
                                    <div class="carousel-caption">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="test_box">
                                                    <div class="jons">
                                                        <i><img src="images/jons_img1.png" alt="#" /></i>
                                                        <h4>Jonson Donat</h4>
                                                    </div>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing
                                                        elit, sed do eiusmod aliquip ex ea commodo
                                                        consequat. Duis aute irure dolor in reprehe
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="test_box">
                                                    <div class="jons">
                                                        <i><img src="images/jons_img2.png" alt="#" /></i>
                                                        <h4>Jonson Donat</h4>
                                                    </div>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing
                                                        elit, sed do eiusmod aliquip ex ea commodo
                                                        consequat. Duis aute irure dolor in reprehe
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="container">
                                    <div class="carousel-caption">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="test_box">
                                                    <div class="jons">
                                                        <i><img src="images/jons_img1.png" alt="#" /></i>
                                                        <h4>Jonson Donat</h4>
                                                    </div>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing
                                                        elit, sed do eiusmod aliquip ex ea commodo
                                                        consequat. Duis aute irure dolor in reprehe
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="test_box">
                                                    <div class="jons">
                                                        <i><img src="images/jons_img2.png" alt="#" /></i>
                                                        <h4>Jonson Donat</h4>
                                                    </div>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing
                                                        elit, sed do eiusmod aliquip ex ea commodo
                                                        consequat. Duis aute irure dolor in reprehe
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
<!-- end testimonial -->
<?php include ('partials-front/footer.php'); ?>

<?php 

if(isset($_POST['submit']))
{

//retreive data from form
$full_name=$_POST['full_name'];
$username=$_POST['username'];
$password= md5( $_POST['password']); //password encryption with MD5
$confirm_password=md5( $_POST['confirm_password']);
$phone_number=$_POST['phone_number'];



    $sqlv="select * from user where username='$username'";
    $resv=mysqli_query($conn,$sqlv);
    if($resv==TRUE) {
        $countv=mysqli_num_rows($resv); 
        if ($countv==0) {
            if($password==$confirm_password) {
                $sql="insert into user values(null,'$full_name','$username','$password','client','yes',null,'$phone_number')";
                $res=mysqli_query($conn,$sql);
                if ($res==TRUE) {
                    // var_dump('tessstttt');die();
                    echo "<script type='text/javascript'>window.top.location='http://localhost/blessed/login-client.php'</script>"; exit;
              
                }

            }
            else {
                echo "passwords don't match";
                
            }
            
        }
        else {
            echo "user already exists";
        }

    }

}

    
?>