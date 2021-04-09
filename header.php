
    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="menu-logo">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="https://mobirise.com">
                         <img src="assets/images/picsart-07-02-03.07.41-96x96.png" alt="Mobirise" title="" style="height: 3.8rem;">
                    </a>
                </span>
                <span class="navbar-caption-wrap"><a class="navbar-caption text-white display-4" href="index.php">
                        EDUStore</a></span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true"><li class="nav-item">
                    <a class="nav-link link text-white display-4" href="index.php">
                        <span class="mbri-home mbr-iconfont mbr-iconfont-btn"></span>Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link text-white display-4" href="cart.php"><span class="mbri-cart-add mbr-iconfont mbr-iconfont-btn"></span>
                        Cart</a>
                </li><li class="nav-item"><a class="nav-link link text-white display-4" href="about.php"><span class="mbri-info mbr-iconfont mbr-iconfont-btn"></span>
                        
                        About Us
                    </a></li><li class="nav-item"><a class="nav-link link text-white display-4" href="contact.php"><span class="mbri-letter mbr-iconfont mbr-iconfont-btn"></span>
                        Contact Us</a></li>
<?php
session_start();
if(isset($_SESSION["sid"]))
{
  $sid = $_SESSION["sid"];
  $uname = $_SESSION["uid"];

session_write_close();
?>
                        <li class="nav-item dropdown open"><a class="nav-link link text-white dropdown-toggle display-4"  data-toggle="dropdown-submenu" aria-expanded="true"><span class="mbri-users mbr-iconfont mbr-iconfont-btn"></span>
                        Hello, <?php echo $uname; ?></a><div class="dropdown-menu"><a class="text-white dropdown-item display-4" href="#">My Order</a><a class="text-white dropdown-item display-4" href="cart.php" aria-expanded="false">Cart</a><a class="text-white dropdown-item display-4" href="cart.php" aria-expanded="true">Checkout</a><a class="text-white dropdown-item display-4" href="logout.php" aria-expanded="false">Logout</a></div></li></ul>
<?php
}
else{
    $sid=-1;
  ?>
                       <li class="nav-item dropdown open"><a class="nav-link link text-white dropdown-toggle display-4"  data-toggle="dropdown-submenu" aria-expanded="true"><span class="mbri-users mbr-iconfont mbr-iconfont-btn"></span>
                        My Account</a><div class="dropdown-menu"><a class="text-white dropdown-item display-4" href="login.php">Log in</a><a class="text-white dropdown-item display-4" href="login.php" aria-expanded="false">Sign in</a></div></li></ul>
<?php
}
?>                        
            
        </div>
    </nav>

