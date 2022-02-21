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
                        <h2>Register</h2>
                        <span>Welcome to our <strong style="color:#f55171">7affalha</strong> Web site! We hope you enjoy
                            your stay!</span>
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
                                <input class="contactus" placeholder="Full Name" type="text" name="full_name" />
                            </div>

                            <div class="col-md-6">
                                <input class="contactus" placeholder="Phone Number" type="password"
                                    name="phone_number" />
                            </div>
                            <div class="col-md-6">
                                <input class="contactus" placeholder="Email Address" type="password"
                                    name="email_address" />
                            </div>


                            <div class="col-md-6" class="contactus">
                                <select name=" category" required>
                                    <option value="Drinks">Drinks</option>
                                    <option value="Decoration">Decoration</option>
                                    <option value="Sweets">Sweets</option>
                                    <option value="Music">Music</option>
                                    <option value="Photography">Photography</option>
                                    <option value="Party Halls">Party Halls</option>
                                </select>
                            </div>


                            <div class="col-md-6">
                                <input class="contactus" placeholder="Password " type="text" name="password" />
                            </div>
                            <div class="col-md-6">
                                <input class="contactus" placeholder="confirm_password" type="text"
                                    name="confirm_password" />
                            </div>
                            <div class="col-sm-12">
                                <input type="submit" name="submit" value="Register Now" class=" register">
                                <br>
                                <div class="titlepage">
                                    <span>Already have an Account? <a
                                            href="<?php echo 'http://localhost/blessed/'; ?>login-seller.php"><strong>Login</strong></a>
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

if(isset($_POST['submit']))
{

//retreive data from form
$full_name=$_POST['full_name'];
$username=$_POST['email_address'];
$password= md5( $_POST['password']); //password encryption with MD5
$confirm_password=md5( $_POST['confirm_password']);
$category=$_POST['category'];
$phone_number=$_POST['phone_number'];



    $sqlv="select * from user where username='$username'";
    $resv=mysqli_query($conn,$sqlv);
    if($resv==TRUE) {
        $countv=mysqli_num_rows($resv); 
        if ($countv==0) {
            if($password==$confirm_password) {
                $sql="insert into user values(null,'$full_name','$username','$password','seller','yes','$category','$phone_number')";
                $res=mysqli_query($conn,$sql);
                if ($res==TRUE) {
                    // var_dump('tessstttt');die();
                    echo "<script type='text/javascript'>window.top.location='http://localhost/blessed/login-seller.php'</script>"; exit;
              
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

    <?php include('partials-front/footer.php'); ?>