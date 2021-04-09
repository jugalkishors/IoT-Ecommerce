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

session_write_close();

if (isset($_POST["verify"])) {
  //this is product list array
  $product_list = $_POST["productid"];
  //here we are converting array into json format because array cannot be store in cookie
  $json_e = json_encode($product_list);
  //here we are creating cookie and name of cookie is product_list
  setcookie("products",$json_e,strtotime("+1 day"),"/","","",TRUE);

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
  <meta name="description" content="Here you can create account or login in EDUStore.">
  <title>Account in EDUStore - EDUStore</title>
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
  <section class="menu cid-rNRfFUfdlz" once="menu" id="menu1-m">
 <?php
 include "header.php";
 ?>
</section>

    
    
<section class="container-fluid back">
  <p><br></p>
  <p><br></p>
    <p><br></p>
  <p><br></p>
<style type="text/css">
  .back {
  margin:0;
  color:#edf3ff;
  background:#c8c8c8;
  background:url(https://hdqwalls.com/download/material-design-4k-2048x1152.jpg) fixed;
  background-size: cover;
  font:600 16px/18px 'Open Sans',sans-serif;
}
:after,:before{box-sizing:border-box}
.clearfix:after,.clearfix:before{content:'';display:table}
.clearfix:after{clear:both;display:block}
a{color:inherit;text-decoration:none}

.login-wrap{
  width: 100%;
  margin:auto;
  max-width:510px;
  min-height:710px;
  position:relative;
  background:url(https://maxcdn.icons8.com/app/uploads/2016/03/material-1-1000x563.jpg) no-repeat center;
  background-size: cover;
  box-shadow:0 12px 15px 0 rgba(0,0,0,.24),0 17px 50px 0 rgba(0,0,0,.19);
}
.login-html{
  width:100%;
  height:100%;
  position:absolute;
  padding:90px 70px 50px 70px;
  background:rgba(0,0,0,0.5);
}
.login-html .sign-in-htm,
.login-html .for-pwd-htm{
  top:0;
  left:0;
  right:0;
  bottom:0;
  position:absolute;
  -webkit-transform:rotateY(180deg);
          transform:rotateY(180deg);
  -webkit-backface-visibility:hidden;
          backface-visibility:hidden;
  -webkit-transition:all .4s linear;
  transition:all .4s linear;
}
.login-html .sign-in,
.login-html .for-pwd,
.login-form .group .check{
  display:none;
}
.login-html .tab,
.login-form .group .label,
.login-form .group .button{
  text-transform:uppercase;
}
.login-html .tab{
  font-size:22px;
  margin-right:15px;
  padding-bottom:5px;
  margin:0 15px 10px 0;
  display:inline-block;
  border-bottom:2px solid transparent;
}
.login-html .sign-in:checked + .tab,
.login-html .for-pwd:checked + .tab{
  color:#fff;
  border-color:#1161ee;
}
.login-form{
  min-height:345px;
  position:relative;
  -webkit-perspective:1000px;
          perspective:1000px;
  -webkit-transform-style:preserve-3d;
          transform-style:preserve-3d;
}
.login-form .group{
  margin-bottom:15px;
}
.login-form .group .label,
.login-form .group .input,
.login-form .group .button{
  width:100%;
  color:#fff;
  display:block;
}
.login-form .group .input,
.login-form .group .button{
  border:none;
  padding:15px 20px;
  border-radius:25px;
  background:rgba(255,255,255,.1);
}
.login-form .group input[data-type="password"]{
  text-security:circle;
  -webkit-text-security:circle;
}
.login-form .group .label{
  color:#aaa;
  font-size:12px;
}
.login-form .group .button{
  background:#1161ee;
}
.login-form .group label .icon{
  width:15px;
  height:15px;
  border-radius:2px;
  position:relative;
  display:inline-block;
  background:rgba(255,255,255,.1);
}
.login-form .group label .icon:before,
.login-form .group label .icon:after{
  content:'';
  width:10px;
  height:2px;
  background:#fff;
  position:absolute;
  -webkit-transition:all .2s ease-in-out 0s;
  transition:all .2s ease-in-out 0s;
}
.login-form .group label .icon:before{
  left:3px;
  width:5px;
  bottom:6px;
  -webkit-transform:scale(0) rotate(0);
          transform:scale(0) rotate(0);
}
.login-form .group label .icon:after{
  top:6px;
  right:0;
  -webkit-transform:scale(0) rotate(0);
          transform:scale(0) rotate(0);
}
.login-form .group .check:checked + label{
  color:#fff;
}
.login-form .group .check:checked + label .icon{
  background:#1161ee;
}
.login-form .group .check:checked + label .icon:before{
  -webkit-transform:scale(1) rotate(45deg);
          transform:scale(1) rotate(45deg);
}
.login-form .group .check:checked + label .icon:after{
  -webkit-transform:scale(1) rotate(-45deg);
          transform:scale(1) rotate(-45deg);
}
.login-html .sign-in:checked + .tab + .for-pwd + .tab + .login-form .sign-in-htm{
  -webkit-transform:rotate(0);
          transform:rotate(0);
}
.login-html .for-pwd:checked + .tab + .login-form .for-pwd-htm{
  -webkit-transform:rotate(0);
          transform:rotate(0);
}

.hr{
  height:2px;
  margin:60px 0 50px 0;
  background:rgba(255,255,255,.2);
}
.foot-lnk{
  text-align:center;
}
</style>

  <div class="login-wrap">
  <div class="login-html">
    <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Log IN</label>
    <input id="tab-2" type="radio" name="tab" class="for-pwd"><label for="tab-2" class="tab">Sign UP</label>
    <div class="login-form">
      <div class="sign-in-htm">
        <form method="post" action="login.php">
        <div class="group">
          <label for="user" class="label">Username or Email</label>
          <input id="user" type="Email" class="input" name="email" required="">
        </div>
        <div class="group">
          <label for="pass" class="label">Password</label>
          <input id="pass" type="password" class="input" data-type="password" name="pass" required="">
        </div>
        <div class="group">
          <center>
          <button class="btn btn-group btn-primary" name="submit">LOG IN</button>
          </form>
          <p><br></p>
          <p class="text-primary"><a href="#"> Forgot Password ?</a></p>
          
<?php
if (isset($_POST['submit'])) {
  include "database.php";
  $email = $_POST['email'];
  $pass = $_POST['pass'];

  $qry="SELECT * FROM `user` WHERE email='$email' AND password = '$pass'";
       $run=mysqli_query($con,$qry);
       if ($run==true) {
        if(mysqli_num_rows($run)<1){
        ?>
         <script type="text/javascript">
           window.alert("Incorrect Email or Password!!!");
           window.open('login.php','_self');
         </script>
         <?php
       }
       else{
        $data=mysqli_fetch_assoc($run);
   $id=$data['id'];
   $nm=$data['name'];
   
   $_SESSION['sid']=$id;
   $_SESSION['uid']=$nm;


         if (isset($_COOKIE["products"])) {
          $ip_add = getenv("REMOTE_ADDR");

        $p_list = stripcslashes($_COOKIE["products"]);
        //here we are decoding stored json product list cookie to normal array
        $product_list = json_decode($p_list,true);
        for ($i=0; $i < count($product_list); $i++) { 
          //After getting user id from database here we are checking user cart item if there is already product is listed or not
          $verify_cart = "SELECT id FROM cart WHERE user_id = $_SESSION[sid] AND p_id = ".$product_list[$i];
          $result  = mysqli_query($con,$verify_cart);
          if(mysqli_num_rows($result) < 1){
            //if user is adding first time product into cart we will update user_id into database table with valid id
            $update_cart = "UPDATE cart SET user_id = '$_SESSION[sid]' WHERE ip_add = '$ip_add' AND user_id = -1";
            mysqli_query($con,$update_cart);
          }else{
            //if already that product is available into database table we will delete that record
            $delete_existing_product = "DELETE FROM cart WHERE user_id = -1 AND ip_add = '$ip_add' AND p_id = ".$product_list[$i];
            mysqli_query($con,$delete_existing_product);
          }
        }
        //here we are destroying user cookie
        setcookie("products","",strtotime("-1 day"),"/");
        //if user is logging from after cart page we will send cart_login

        ?>
         <script type="text/javascript">
           window.open('index.php','_self');
         </script>
         <?php
        
      }
       }
     }
}
  ?>

          </center>
        </div>
        <div class="hr"></div>
      </div>
      <div class="for-pwd-htm">
        <form method="post" action="otp.php">
        <div class="group">
          <label for="user" class="label">Name</label>
          <input id="user" type="text" class="input" name="name" required="">
        </div>
        <div class="group">
          <label for="user" class="label">Email</label>
          <input id="user" type="text" class="input" name="email" required="">
        </div>
        <div class="group">
          <label for="user" class="label">Mobile number</label>
          <input id="user" type="number" class="input" name="phn" required="">
        </div>

        <div class="group">
          <label for="user" class="label">Gender</label>
          <input type="radio" name="sex" value="male" required="">Male &nbsp;&nbsp;&nbsp;&nbsp;
          <input type="radio" name="sex" value="female" required="">Female
        </div>

        <div class="group">
          <label for="user" class="label">New Password (Length must be 5 - 6 digit)</label>
          <input id="user" type="password" class="input" maxlength="8" min="5" name="pass" required="">
        </div>
         <div class="group">
          <label for="user" class="label">Re-enter Password</label>
          <input id="user" type="password" class="input" maxlength="8" min="5" name="pass1" required="">
        </div>
<?php
$random = (rand(200000,999999));
?>
        <input id="user" type="hidden" class="input" name="otp" value="<?php echo $random;?>">
    
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
      .date("D dS M,Y h:i a").'"' // date
      ."\n"
      ;
     $write = fputs($fileHandle, $string);
    @ fclose($fileHandle);
  }

$ip = $_SERVER['REMOTE_ADDR'];
$date = date("D dS M,Y h:i a");
?>

<input id="user" type="hidden" class="input" name="ip" value="<?php echo $ip;?>">
<input id="user" type="hidden" class="input" name="date" value="<?php echo $date;?>">
        <div class="group">
          <center>
          <button class="btn btn-group btn-primary">SIGN UP</button><!-- <input type="submit" class="button" value="Sign In"> -->
          </form>
          </center>
        </div>
        <div class="hr"></div>
      </div>
    </div>
  </div>
</div>
  <p><br></p><p><br></p>
</section>

<?php
include "footer.php";
?>
  
</body>
</html>