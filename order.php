<?php include('partials-front/menu-normal.php'); ?>


<?php
if (isset($_GET['id'])){
    $id=$_GET['id'];
    $sql = "SELECT * FROM annonce WHERE id='$id'";
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


<!-- content sEARCH Section Starts Here -->

<div class="container">

    <h2 class="text-center text-white">Fill this form to confirm your order.</h2>

    <form action="" class="order" method="POST">
        <fieldset>
            <legend>Selected Content</legend>

            <div class="contenu-du-modal">
                <img src="<?php echo SITE_URL;?>images/annonce/<?php echo $image_name;?>" alt="#" width="300px"
                    height="100px" />
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

                    <input type="button" style="background-color:white; color:#666666;  border: white 1px solid;"
                        onclick="
                                                decrementValue()" value="-" class="btn btn-primary" />
                    <input type="number" id="number" value="0" class="contactus" name="qty" />
                    <input type="button" onclick="incrementValue()"
                        style="background-color:white; color:#666666;  border: white 1px solid;" class="btn btn-primary"
                        value="+" />

                    <br>
                    <br>
                    <div class="total-price">
                        <label class="modal-title"> Total Price: </label>
                        <input type="number" id="total" value="0" name="total" class="contactus" readonly />
                        <label class="modal-title" style="color: #767676;"> Free shipping: 6 TND </label>
                    </div>

                    <script>
                    function incrementValue() {
                        var value = parseInt(document.getElementById('number').value, 10);
                        value = isNaN(value) ? 0 : value;
                        value++;
                        document.getElementById('number').value = value;
                        document.getElementById('total').value = value * Number(<?php echo $price;?>);

                    }

                    function decrementValue() {
                        var value = parseInt(document.getElementById('number').value, 10);
                        value = isNaN(value) ? 0 : value;
                        value--;
                        document.getElementById('number').value = value;
                        document.getElementById('total').value = value * Number(<?php echo $price;?>);
                    }
                    </script>
                </div>
            </div>
        </fieldset>



        <!-- <legend>Delivery Details</legend> -->



        <!-- regist -->

        <legend>Delivery Details</legend>


        <div class=" form-row">
            <div class="form-group col-md-6">
                <label for="inputPassword4">Full Name</label>
                <input type="text" class="form-control" id="inputPassword4" name="full_name" placeholder="Full Name">
            </div>
            <div class="form-group col-md-6">
                <label for="inputEmail4">Email</label>
                <input type="email" class="form-control" id="inputEmail4" name="email" placeholder="Email Address">
            </div>

        </div>
        <div class="form-group">
            <label for="inputAddress">Address</label>
            <input type="text" class="form-control" id="inputAddress" name="address" placeholder="1234 Main St">
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputCity">Phone Number</label>
                <input type="number" class="form-control" id="inputCity" name="phone_number">
            </div>
            <div class="form-group col-md-4">
                <label for="inputState">Governorate</label>
                <select id="inputState" class="form-control" name="city">
                    <option selected>Ariana</option>
                    <option selected>Béja</option>
                    <option selected>Ben Arous</option>
                    <option selected>Bizerte</option>
                    <option selected>Gabes</option>
                    <option selected>Gafsa</option>
                    <option selected>Nabeul</option>
                    <option selected>Jendouba</option>
                    <option selected>Kairouan</option>
                    <option selected>Kasserine</option>
                    <option selected>Kebili</option>
                    <option selected>Kef</option>
                    <option selected>Mahdia</option>
                    <option selected>Manouba</option>
                    <option selected>Medenine</option>
                    <option selected>Monastir</option>
                    <option selected>Sfax</option>
                    <option selected>Sidi Bouzid</option>
                    <option selected>Siliana</option>
                    <option selected>Sousse</option>
                    <option selected>Tataouine</option>
                    <option selected>Tozeur</option>
                    <option selected>Tunis</option>
                    <option selected>Zaghouan</option>


                </select>
            </div>
            <div class="form-group col-md-2">
                <label for="inputZip">Zip</label>
                <input type="text" class="form-control" id="inputZip" name="zip">
            </div>
        </div>
        <!-- <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                        Check me out
                    </label>
                </div>
            </div> -->
        <input type="submit" name="submit" class=" btn btn-secondary btn-lg" value="Confirm Order">
    </form>

</div>





<!-- content sEARCH Section Ends Here -->

<?php 

if (isset($_POST['submit'])) {
    $total=$_POST['total'];
    $full_name=$_POST['full_name'];
    $email=$_POST['email'];
    $phone_number=$_POST['phone_number'];
    $address=$_POST['address'];
    $city=$_POST['city'];
    $zip=$_POST['zip'];
    $qty=$_POST['qty'];
    $date=date("Y-m-d");
    
    if ($qty!=0 ) {

    $req="insert into order_managemenet values (null,$id,$price,$qty,$total,'$date','$full_name',$phone_number,'$email','$address',$id_seller,'$city',$zip)";
    $res3=mysqli_query($conn,$req);
    if($res3 == TRUE){
        
        echo "success";
        echo "<script type='text/javascript'>window.top.location='http://localhost/blessed/';</script>"; exit;
    } 
    else {
        
        echo "failed";
    }
}
else {
  
    echo "please specify a quantity";
    //var_dump('please specify qty');
}
    
}












                }
            }
        }
    }
    else {
        echo "no results found";
    }
    
}


?>


<?php include ('partials-front/footer.php'); ?>