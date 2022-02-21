<?php include('partials-front/menu-normal.php'); ?>


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


<!-- Our -->
<div id="" class="Our2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">


                    <?php 
    //CHeck whether id is set or not 
    if(isset($_GET['id']))
    {
        //Get all the details
        $id = $_GET['id'];

        //SQL Query to Get the Selected content
        $sql2 = "SELECT * FROM category_management WHERE id=$id";
        //execute the Query
        $res2 = mysqli_query($conn, $sql2);

        //Get the value based on query executed
        $row2 = mysqli_fetch_assoc($res2);

        //Get the Individual Values of Selected content
        $title_categ = $row2['title'];
        

    }
    else
    {
        //Redirect to Manage content
        header('location:'.SITE_URL);
    }
?>



                    <h2> Our <?php echo $title_categ;  ?> </h2>
                    <span>We are glad to provide these services for your party with
                        perfect planning.</span>
                </div>
            </div>
        </div>

        <div class="row">
            <?php 
        // create sql query to dislpay categories from data base:
        $sql="select * from content_managament where category_id='$id' order by title ";
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
             $cat_name=$row['category_id'];
             ?>


            <div class="col-md-4">
                <a href="<?php echo SITE_URL; ?>annonces.php?id=<?php echo $id; ?>">
                    <div class="Our2_box">

                        <?php
                    if ($image_name =="") {
                        echo "<div class='error'> image not available </div>";
                    }
                    else {
                        ?>
                        <i><img src="<?php echo SITE_URL;?>images/content/<?php echo $image_name;?>" alt="#" /></i>

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























<?php include ('partials-front/footer.php'); ?>

<!--


<section class="content-menu">
    <div class="container">
        <h2 class="text-center">content Menu</h2>

        <div class="content-menu-box">
            <div class="content-menu-img">
                <img src="images/menu-pizza.jpg" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
            </div>

            <div class="content-menu-desc">
                <h4>content Title</h4>
                <p class="content-price">$2.3</p>
                <p class="content-detail">
                    Made with Italian Sauce, Chicken, and organice vegetables.
                </p>
                <br>

                <a href="#" class="btn btn-primary">Order Now</a>
            </div>
        </div>

        <div class="content-menu-box">
            <div class="content-menu-img">
                <img src="images/menu-burger.jpg" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
            </div>

            <div class="content-menu-desc">
                <h4>Smoky Burger</h4>
                <p class="content-price">$2.3</p>
                <p class="content-detail">
                    Made with Italian Sauce, Chicken, and organice vegetables.
                </p>
                <br>

                <a href="#" class="btn btn-primary">Order Now</a>
            </div>
        </div>

        <div class="content-menu-box">
            <div class="content-menu-img">
                <img src="images/menu-burger.jpg" alt="Chicke Hawain Burger" class="img-responsive img-curve">
            </div>

            <div class="content-menu-desc">
                <h4>Nice Burger</h4>
                <p class="content-price">$2.3</p>
                <p class="content-detail">
                    Made with Italian Sauce, Chicken, and organice vegetables.
                </p>
                <br>

                <a href="#" class="btn btn-primary">Order Now</a>
            </div>
        </div>

        <div class="content-menu-box">
            <div class="content-menu-img">
                <img src="images/menu-pizza.jpg" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
            </div>

            <div class="content-menu-desc">
                <h4>content Title</h4>
                <p class="content-price">$2.3</p>
                <p class="content-detail">
                    Made with Italian Sauce, Chicken, and organice vegetables.
                </p>
                <br>

                <a href="#" class="btn btn-primary">Order Now</a>
            </div>
        </div>

        <div class="content-menu-box">
            <div class="content-menu-img">
                <img src="images/menu-pizza.jpg" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
            </div>

            <div class="content-menu-desc">
                <h4>content Title</h4>
                <p class="content-price">$2.3</p>
                <p class="content-detail">
                    Made with Italian Sauce, Chicken, and organice vegetables.
                </p>
                <br>

                <a href="#" class="btn btn-primary">Order Now</a>
            </div>
        </div>

        <div class="content-menu-box">
            <div class="content-menu-img">
                <img src="images/menu-momo.jpg" alt="Chicke Hawain Momo" class="img-responsive img-curve">
            </div>

            <div class="content-menu-desc">
                <h4>Chicken Steam Momo</h4>
                <p class="content-price">$2.3</p>
                <p class="content-detail">
                    Made with Italian Sauce, Chicken, and organice vegetables.
                </p>
                <br>

                <a href="#" class="btn btn-primary">Order Now</a>
            </div>
        </div>


        <div class="clearfix"></div>



    </div>

</section>




-->