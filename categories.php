<?php include('partials-front/menu-normal.php'); ?>





<!-- CAtegories Section Starts Here -->
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
                    <h4><?php echo $title; ?> </h4>

                    <p>
                        <?php echo $description; ?>
                    </p>
                </div>
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



<?php include ('partials-front/footer.php'); ?>