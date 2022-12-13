<?php 
include "classes/userLogin.php";
$user = new user_login;
$u = $user->getacount();
?>
<style>
#MenuItems li {
    font-size: 18px;
    font-weight: 600;
    padding: 0 10px;
}

.toggleMenus {
    max-height: 200px !important;
    width: 150px !important;
    padding: 10px 10px;
    text-align: left;
}
</style>

<nav>
    <ul id="MenuItems" style="max-height:0px">
        <li><a href="index.php">Home</a></li>
        <li><a href="products.php">Products</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li>
            <?php if ($u["userid"] > 0) { ?>
            <a href="actions/php/logout.php">Logout
            </a>
            <?php }else{ ?>
            <a href="login.php">Login
            </a>
            <?php } ?>
        </li>
        <li>
            <?php if ($u["userid"] <= 0) { ?>
            <a href="register.php">Register
            </a>
            <?php } ?>
        </li>
    </ul>
</nav>

<a style="padding:0 10px" href="cart.php">
    <img src="images/cart.png" width="30px" height="30px"></a>
<!-- <img src="images/message1.png" width="30px" height="30px"> -->
<img src="images/menu.png" class="menu-icon" onclick="menutoggle()">


<script>
var MenuItems = document.getElementById("MenuItems");

function menutoggle() {
    if (MenuItems.classList.length == 0) {
        MenuItems.classList.add("toggleMenus");
    } else {
        MenuItems.classList.remove("toggleMenus");
    }
}
</script>

<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/custom-sweetalert.js"></script>
    <script src="js/sweetalert2.min.js"></script>