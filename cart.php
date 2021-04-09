<!DOCTYPE html>
<html >
<head>
  <!-- Site made with Mobirise Website Builder v4.8.2, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.8.2, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/picsart-07-02-03.07.41-96x96.png" type="image/x-icon">
  <meta name="description" content="Here you can see your cart where see your products for buying in EDUStore.">
  <title>Check Your Cart - EDUStore</title>
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
  <section class="menu cid-rNRfFUfdlz" once="menu" id="menu1-g">

   <?php
 include "header.php";
 ?>

</section>

<p><br></p>
<p><br></p>

<p><br></p>
<p><br></p>

<style type="text/css">
  .card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}
</style>


<section style="background-color: white;">
  <center>
<div class="container card">
  <div class="row">
    <div class="col-sm-6 col-md-6 col-lg-6" style="background-color: #C3EEF9;"><br><h3>SHOPPING CART</h3><p></p></div>
    <div class="col-sm-6 col-md-6 col-lg-6" style="background-color: #C3EEF9;"><button style="height: 35px;" class="btn btn-primary btn-sm">Continue Shopping</button></div>
    <span class="col-sm-12 col-md-12 col-lg-12"><hr></span>
</div>


<?php
include "database.php";

if(isset($_SESSION["sid"]))
{
$user = $_SESSION["sid"];
$qry="SELECT * FROM `cart` WHERE user_id='$user'";
$run = mysqli_query($con,$qry);
if(mysqli_num_rows($run)<1)
       {
        ?>
        <script type="text/javascript">
          window.alert("Cart is empty!!!");
          window.open('index.php','_self');
        </script>
        <?php
}
else{
  ?>

  <?php
  $prc = 0;
  while ($result = mysqli_fetch_array($run)) {
    $product_id = $result['p_id'];
    $qry1="SELECT * FROM `products` WHERE id='$product_id'";
    $run1 = mysqli_query($con,$qry1);
    $result1 = mysqli_fetch_array($run1);
    $qntymulti = $result1['real_price']*$result['qty'];
    $prc = $qntymulti+$prc;
?>
<!-- Here login values -->
    <div class="row">
      <form method="get">
      <input type="hidden" name="pro_id" value="<?php echo $product_id; ?>">
    <div class="col-sm-2 col-md-2 col-lg-2"><p><button name="delete"><img src="assets/images/delete.png" height="20px" width="20px"></button></p></div></form>
    <div class=" col-sm-2 col-md-2 col-lg-2"><img src="pro_img/<?php echo $result1['pro_image']; ?>" height="50" width="50"></div>
    <div class="col-sm-2 col-md-2 col-lg-2"><h5><?php echo $result1['pro_name']; ?></h5></div>
    <div class="col-sm-2 col-md-2 col-lg-2"></div>
    <div class="col-sm-2 col-md-2 col-lg-2"><p><?php echo $result1['real_price']; ?>₹</p></div>
    <div class="col-sm-2 col-md-2 col-lg-2"><p> <b>x</b>
    <input style="width: 30px;" type="text" value="<?php echo $result['qty']; ?>" name="nm" disabled="">
</p></div>
    <span class="col-sm-12 col-md-12 col-lg-12"><hr></span>
    <input type="hidden" name="productid[]" value="<?php echo $product_id; ?>">
</div>
<?php
  }
}
session_write_close();
?>
<!-- Here shopping cart bottom buttons -->
<p><br></p>
<div class="row">
<div class="col-sm-6 col-md-6 col-lg-6"></div>
  <div class="col-sm-6 col-md-6 col-lg-6"><hr></div>
</div>
<h5 align="right"><b>Total : <?php echo $prc; ?> ₹</b></h5>
<p align="right"><button class="btn btn-sm" name="chkout" style="background-color: #1FD970;"><font color="white">Checkout</font></button></p>

  </div>
</div>
</center>

</section>
<?php
}


// Here Logout user codes...
else{
  $user = $sid;
$qry="SELECT * FROM `cart` WHERE user_id='$user'";
$run = mysqli_query($con,$qry);
  if(mysqli_num_rows($run)<1)
       {
        ?>
        <script type="text/javascript">
          window.alert("Cart is empty!!!");
          window.open('index.php','_self');
        </script>
        <?php
}
else{
  $prc=0;
  
  while ($result = mysqli_fetch_array($run)) {
    $product_id = $result['p_id'];
    $qry1="SELECT * FROM `products` WHERE id='$product_id'";
    $run1 = mysqli_query($con,$qry1);
    $result1 = mysqli_fetch_array($run1);
    $qntymulti = $result1['real_price']*$result['qty'];
    $prc = $qntymulti+$prc;
?>
<!-- Here logout values -->
    <div class="row">
      <form method="get" action="cart.php">
      <input type="hidden" name="pro_id" value="<?php echo $product_id; ?>">
    <div class="col-sm-2 col-md-2 col-lg-2"><p><button name="delete"><img src="assets/images/delete.png" height="20px" width="20px"></button></p></div>
  </form>
    <div class=" col-sm-2 col-md-2 col-lg-2"><img src="pro_img/<?php echo $result1['pro_image']; ?>" height="50" width="50"></div>
    <div class="col-sm-2 col-md-2 col-lg-2"><h5><?php echo $result1['pro_name']; ?></h5></div>
    <div class="col-sm-2 col-md-2 col-lg-2"></div>
    <div class="col-sm-2 col-md-2 col-lg-2"><p><?php echo $result1['real_price'];?> ₹</p></div>
    <div class="col-sm-2 col-md-2 col-lg-2"><p><b>x</b>&nbsp;&nbsp;&nbsp; <input style="width: 30px;" type="text" name="qty" value="<?php echo $result['qty']; ?>" disabled=""></p></div>
    <span class="col-sm-12 col-md-12 col-lg-12"><hr></span>
    <input type="hidden" name="productid[]" value="<?php echo $product_id; ?>">
</div>
<?php

  }
}

?>
<!-- Here shopping cart bottom buttons -->
<p><br></p>
<div class="row">
<div class="col-sm-6 col-md-6 col-lg-6"></div>
  <div class="col-sm-6 col-md-6 col-lg-6"><hr></div>
</div>
<h5 align="right"><b>Total : <?php echo $prc; ?> ₹</b></h5>

<form method="post" action="login.php">
  <p align="right">
<?php
$qry="SELECT * FROM `cart` WHERE user_id='$user'";
$run = mysqli_query($con,$qry);
while ($result = mysqli_fetch_array($run)) {
    ?>
<input type="hidden" name="productid[]" value="<?php echo $result['p_id']; ?>">
<?php
}
?>
<input type="hidden" name="verify" value="ok">
<button class="btn btn-sm" name="chkout" style="background-color: #1FD970;"><font color="white">Checkout</font></button></p>
</form>
  </div>
</div>
</center>

</section>
<?php
}
?>

<!-- End process of loops -->
    

</center>
<?php
if (isset($_GET['delete'])) {
  
  if (isset($_SESSION["sid"])) {
    $cartuser = $_SESSION["sid"];
  }
  else{
    $cartuser = -1;
  }

$d_product = $_GET['pro_id'];
$dqry = "DELETE FROM `cart` WHERE p_id='$d_product' AND user_id='$cartuser'";
$drun = mysqli_query($con,$dqry);
if ($drun==true) {
  ?>
  <script type="text/javascript">
    window.alert('Product is removed successfully ');
    window.open('cart.php','_self');
  </script>
  <?php
}
}
?>

<p><br></p>
<p><br></p>
<p><br></p>

<?php
 include "footer.php";
 ?>
  
</body>
</html>