<?php include('partials-front/menu-normal.php');?>




<!-- content sEARCH Section Starts Here -->
<br>
<section class="content-search text-center">
    <div class="container">

        <form action="<?php echo SITE_URL; ?>content-search.php" method="POST">
            <input class="place-to-search" type="search" name="search" placeholder="Search for a content ..." required>
            <input type="submit" name="submit" value="Search" class="btn btn-primary">
        </form>

    </div>
</section>
<!-- content sEARCH Section Ends Here -->

<div class="">

</div>

<?php
            if(isset($_GET['id']))
            {
                //Get all the details
                $id = $_GET['id'];
            }
            ?>


<!-- weare -->

<div class="weare">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>Our Offers</h2>

                </div>

            </div>
        </div>

        <div class="row">




            <?php
           
           //SQL Query to Get the Selected content
           $sql = "SELECT * FROM annonce WHERE content_id='$id'";
           $res=mysqli_query($conn,$sql);
           $count=mysqli_num_rows($res);
           if($count>0) {
               while($row=mysqli_fetch_assoc($res)) {
                  $id=$row['id'];
                   $title=$row['title']; 
                   $description=$row['description'];
                   $price=$row['price'];
                   $image_name=$row['image_name'];
                   $id_seller=$row['seller_id'];
                   
                   $sql2="select full_name from user where id='$id_seller'";
                   $res2=mysqli_query($conn,$sql2);
                   $count2=mysqli_num_rows($res2);
                   if($count2>0){
                       while ($row2=mysqli_fetch_assoc($res2)) {
                           $name_seller=$row2['full_name'];
                    
               
           
           ?>

            <!-- <p><?php //echo $name_seller ; ?></p> -->

            <div class="annoncement">






                <div class="imagee-annonce-client">
                    <button type="button" data-toggle="modal" data-target="#exampleModalCenter">
                        <img src="<?php echo SITE_URL;?>images/annonce/<?php echo $image_name;?>" alt="#" width="200px"
                            height="100px" /> </button>
                    <span class="caption">
                        <div class="contenu-annonce-client">


                            <strong><?php echo $title ; ?></strong>
                            <br>

                            <p><?php// echo $description ; ?></p>
                            <span style="color:#d8516e"> <strong> <?php echo $price." DT";?></strong></span>


                        </div>


                    </span>

                </div>


                <!-- Button trigger modal -->
                <!-- <button type="button" data-toggle="modal" data-target="#exampleModalCenter">
                    Launch demo modal
                </button> -->

                <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class=" modal-dialog modal-dialog-centered modal-lg" role="document">
                        <div class="modal-content">
                            <!-- <div class="modal-header">
                                <h2 class="modal-title" id="exampleModalLongTitle"><?php echo $title?></h2>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div> -->
                            <div class="modal-body">
                                <div class="contenu-du-modal">
                                    <img src="<?php echo SITE_URL;?>images/annonce/<?php echo $image_name;?>" alt="#"
                                        width="300px" height="100px" />
                                    <div class="contenu-ecrit-du-modal">
                                        <strong>
                                            <h1 class="modal-title" id="exampleModalLongTitle"><?php echo $title?></h1>
                                        </strong>
                                        <br>
                                        <p><?php echo $description ; ?></p>
                                        <br>
                                        <strong>
                                            <h3 class="modal-title" id="exampleModalLongTitle"><?php echo $price?>
                                                TND
                                            </h3>
                                        </strong>
                                        <br>
                                        <form method="POST" action="">
                                            <input type="button"
                                                style="background-color:white; color:#666666;  border: white 1px solid;"
                                                onclick="
                                                decrementValue()" value="-" class="btn btn-primary" />
                                            <input type="number" id="number" name="qty" value="0" class="contactus" />
                                            <input type="button" onclick="incrementValue()"
                                                style="background-color:white; color:#666666;  border: white 1px solid;"
                                                class="btn btn-primary" value="+" />


                                            <script>
                                            function incrementValue() {
                                                var value = parseInt(document.getElementById('number').value, 10);
                                                value = isNaN(value) ? 0 : value;
                                                value++;
                                                document.getElementById('number').value = value;
                                            }

                                            function decrementValue() {
                                                var value = parseInt(document.getElementById('number').value, 10);
                                                value = isNaN(value) ? 0 : value;
                                                value--;
                                                document.getElementById('number').value = value;
                                            }
                                            </script>
                                    </div>
                                </div>
                                </p>

                            </div>
                            <div class="modal-footer">
                                <button type="submit" name="submit"
                                    style="background-color:#767676; border: #767676 1px solid;"
                                    class="btn btn-primary">Add to Cart</button>
                                <a type="button" style="color:#ffffff; " class=" btn btn-primary"
                                    href="order.php?id=<?php echo $id; ?>">Order
                                    Now</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>





            </div>

            <?php
               }
            }
                }



                
                if (isset($_POST['submit'])) {
                  
                    
                    if(isset($_SESSION['client'])) {
                       

                        $id_client=$_SESSION['client'];
                        $qty=$_POST['qty'];
                        $total=$qty*$price;
                        $sql_card="insert into card values(null,$id_client,$id,$price,$qty,$total,$id_seller,'$image_name','$title')";
                        $res_card=mysqli_query($conn,$sql_card);
                        if ($res_card == TRUE) {
                            ?>
            <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                    <path
                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                </symbol>
                <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
                    <path
                        d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
                </symbol>
                <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                    <path
                        d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                </symbol>
            </svg>
            <div class="alert alert-success d-flex align-items-center" role="alert" aria-live="assertive"
                aria-atomic="true" id="success-card">
                <div class="d-flex">
                    <div class="toast-body">

                        Card Added successfully.
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"
                        style="background-color:#D4EDDA;"> X</button>
                </div>
            </div>

            <!-- <div class="alert alert-success d-flex align-items-center" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
                    <use xlink:href="#check-circle-fill" />
                </svg>
                <div>
                    An example success alert with an icon
                </div>

            </div> -->


            <?php
            echo "<script type='text/javascript'>window.top.location='http://localhost/blessed/index-client.php?id='+$id_client</script>"; exit;
            }
            else {




            ?>
            <div class="toast align-items-center text-white bg-primary border-0" role="alert" aria-live="assertive"
                aria-atomic="true">
                <div class="d-flex">
                    <div class="toast-body">
                        Failed to add to card.
                    </div>
                    <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
                        aria-label="Close"></button>
                </div>
            </div>


            <!-- <div class="toast" role="alert" id="liveToast" aria-live="assertive" aria-atomic="true"
                style="float:right;">
                <div class="toast-body">
                    Hello,Please login to create a card.
                    <div class="mt-2 pt-2 border-top">
                        <a href="login-client.php" class="btn btn-primary btn-sm">Login</a>
                        <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="toast">Close</button>
                    </div>
                </div>
            </div> -->


            <?php

                            
                        }



                        
                      
                    }
                    else {
                        echo "session client is not isset";
                      //  echo "you must login first";
                        // echo "<script type='text/javascript'>window.top.location='http://localhost/blessed/login-client.php'</script>"; exit;
            ?>


            <div class="toast" role="alert" id="liveToast" aria-live="assertive" aria-atomic="true"
                style="float:right;">
                <div class="toast-body">
                    Hello,Please login to create a card.
                    <div class="mt-2 pt-2 border-top">
                        <a href="login-client.php" class="btn btn-primary btn-sm">Login</a>
                        <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="toast">Close</button>
                    </div>
                </div>
            </div>
            <?php
                    }
                    

                    
                    
                }




                }
                else {
                    ?>
            <div class="row">
                No Announcement
            </div>
            <?php
                }
                ?>


        </div>

    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <?php include ('partials-front/footer.php'); ?>