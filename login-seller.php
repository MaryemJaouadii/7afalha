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

                <div class="col-md-12">
                    <div class="titlepage">

                        <h2> <span style="color:white"> Welcome to 7affalha </span>
                        </h2>

                    </div>
                </div>

                <!-- end header inner -->
                <!-- end header -->
                <!-- banner -->

            </div>
    </header>
    <!-- end banner -->

    <!-- regist -->
    <div id=" regist" class="regist">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">

                        <h2>Login</h2>
                        <span>Hello Again! <strong style="color:#f55171">7affalha</strong> Missed you so much! </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form class="main_form" method="POST" action="">
                        <div class="row">

                            <div class="col-md-6">
                                <input class="contactus" placeholder="Email Address" type="text" name="username" />
                            </div>
                            <div class="col-md-6">
                                <input class="contactus" placeholder="Password " type="password" name="password" />
                            </div>

                            <div class="col-sm-12">
                                <input type="submit" name="submit" class="register" value="Login" />
                                <br>
                                <div class="titlepage">
                                    <span>You don't have an Account? <a
                                            href="<?php echo 'http://localhost/blessed/'; ?>register-seller.php"><strong>Register</strong></a>
                                    </span>
                                </div>
                            </div>


                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <br> <br> <br>
    <!-- end regist -->



    <?php 

    //CHeck whether the Submit Button is Clicked or NOt
    if(isset($_POST['submit']))
    {
        //Process for Login
        //1. Get the Data from Login form
        // $username = $_POST['username'];
        // $password = md5($_POST['password']);
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        
        $raw_password = md5($_POST['password']);
      //  echo $_POST['password'];
        //$password = mysqli_real_escape_string($conn, $raw_password);

        //2. SQL to check whether the user with username and password exists or not
        $sql = "SELECT * FROM user WHERE username='$username' AND password='$raw_password'";

        //3. Execute the Query
        $res = mysqli_query($conn, $sql);

        //4. COunt rows to check whether the user exists or not
        $count = mysqli_num_rows($res);

        if($count==1)
        {
            $row=mysqli_fetch_assoc($res);
            $category_seller=$row['category'];
            $role=$row['role'];
            $id_seller=$row['id'];
            //User AVailable and Login Success
            $_SESSION['login'] = "<div class='success'>Login Successful.</div>";
            $_SESSION['user'] = $username; //TO check whether the user is logged in or not and logout will unset it
//nzid session[role] = $role
$_SESSION['role']=$role;
            //REdirect to HOme Page/Dashboard
            echo "<script type='text/javascript'>window.top.location='http://localhost/blessed/index-vendeur.php?id='+$id_seller</script>"; exit;

    }
    else
    {
    //User not Available and Login FAil
    $_SESSION['login'] = "<div class='error text-center'>Username or Password did not match.Please try again!</div>";
    //REdirect to HOme Page/Dashboard

    // header('location:'.SITE_URL.'login-seller.php');
    }


    }

    ?>

    <?php include('partials-front/footer.php'); ?>