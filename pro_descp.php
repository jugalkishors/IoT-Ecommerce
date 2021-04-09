<?php
$product = $_GET['product'];
if ($product==NULL) {
  ?>
  <script type="text/javascript">
    window.open('index.php','_self');
  </script>
  <?php
}
else{
  
}
?>

<!DOCTYPE html>
<html >
<head>
  <!-- Site made with Mobirise Website Builder v4.8.2, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.8.2, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/picsart-07-02-03.07.41-96x96.png" type="image/x-icon">
  <meta name="description" content="Here you can see products that you want to buy in EDUStore.">
  <title>Search Your Products - EDUStore</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
</head>
<body>
  <section class="menu cid-rNRfFUfdlz" once="menu" id="menu1-b">
<?php
include "header.php";
    ?>
</section>

<section class="engine"><a href="https://mobiri.se/h"></a></section><section class="mbr-section form3 cid-rNUY5W8tO3" id="form3-e">


    

    

    <div class="container">
        <div class="row justify-content-center">
            <div class="title col-12 col-lg-8">
                
                
            </div>
        </div>

        <div class="row py-2 justify-content-center">
            <div class="col-12 col-lg-6  col-md-8 ">
                
                <form class="mbr-form" action="products.php" method="get">
    <div class="container">

    <input type="text" class="form-control" id="email" placeholder="Search Your Product" name="key" required="">
    <center>
    <button type="submit" class="btn btn-primary">GO</button>
    </center>
  </form>
            </div>
        </div>
    </div>
</section>

<section class="mbr-section content4 cid-rNUTZWUae8" id="content4-c">

   
    </div>
</div>

<style>
.vl {
  border-left: 4px solid orange;
  height: 90px;
}

.scrollbar-cyan::-webkit-scrollbar-track {
-webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
background-color: #F5F5F5;
border-radius: 10px; }

