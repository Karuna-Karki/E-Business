<?php
require("../../../server/db/connect.php");

if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $sql = "INSERT INTO user(username, email,  password) VALUES('$username','$email', '$password')";

  $res = $conn->query($sql);

  if ($res) {
    header("location:../mainpage/login.php");
  } else {
    echo "Couldn't insert";
  }
  $conn->close();
}

include_once("../templates/header.php");
?>

<link rel="stylesheet" href="../assets/css/main.css" />
<div class="content-wrapper">
  <div class="content">
    <img src="../assets/images/mainn.png" alt="" />

    <h2>
      Choose the best.Choose us. <br><br>
      Go Stylish!!.
    </h2>
    <a href="../dashboard/product.php">Shop Now</a>
  </div>
</div>

<!-------------Featured categories--------------------->
<section class="popular">
  <div class="container">

    <h3 class="sub-heading">Our Accessories</h3>
    <h1 class="heading">New Arraivals</h1>
  </div>
  <div class="box-container">


    <div class="box">
      <img src="../assets/images/e4.jpg" alt="">
      <h3>accessories</h3>
      <span>$15.00</span>
      <a href="">Add to cart</a>
    </div>


    <div class="box">
      <img src="../assets/images/e5.webp" alt="">
      <h3>accessories</h3>
      <span>$15.00</span>
      <a href="">Add to cart</a>
    </div>

    <div class="box">
      <img src="../assets/images/i6.webp" alt="">
      <h3>accessories</h3>
      <span>$15.00</span>
      <a href="">Add to cart</a>
    </div>

    <div class="box">
      <img src="../assets/images/e6.jpeg" alt="">
      <h3>accessories</h3>
      <span>$15.00</span>
      <a href="">Add to cart</a>
    </div>

    <div class="box">
      <img src="../assets/images/e11.webp" alt="">
      <h3>accessories</h3>
      <span>$15.00</span>
      <a href="">Add to cart</a>
    </div>

    <div class="box">
      <img src="../assets/images/e12.webp" alt="">
      <h3>accessories</h3>
      <span>$15.00</span>
      <a href="">Add to cart</a>
    </div>

    <div class="box">
      <img src="../assets/images/i2.webp" alt="">
      <h3>accessories</h3>
      <span>$15.00</span>
      <a href="">Add to cart</a>
    </div>

    <div class="box">
      <img src="../assets/images/image6.jpg" alt="">
      <h3>accessories</h3>
      <span>$15.00</span>
      <a href="">Add to cart</a>
    </div>


  </div>


</section>
<!---------------about us------------------>
<section class="about">
  <div class="container">
    <h3 class="sub-heading">About Us</h3>
    <h1 class="heading">Why choose us?</h1>
  </div>
  <div class="aboutus">

    <div class="contents">
      <h3>Best about us</h3>
      <p>We aim to offer our customers a variety of the latest ladies accessories. 
        We’ve come a long way, so we know exactly which direction to take when supplying you with high quality yet budget-friendly products. 
        We offer all of this while providing excellent customer service and friendly support.
         We always keep an eye on the latest trends in accessories industry.
         The interests of our customers are always top priority for us, 
         so we hope you will enjoy our products as much as we enjoy making them available to you.</p>
      <div class="icons-container">
        <div class="icons">
          <i class="fa-solid fa-truck"></i>
          <span>Fast Delivery</span>
        </div>
        <div class="icons">
          <i class="fa-solid fa-file-invoice-dollar"></i>
          <span>Easy payment</span>
        </div>
        <div class="icons">
          <i class="fa-solid fa-headset"></i>
          <span>24/7 Delivery</span>
        </div>
        <a href="#">Learn more</a>
      </div>

    </div>
  </div>


</section>

<!--------------register--------------------->
<div class="overlay-container">
  <div class="overlay">
    <div class="loginform">
      <span id="exit">&times;</span>
      <h1>Create your account </h1>
      <form action="#" method="POST" name="form_name">
        <div class="field-group">
          <input type="text" id="username" name="username" value="" required="required" />
          <span>Username</span>

        </div>
        <div class="field-group">
          <input type="email" id="email" name="email" value="" required="required" />
          <span>Email</span>

        </div>
        <div class="field-group">
          <input type="password" id="password" name="password" value="" required="required" />
          <span>password</span>
        </div>
        <div class="button-block">
          <button type="submit" name="submit">Register</button>


        </div>
        <div class="already">
          <h3>Already have an account?<a href="./login.php">Log in</a></h3>
        </div>

      </form>
    </div>
  </div>
</div>
<script src="../assets/js/main.js"></script>


<?php
include_once("../templates/footer.php");
?>