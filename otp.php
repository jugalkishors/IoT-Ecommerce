<?php
session_start();
if(isset($_SESSION["sid"]))
{
?>
<script type="text/javascript">
  window.open('index.php','_self');
</script>
<?php
}
?>

<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phn = $_POST['phn'];
$sex = $_POST['sex'];
$pass = $_POST['pass'];
$pass1 = $_POST['pass1'];
$o_no = $_POST['otp'];
$ip = $_POST['ip'];
$date = $_POST['date'];

if ($name==null||$email==null||$phn==null||$sex==null||$pass==null||$o_no==null||$ip==null||$date==null) {
  ?>
  <script type="text/javascript">
    window.open('login.php','_self');
  </script>
  <?php
}
if ($pass!=$pass1) {
  ?>
  <script type="text/javascript">
    window.alert("Password does not match!!!");
    window.open('login.php','_self');
  </script>
  <?php
}

include "database.php";
       $qry="SELECT * FROM `user` WHERE email='$email'";
       $run=mysqli_query($con,$qry);
       if ($run==true) {
        if(mysqli_num_rows($run)<1){
        
       }
       else{
        ?>
         <script type="text/javascript">
           window.alert("Email already exists!!!");
           window.open('login.php','_self');
         </script>
         <?php
       }
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
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <meta name="description" content="Here you can see your orders that you buy products from EDUStore and also see your products status in EDUStore.">
  <title>Check Your Orders - EDUStore</title>
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
  <section class="menu cid-rNRfFUfdlz" once="menu" id="menu1-j">
<?php
include "header.php";
    ?>
</section>

<p><br></p>
<p><br></p>
<p><br></p>


<style type="text/css">
  .length{
    width: 50px;
  }
</style>

<center>
<section class="container" style="background-color: white;">
  <h4>Enter Your OTP</h1>
    <p><?php echo $o_no;?></p>
    <p><br></p>
    <div class="border" style="background-color: grey; width: 400px;">
      <p><br></p>
  <form method="post" action="verify.php">
<input class="length" type="number" maxlength=1 name="o1" id="o1" onkeyup="moveOnMax(this,'a')" />
<input class="length" type="number" maxlength=1 id="a" name="o2" onkeyup="moveOnMax(this,'b')" />
<input class="length" type="number" maxlength=1 id="b" name="o3" onkeyup="moveOnMax(this,'c')" />
<input class="length" type="number" maxlength=1 id="c" name="o4" onkeyup="moveOnMax(this,'d')"/>
<input class="length" type="number" maxlength=1 id="d" name="o5" onkeyup="moveOnMax(this,'e')"/>
<input class="length" type="number" maxlength=1 id="e" name="o6" />
<input class="length" type="hidden" name="name" value="<?php echo $name;?>" />
<input class="length" type="hidden" name="email" value="<?php echo $email;?>" />
<input class="length" type="hidden" name="phn" value="<?php echo $phn;?>" />
<input class="length" type="hidden" name="sex" value="<?php echo $sex;?>" />
<input class="length" type="hidden" name="pass" value="<?php echo $pass;?>" />
<input class="length" type="hidden" name="o_no" value="<?php echo $o_no;?>" />
<input class="length" type="hidden" name="ip" value="<?php echo $ip;?>" />
<input class="length" type="hidden" name="date" value="<?php echo $date;?>" />
<p><br></p>
<p><button class="btn btn-primary" name="submit">VERIFY</button></p>
</form>
</div>

<script type="text/javascript">
moveOnMax =function (field, nextFieldID) {
    if (field.value.length == 1) {
        document.getElementById(nextFieldID).focus();
    }
}
</script>
</center>
  
</section>
<p><br></p>
<p><br></p>
<p><br></p>

<?php
include "footer.php";
    ?>
  
</body>
</html>