.scrollbar-cyan::-webkit-scrollbar {
width: 12px;
background-color: #F5F5F5; }

.scrollbar-cyan::-webkit-scrollbar-thumb {
border-radius: 10px;
-webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
background-color: #00bcd4; }

.bordered-cyan::-webkit-scrollbar-track {
-webkit-box-shadow: none;
border: 1px solid #00bcd4; }

.bordered-cyan::-webkit-scrollbar-thumb {
-webkit-box-shadow: none; }

.square::-webkit-scrollbar-track {
border-radius: 0 !important; }

.square::-webkit-scrollbar-thumb {
border-radius: 0 !important; }


.example-1 {
position: relative;
overflow-y: scroll;
height: 200px; }
</style>


<?php
  include "database.php";

  $qry="SELECT * FROM `products` WHERE id='$product'";
       $run=mysqli_query($con,$qry);
       if ($run == true)
       {
        
$count=0;

if(mysqli_num_rows($run)<1)
       {
        ?>

    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center pb-3 mbr-fonts-style display-2">
                    Your Product is not Found!!!
                </h2>
     <?php
       }
       else{
        ?>
        <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center pb-3 mbr-fonts-style display-2">
                    Here some result of products
                </h2>
        <?php
        $result = mysqli_fetch_array($run);
       ?>           
                
            </div>
        </div>
    </div>



<?php
    $price = $result['real_price'];
    ?>
<script type="text/javascript">
    var a = 0;
    function up(){
    document.getElementById("nm").stepUp();
    var w = document.getElementById("nm").value;
    document.getElementById("qnty").value =w;
     var y = w*<?php echo $price;?>;
     document.getElementById("price").value =y;
    document.getElementById("nms").innerHTML=y+" ₹";
    document.getElementById("cal").innerHTML=y+" ₹";
    }

    function down(){
    //var a = document.getElementById("nm").stepDown();
    document.getElementById("nm").stepDown();
    var w = document.getElementById("nm").value;
    document.getElementById("qnty").value =w;
    var y = w*<?php echo $price;?>;
    document.getElementById("price").value =y;
    document.getElementById("nms").innerHTML=y+" ₹";
    document.getElementById("cal").innerHTML=y+" ₹";
    }
</script>
<section class="container" style="background-color: white;">
  <div class="row">
<div class="col-md-6 col-lg-6"><img src="pro_img/<?php echo $result['pro_image']; ?>" height="400" width="400"></div>
    <div class="col-md-6 col-lg-6"><br><h2><?php echo $result['pro_name']; ?></h2><br><hr style="width: 100%; color: black;">
<br>
<div class="row">
  <div class="col-sm-6 col-lg-6"><p>Availability :&nbsp;&nbsp;&nbsp;<?php echo $result['availability']; ?><br>
  Warranty :&nbsp;&nbsp;&nbsp;<?php echo $result['warranty']; ?><br>
  Model :&nbsp;&nbsp;&nbsp;<?php echo $result['pro_modal']; ?></p></div>

<div class="col-sm-6 col-lg-6"><div class="vl"><p><strike>&nbsp;&nbsp;Price : <?php echo $result['fake_price']; ?> ₹</strike> (for 1 Quantity)</p>&nbsp;&nbsp;Discount Price :<p style="margin-left: 30%" id="nms"><?php echo $price."  ₹"; ?></p></div></div>
</div>
<p><br></p>
<div class="col-md-6 col-lg-6"><p><ul><li>No any offers available now...</li></ul></p></div>
    </div>

<div class="col-md-6 col-lg-6"><p>
<button onclick="up()" class="btn btn-sm btn-warning">+</button>
    <input style="width: 50px;" type="number" id="nm" min="1" value="1" maxlength="100" name="nm" disabled="">
    <button onclick="down()" class="btn btn-sm btn-warning">-</button>  
</p>
<p>
  <form method="get">
    <?php
    $ip_add = getenv("REMOTE_ADDR");
    ?>
<input type="hidden" id="qnty" name="qnty" value="1"><br>
<input type="hidden" name="ip" value="<?php echo $ip_add; ?>"><br>
<input type="hidden" name="pro_id" value="<?php echo $result['id']; ?>">
<input type="hidden" name="product" value="<?php echo $product; ?>">
<input type="hidden" id="price" name="prc" value="<?php echo $price; ?>">
<button class="btn btn-primary" name="buynow">Buy Now</button>
<button class="btn btn-success" name="addtocart">Add to Cart</button>
</form>


</p>
</div>
<div class="container col-md-6 col-lg-6 border">
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Description &nbsp; &nbsp;</a></li>
    <li><a data-toggle="tab" href="#menu1">Reviews</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3>Description &nbsp; &nbsp;</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h3>Reviews</h3>
      <div class="card example-1 square scrollbar-cyan bordered-cyan">
      <div class="card-body">
        <h4 id="section1"><strong>Second title of the news</strong></h4>
        <p>Ad leggings keytar, brunch id art party dolor labore. Pitchfork yr enim lo-fi before they sold out
          qui. Tumblr farm-to-table bicycle rights whatever. Anim keffiyeh carles cardigan. Velit seitan
          mcsweeney's photo booth 3 wolf moon irure. Cosby sweater lomo jean shorts, williamsburg hoodie minim
          qui you probably haven't heard of them et cardigan trust fund culpa biodiesel wes anderson aesthetic.
          Nihil tattooed accusamus, cred irony biodiesel keffiyeh artisan ullamco consequat.</p>
        <p>Ad leggings keytar, brunch id art party dolor labore. Pitchfork yr enim lo-fi before they sold out
          qui. Tumblr farm-to-table bicycle rights whatever. Anim keffiyeh carles cardigan. Velit seitan
          mcsweeney's photo booth 3 wolf moon irure. Cosby sweater lomo jean shorts, williamsburg hoodie minim
          qui you probably haven't heard of them et cardigan trust fund culpa biodiesel wes anderson aesthetic.
          Nihil tattooed accusamus, cred irony biodiesel keffiyeh artisan ullamco consequat.</p>
      </div>
    </div>
    <p align="center"><input type="text" name="review" placeholder="Write your reviews" required=""><button class="btn btn-sm btn-primary">SUBMIT</button></p>
    </div>
  </div>
  </div>

  </div>
</section>


</section>

<?php
if (isset($_GET['addtocart'])) {
  $p_id = $_GET['pro_id'];
  $qnty = $_GET['qnty'];
  $ip = $_GET['ip'];

    if(isset($_SESSION["sid"])){

    $user_id = $_SESSION["sid"];

    $sql = "SELECT * FROM cart WHERE p_id = '$p_id' AND user_id = '$user_id'";
    $run_query = mysqli_query($con,$sql);
    $count = mysqli_num_rows($run_query);
    if($count > 0){

      $qry = "UPDATE `cart` SET `p_id`='$p_id',`ip_add`='$ip',`user_id`='$user_id',`qty`='$qnty' WHERE p_id='$p_id' AND user_id='$user_id'";
      mysqli_query($con,$qry);
      ?>
        <script type="text/javascript">
          window.alert("Product is Updated 1");
          window.open('pro_descp.php?product=<?php echo $product;?>','_self');
        </script>
        <?php
    } else {
      $sql = "INSERT INTO `cart`
      (`p_id`, `ip_add`, `user_id`, `qty`) 
      VALUES ('$p_id','$ip','$user_id','$qnty')";
      if(mysqli_query($con,$sql)){
       ?>
        <script type="text/javascript">
          window.alert("Product is added Successfully");
          window.open('pro_descp.php?product=<?php echo $product;?>','_self');
        </script>
        <?php
      }
    }
    }else{
      $user_id = -1;

    $sql = "SELECT * FROM cart WHERE p_id = '$p_id' AND user_id = '$user_id'";
    $run_query = mysqli_query($con,$sql);
    $count = mysqli_num_rows($run_query);
    if($count > 0){

      $qry = "UPDATE `cart` SET `p_id`='$p_id',`ip_add`='$ip',`user_id`='$user_id',`qty`='$qnty' WHERE p_id='$p_id' AND user_id='$user_id'";
      mysqli_query($con,$qry);
      ?>
        <script type="text/javascript">
          window.alert("Product is Updated 2");
          window.open('pro_descp.php?product=<?php echo $product;?>','_self');
        </script>
        <?php
    } else {
      $sql = "INSERT INTO `cart`
      (`p_id`, `ip_add`, `user_id`, `qty`) 
      VALUES ('$p_id','$ip','$user_id','$qnty')";
      if(mysqli_query($con,$sql)){
       ?>
        <script type="text/javascript">
          window.alert("Product is added Successfully");
          window.open('pro_descp.php?product=<?php echo $product;?>','_self');
        </script>
        <?php
      }
    }
      
    }
  }
?>

<?php
if (isset($_GET['buynow'])) {
  $p_id = $_GET['pro_id'];
  $qnty = $_GET['qnty'];
  $ip = $_GET['ip'];

    if(isset($_SESSION["sid"])){

    $user_id = $_SESSION["sid"];

    $sql = "SELECT * FROM cart WHERE p_id = '$p_id' AND user_id = '$user_id'";
    $run_query = mysqli_query($con,$sql);
    $count = mysqli_num_rows($run_query);
    if($count > 0){
      ?>
        <script type="text/javascript">
          window.open('cart.php','_self');
        </script>
        <?php
    } else {
      $sql = "INSERT INTO `cart`
      (`p_id`, `ip_add`, `user_id`, `qty`) 
      VALUES ('$p_id','$ip','$user_id','$qnty')";
      if(mysqli_query($con,$sql)){
       ?>
        <script type="text/javascript">
          window.open('cart.php','_self');
        </script>
        <?php
      }
    }
    }else{
      $user_id = -1;

    $sql = "SELECT * FROM cart WHERE p_id = '$p_id' AND user_id = '$user_id'";
    $run_query = mysqli_query($con,$sql);
    $count = mysqli_num_rows($run_query);
    if($count > 0){
      ?>
        <script type="text/javascript">
          window.open('cart.php','_self');
        </script>
        <?php
    } else {
      $sql = "INSERT INTO `cart`
      (`p_id`, `ip_add`, `user_id`, `qty`) 
      VALUES ('$p_id','$ip','$user_id','$qnty')";
      if(mysqli_query($con,$sql)){
       ?>
        <script type="text/javascript">
          window.open('cart.php','_self');
        </script>
        <?php
      }
    }
      
    }
  }
?>

<?php
include "footer.php";
    }
  }
    ?>

  
</body>
</html>