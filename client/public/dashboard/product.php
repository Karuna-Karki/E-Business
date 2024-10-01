<?php 
include_once("../templates/header.php");
require_once("../../../server/db/connect.php");

$sql = "SELECT * FROM products;";
$res = $conn->query($sql);

if(!$res){
  echo "Not Found";
  exit;
}
?>
<link rel="stylesheet" href="../assets/css/product.css">
<div class="bg"></div>
  <section class="shop" id="shop">
    <div class="container">
    <?php while($row = $res->fetch_assoc()){ ?>
      <div class="box">
        <div class="img-conatiner">
          <img src=<?php echo $row["product_image"] ?> alt="" />
        </div>
        <h4><?php echo $row["product_name"]; ?></h4>
        <h5>$<?php echo $row["price"]; ?></h5>
        <div class="cart">
          <button class="addbtn"><a href="../dashboard/cart1.php?id=<?php echo $row["id"] ?>">More info</a></button>
        </div>
        <i class="fa-solid fa-cart-shopping"></i>
      </div>
      <?php } ?>
      <!-- <div class="box">
        <div class="img-conatiner">
          <img src="../assets/images/e12.webp" alt="" />
        </div>
        <h4>Pearl Pendent Necklace</h4>
        <h5>$15.00</h5>
        <div class="cart">
          <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
        </div>
      </div>
      <div class="box">
        <div class="img-conatiner">
          <img src="../assets/images/i9.jpg" alt="" />
        </div>
        <h4>Long Tessel Butterfly Earrings</h4>
        <h5>$15.00</h5>
        <div class="cart">
          <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
        </div>
      </div>

      <div class="box">
        <div class="img-conatiner">
          <img src="../assets/images/e10.webp" alt="" />
        </div>
        <h4>Heart designed Bracelet</h4>
        <h5>$15.00</h5>
        <div class="cart">
          <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
        </div>
      </div>
      <div class="box">
        <div class="img-conatiner">
          <img src="../assets/images/i10.jpg""></div>
          <h4>Korean Pearl Earrings set</h4>
          <h5>$15.00</h5>
          <div class=" cart">
          <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
        </div>
      </div>

      <div class="box">
        <div class="img-conatiner">
          <img src="../assets/images/i4.webp" alt="" />
        </div>
        <h4>Adujustable Rings set</h4>
        <h5>$15.00</h5>
        <div class="cart">
          <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
        </div>
      </div>
      <div class="box">
        <div class="img-conatiner">
          <img src="../assets/images/e3.webp" alt="" />
        </div>
        <h4>Plush Claw Bow Hair Clip</h4>
        <h5>$15.00</h5>
        <div class="cart">
          <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
        </div>
      </div>
      <div class="box">
        <div class="img-conatiner">
          <img src="../assets/images/i5.webp" alt="" />
        </div>
        <h4>Rings Set</h4>
        <h5>$15.00</h5>
        <div class="cart">
          <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
        </div>
      </div>

      <div class="box">
        <div class="img-conatiner">
          <img src="../assets/images/image1.jpg" alt="" />
        </div>
        <h4>Black 2pc bands</h4>
        <h5>$15.00</h5>
        <div class="cart">
          <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
        </div>
      </div>

      <div class="box">
        <div class="img-conatiner">
          <img src="../assets/images/image2.jpg" alt="" />
        </div>
        <h4>Pearl Hair Clips Set</h4>
        <h5>$15.00</h5>
        <div class="cart">
          <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
        </div>
      </div>

      <div class="box">
        <div class="img-conatiner">
          <img src="../assets/images/image4.jpg" alt="" />
        </div>
        <h4>Hair clips</h4>
        <h5>$15.00</h5>
        <div class="cart">
          <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
        </div>
      </div>

      <div class="box">
        <div class="img-conatiner">
          <img src="../assets/images/image0.jpg" alt="" />
        </div>
        <h4>Cute Rubberbands Set</h4>
        <h5>$15.00</h5>
        <div class="cart">
          <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
        </div>
      </div>

      <div class="box">
        <div class="img-conatiner">
          <img src="../assets/images/image6.jpg" alt="" />
        </div>
        <h4>Medium size claw clips</h4>
        <h5>$15.00</h5>
        <div class="cart">
          <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
        </div>
      </div>

      <div class="box">
        <div class="img-conatiner">
          <img src="../assets/images/e5.webp" alt="" />
        </div>
        <h4>Black Sunglasses</h4>
        <h5>$15.00</h5>
        <div class="cart">
          <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
        </div>
      </div>

      <div class="box">
        <div class="img-conatiner">
          <img src="../assets/images/image7.jpg" alt="" />
        </div>
        <h4>HairBands set</h4>
        <h5>$15.00</h5>
        <div class="cart">
          <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
        </div>
      </div>
      <div class="box">
        <div class="img-conatiner">
          <img src="../assets/images/e11.webp" alt="" />
        </div>
        <h4>Daisy flower Necklace</h4>
        <h5>$15.00</h5>
        <div class="cart">
          <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
        </div>
      </div>
      <div class="box">
        <div class="img-conatiner">
          <img src="../assets/images/i2.webp" alt="" />
        </div>
        <h4>1Pc Bangle-Herme's</h4>
        <h5>$15.00</h5>
        <div class="cart">
          <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
        </div>
      </div>
      <div class="box">
        <div class="img-conatiner">
          <img src="../assets/images/i3.jpg" alt="" />
        </div>
        <h4>Gold Plated Silver cuff Bracelet</h4>
        <h5>$15.00</h5>
        <div class="cart">
          <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
        </div>
      </div>

      <div class="box">
        <div class="img-conatiner">
          <img src="../assets/images/i5.jpg" alt="" />
        </div>
        <h4>Adujustable Diamond Ring</h4>
        <h5>$15.00</h5>
        <div class="cart">
          <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
        </div>
      </div>
      <div class="box">
        <div class="img-conatiner">
          <img src="../assets/images/i7.jpeg" alt="" />
        </div>
        <h4>WaterProof Stainless watch/h4>
        <h5>$15.00</h5>
        <div class="cart">
          <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
        </div>
      </div> -->
      <!-- <div class="box">
        <div class="img-conatiner">
          <img src="../assets/images/e4.jpg alt="" />
        </div>
        <h4>WaterProof Stainless Watch</h4>
        <h5>$15.00</h5>
        <div class="cart">
          <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
        </div>
      </div> -->
      <!-- <div class="box">
        <div class="img-conatiner">
          <img src="../images/i8.webp" alt="" />
        </div>
        <h4>Elegant Watch</h4>
        <h5>$15.00</h5>
        <div class="cart">
          <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
        </div>
      </div>
      <div class="box">
        <div class="img-conatiner">
          <img src="../images/i12.webp" alt="" />
        </div>
        <h4>Chain Style watch</h4>
        <h5>$15.00</h5>
        <div class="cart">
          <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
        </div>
      </div>
      <div class="box">
        <div class="img-conatiner">
          <img src="../images/e1.jpg" alt="" />
        </div>
        <h4>Pearl Rhinestone Metal Hair clip</h4>
        <h5>$15.00</h5>
        <div class="cart">
          <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
        </div>
      </div>
      <div class="box">
        <div class="img-conatiner">
          <img src="../images/e4.jpg" alt="" />
        </div>
        <h4>Luxury Round Gradient Sunglasses</h4>
        <h5>$15.00</h5>
        <div class="cart">
          <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
        </div>
      </div>
      <div class="box">
        <div class="img-conatiner">
          <img src="../images/e5.webp" alt="" />
        </div>
        <h4>Vintage UV400 Protection Sunglasses</h4>
        <h5>$15.00</h5>
        <div class="cart">
          <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
        </div>
      </div>

      <div class="box">
        <div class="img-conatiner">
          <img src="../images/e7.webp" alt="" />
        </div>
        <h4>Rectangular Hair clip for thick hair</h4>
        <h5>$15.00</h5>
        <div class="cart">
          <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
        </div>
      </div>

      <div class="box">
        <div class="img-conatiner">
          <img src="../images/e9.webp" alt="" />
        </div>
        <h4>Dropship Cross-Border Stainless steel Bracelet</h4>
        <h5>$15.00</h5>
        <div class="cart">
          <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
        </div>
      </div>

      <div class="box">
        <div class="img-conatiner">
          <img src="../images/e10.webp" alt="" />
        </div>
        <h4>Double Layers Hearts & charm djustable Bracelet</h4>
        <h5>$15.00</h5>
        <div class="cart">
          <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
        </div>
      </div>
      <div class="box">
        <div class="img-conatiner">
          <img src="../images/e8.webp" alt="" />
        </div>
        <h4>Hesroicy Beads Bracelet Keyring with Tassel</h4>
        <h5>$15.00</h5>
        <div class="cart">
          <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
        </div>
      </div> -->
    </div>

  </section>
  <?php include_once("../templates/footer.php");?>
</body>

</html>