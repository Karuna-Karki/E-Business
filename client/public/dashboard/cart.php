<?php include_once("../templates/header.php");?>
<?php
include_once("../../../server/db/connect.php");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to add item to the cart
function addToCart($productId) {
    global $conn;
    // Assuming you have product details in a database
    $sql = "SELECT * FROM products WHERE id = $productId";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // Adding item to the cart session or database
        // For example, you could add to a session variable or insert into a cart table in the database
        // $_SESSION['cart'][] = $row; // If using sessions
        // or insert into a cart table in the database
        // Example: INSERT INTO cart (product_id, name, price) VALUES ($row['id'], '$row['name']', $row['price'])
        echo json_encode($row); // Return added item for frontend to update cart display
    } else {
        echo "Product not found";
    }
}

// Check if product ID is provided in the request
if(isset($_POST['productId'])) {
    addToCart($_POST['productId']);
}

$conn->close();

?>
<link rel="stylesheet" href="../assets/css/cart.css">
  <div class="cart-container">
    <div class="cart">
      <div class="top">
        <h2>Shopping Cart</h2>
        <h2 id="itemA">items</h2>
      </div>
      <table cellspacing="0" class="t-head">
        <tr>
          <th width="150" class="head-img">Image</th>
          <th width="360">Name</th>
          <th width="150">Price</th>
          <th width="70">Delete</th>
        </tr>

      </table>
      <table id="root" cellspacing="0">

      </table>
    </div>
    <div class="detail">
      <div class="top">
        <h2>Order Details</h2>
      </div>
      <div class="detail">
      <a href="../payment/index.php">Proceed to Checkout</a>
      </div>
    </div>
  </div>
  <?php include_once("../templates/footer.php");?>

  <script src="./cart.js"></script>
</body>

</html>