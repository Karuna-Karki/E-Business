<?php include_once("../templates/header.php"); ?>
<link rel="stylesheet" href="../assets/css/cart1.css">

<?php include_once("../../../server/db/connect.php");
$singleProduct = "";

if($conn){
  if(isset($_GET["id"])){
    $id = $_GET["id"];
    $sql = "SELECT * FROM products WHERE id = $id;";
    $res = $conn->query($sql);
    if(!$res){
      echo "Error";
    }
  }
}

?>
<div class="contents">
<?php while($row = $res->fetch_assoc()){ ?>
  <div class="box1">
    <div class="imagebox">
      <img src=<?php echo $row["product_image"] ?> id="mainimage" class="mainimage" alt="" />
    </div>
  </div>
  <div class="details-box">
    <h1><?php echo $row["product_name"]; ?></h1><br>
    <p>Availability(InStock)</p><br>
    <h2>$<?php echo $row['price']; ?></h2><br>
    <h4>Description</h4>
    <p>
      <?php echo $row["description"]; ?>
    </p>
    <a href="../dashboard/cart.php">Add To Cart</a>
    <input type="text" class="quantity" name="quantity" id="quantity" placeholder="Quantity">
  </div>
  <?php } ?>
</div>
<?php include_once("../templates/footer.php"); ?>

<!-- <script>
  const xhttp = new XMLHttpRequest();
  xhttp.addEventListener("load", function(){
    const product = JSON.parse(this.responseText);
      console.log(this.responseText);
      console.log("Hello");
  });

  xhttp.open("GET", "/E-business/server/getproduct.php", true);
  xhttp.send();
</script> -->

</body>

</html>