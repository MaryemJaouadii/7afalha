<?php include('partials-front/menu-principal.php');


if(isset($_SESSION['role']))
{
    
    if ($_SESSION['role']!='seller') {
        //header('location:'.SITE_URL.'login-seller.php');
        echo "<script type='text/javascript'>window.top.location='http://localhost/blessed/login-seller.php'</script>"; exit;
        
    }
    if (isset($_SESSION['username'])) {
        echo $_SESSION['username'];
    }
}

if (isset($_SESSION['add'])) {
    echo $_SESSION['add'];
    unset ($_SESSION['add']);
}




?>


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
                $id_seller = $_GET['id'];
            }
            ?>


<!-- weare -->

<div class="weare">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>My Offers</h2>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                        Orders
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">My Orders</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;
                                    </button>
                                </div>
                                <div class="modal-body">



                                    <?php 
                                    
                                    $sql7="select * from order_managemenet where seller_id='$id_seller'";
                                    $res7=mysqli_query($conn,$sql7);
                                    $coun7=mysqli_num_rows($res7);
                                    if ($coun7>0) {
                                        while ($row7=mysqli_fetch_assoc($res7)) {
                                            
                                            $id_or=$row7['id'];
                                            $annonce_id=$row7['annonce_id'];
                                            $price_or=$row7['price'];
                                            $qty_or=$row7['qty'];
                                            $total_or=$row7['total'];
                                            $date_or=$row7['order_date'];
                                            $name_cus=$row7['full_name'];
                                            $phone_cus=$row7['phone_number'];
                                            $email_cus=$row7['email'];
                                            $address_cus=$row7['address'];
                                            $city_cus=$row7['city'];
                                            $zip_cus=$row7['zip'];
                                            

                                            
                                            $sql8="select image_name,title from annonce where id='$annonce_id'";
                                            $res8=mysqli_query($conn,$sql8);
                                            $coun8=mysqli_num_rows($res8);
                                            if ($coun8>0) {
                                                while ($row8=mysqli_fetch_assoc($res8)) {
                                                    
                                                    $image_or=$row8['image_name'];
                                                    $title_or=$row8['title'];
                                                    ?>

                                    <div class="order-pour-vendeur">

                                        <table class="tbl-full">
                                            <tr>

                                                <th>Image</th>
                                                <th>Title</th>
                                                <th>Date</th>
                                                <th>Price</th>
                                                <th>Quanity</th>
                                                <th>Total</th>
                                                <th>Full Name</th>
                                                <th>Phone</th>
                                                <th>Address</th>
                                                <th>City</th>
                                                <th>Zip</th>
                                            </tr>


                                            <tr>
                                                <td> <i><img src="<?php echo SITE_URL;?>images/annonce/<?php echo $image_or;?>"
                                                            alt="#" width="50px" /></i> </td>
                                                <td> <?php echo $title_or;?></td>
                                                <td> <?php echo $date_or;?></td>
                                                <td><?php echo $price_or;?> </td>
                                                <td><?php echo $qty_or;?> </td>
                                                <td> <?php echo $total_or;?></td>
                                                <td> <?php echo $name_cus;?></td>
                                                <td><?php echo $phone_cus;?> </td>
                                                <td> <?php echo $address_cus;?></td>
                                                <td> <?php echo $city_cus;?></td>
                                                <td><?php echo $zip_cus;?> </td>




                                            </tr>


                                        </table>
                                        <!-- <a href="#">
                                            <h1> X </h1>
                                        </a> -->
                                        <button type="button" class="close">
                                            <span aria-hidden=" true">&times;
                                        </button>




                                    </div>


                                    <?php

                                    }
                                    } else {
                                        echo "row 8 has no data";
                                    }


                                    }
                                    }else {
                                        echo "No orders yet";
                                    }
                                    ?>








                                </div>
                                <div class=" modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary" onClick="
                                        window.location.href=window.location.href" data-dismiss="modal">Save
                                        changes</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <a href=" <?php echo SITE_URL; ?>add-annonce.php?id=<?php echo $id_seller; ?>"> <img
                        src="images/plus-icon-pink" alt="" width=100px height=2px>
                </a>

            </div>
        </div>

        <div class="row">




            <?php
           
           //SQL Query to Get the Selected content
           $sql = "SELECT * FROM annonce WHERE seller_id='$id_seller'";
           $res=mysqli_query($conn,$sql);
           $count=mysqli_num_rows($res);
           if($count>0) {
               while($row=mysqli_fetch_assoc($res)) {
                  $id=$row['id'];
                   $title=$row['title']; 
                   $description=$row['description'];
                   $price=$row['price'];
                   $image_name=$row['image_name'];
               
           
           ?>


            <div class="annonce">


                <div class="imagee-annonce">

                    <i><img src="<?php echo SITE_URL;?>images/annonce/<?php echo $image_name;?>" alt="#" /></i>


                </div>
                <div class="contenu-annonce">

                    <span style="color:#d8516e"> <strong> <?php echo $price ;?></strong> </span>
                    <br>
                    <strong><?php echo $title ; ?></strong>
                    <p><?php echo $description ; ?></p>
                    <div class="right">
                        <a class=" update-annonce" href="update-annonce.php?id=<?php echo $id;?>">
                            Update</a>
                        <a class="delete-annonce"
                            href="delete-annonce.php?id=<?php echo $id;?>&id_seller=<?php echo $id_seller; ?>">Delete</a>
                    </div>
                </div>





            </div>

            <?php
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
    <?php include ('partials-front/footer.php'); ?>