<?php
$key = $_GET['key'];
if ($key==NULL) {
    ?>
    <script type="text/javascript">
        window.open('index.php','_self');
    </script>
    <?php
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

<?php
  $outputWebBug = 'iplog.csv';
  @ $details = json_decode(file_get_contents("http://ipinfo.io/{$_SERVER['REMOTE_ADDR']}/json"));
  @ $hostname=gethostbyaddr($_SERVER['REMOTE_ADDR']);
  
  $QUERY_STRING = preg_replace("%[^/a-zA-Z0-9@,_=]%", '', $_SERVER['QUERY_STRING']);
  
  @ $fileHandle = fopen($outputWebBug, "a");
  if ($fileHandle)
  {
    $string ='"'.$QUERY_STRING.'","'
      .$_SERVER['REMOTE_ADDR'].'","' // ip address
      ."\n"
      ;
     $write = fputs($fileHandle, $string);
    @ fclose($fileHandle);
  }

$ip = $_SERVER['REMOTE_ADDR'];
$qty=1;
?>

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

    <?php
  include "database.php";

  $qry="SELECT * FROM `products` WHERE keyword LIKE '%$key%'";
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
       }
       ?>           
                
            </div>
        </div>
    </div>
</section>

<section class="features2 cid-rNUXXRciys" id="features2-d">



<div class="container">
    <div class="row text-center">
        
<?php

      while ( $result = mysqli_fetch_array($run)) 
      {
        $count++;
        ?>

        <div class="col-md-3 col-lg-3"><p><div class="border" style="width:270px; background-color: white;">
          <form method="get" action="pro_descp.php">
            <input type="hidden" name="product" value="<?php echo $result['id'];?>">
        <button><img src="pro_img/<?php echo $result['pro_image'];?>" height="190px" width="238px" class="rounded"></button>
      </form>
            <h6 class=" card-header"><?php echo $result['pro_name'];?></h6>

                <p class="card-text">Real Price:&nbsp;<strike><?php echo $result['fake_price'];?>₹</strike><br>Discount Price: &nbsp;<?php echo $result['real_price'];?>₹</p>
                <form method="get">
                  <input type="hidden" name="key" value="<?php echo $key;?>">
                <input type="hidden" name="pid" value="<?php echo $result['id'];?>">
                <input type="hidden" name="sid" value="<?php echo $sid;?>">
                <input type="hidden" name="uip" value="<?php echo $ip;?>">
                <input type="hidden" name="qty" value="<?php echo $qty;?>">
            
                <button class="btn btn-sm btn-primary" name="buy">Buy Now</button><button name="cart" class="btn btn-sm btn-success">Add to Cart</button>
                </form>
        </div></p></div> 

        
<?php
//main loop ending brackets...
}
}
?>      
    </div>
</div>


<?php
include "database.php";

if(isset($_GET["cart"])){
  $ip_add = $_GET["uip"];
    

    $p_id = $_GET["pid"];
    

    if(isset($_SESSION["sid"])){

    $user_id = $_SESSION["sid"];

    $sql = "SELECT * FROM cart WHERE p_id = '$p_id' AND user_id = '$user_id'";
    $run_query = mysqli_query($con,$sql);
    $count = mysqli_num_rows($run_query);
    if($count > 0){
      ?>
        <script type="text/javascript">
          window.alert("Product is already exists");
          window.open('products.php?key=<?php echo $key;?>','_self');
        </script>
        <?php
    } else {
      $sql = "INSERT INTO `cart`
      (`p_id`, `ip_add`, `user_id`, `qty`) 
      VALUES ('$p_id','$ip_add','$user_id','1')";
      if(mysqli_query($con,$sql)){
       ?>
        <script type="text/javascript">
          window.alert("Product is added Successfully");
          window.open('products.php?key=<?php echo $key;?>','_self');
        </script>
        <?php
      }
    }
    }else{
      $sql = "SELECT id FROM cart WHERE ip_add = '$ip_add' AND p_id = '$p_id' AND user_id = -1";
      $query = mysqli_query($con,$sql);
      if (mysqli_num_rows($query) > 0) {
        ?>
        <script type="text/javascript">
          window.alert("Product is already exists");
          window.open('products.php?key=<?php echo $key;?>','_self');
        </script>
        <?php
          exit();
      }
      $sql = "INSERT INTO `cart`
      (`p_id`, `ip_add`, `user_id`, `qty`) 
      VALUES ('$p_id','$ip_add','-1','1')";
      if (mysqli_query($con,$sql)) {
       ?>
        <script type="text/javascript">
          window.alert("Product is added Successfully");
          window.open('products.php?key=<?php echo $key;?>','_self');
        </script>
        <?php
        exit();
      }
      
    }
  }
?>

<?php
if (isset($_GET['buy'])) {
  $p_id = $_GET['pid'];
  $qnty = 1;
  $ip = $_GET["uip"];

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

</section>

<?php
include "footer.php";
    ?>
  
</body>
</html>