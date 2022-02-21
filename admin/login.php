<?php  include('../config/constants.php');?>
<html>

<head>
    <title>Login - Food order system</title>
    <link rel="stylesheet" href="../css/admin.css">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">
</head>

<body>
    <!-- login -->
    <div id="regist" class="regist">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Login</h2>
                        <span>Welcome to Hafalha</span>
                    </div>
                </div>
            </div>
        </div>

        <?php 
                if(isset($_SESSION['login']))
                {
                    echo $_SESSION['login'];
                    unset($_SESSION['login']);
                }

                if(isset($_SESSION['no-login-message']))
                {
                    echo $_SESSION['no-login-message'];
                    unset($_SESSION['no-login-message']);
                }
            ?>


        <div class="container">
            <div class="row">
                <div class="col-md-12 ">
                    <form action="" method="POST" class="main_form">
                        <div class="row">

                            <div class="col-md-12">
                                <input class="contactus" placeholder="Username" type="text" name=" username">
                            </div>

                            <div class="col-md-12">
                                <input class="contactus" placeholder="password" type="password" name="password">
                            </div>

                            <div class="col-sm-12">
                                <input type="submit" name="submit" value="Login" class="register">

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end regist -->
</body>

</html>



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
        echo $_POST['password'];
        //$password = mysqli_real_escape_string($conn, $raw_password);

        //2. SQL to check whether the user with username and password exists or not
        $sql = "SELECT * FROM user WHERE username='$username' AND password='$raw_password'";

        //3. Execute the Query
        $res = mysqli_query($conn, $sql);

        //4. COunt rows to check whether the user exists or not
        $count = mysqli_num_rows($res);

        if($count==1)
        {
            //User AVailable and Login Success
            $_SESSION['login'] = "<div class='success'>Login Successful.</div>";
            $_SESSION['user'] = $username; //TO check whether the user is logged in or not and logout will unset it
//nzid session[role] = $role
            //REdirect to HOme Page/Dashboard
            header('location:'.SITE_URL.'admin/');
        }
        else
        {
            //User not Available and Login FAil
            $_SESSION['login'] = "<div class='error text-center'>Username or Password did not match.</div>";
            //REdirect to HOme Page/Dashboard
            header('location:'.SITE_URL.'admin/login.php');
        }


    }

?>