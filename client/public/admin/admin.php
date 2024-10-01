<?php
include_once("../../../server/db/connect.php");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Routes for admin panel
if ($_SERVER["REQUEST_METHOD"] ==  "GET" && isset($_GET["admin"]) && $_GET["admin"] == "true") {
    // Check if user is authenticated as admin
    // Implement your authentication logic here
    // For simplicity, let's assume admin is always authenticated

    // Fetch products
    $products_sql = "SELECT * FROM products";
    $products_result = $conn->query($products_sql);

    // Fetch orders
    $orders_sql = "SELECT * FROM orders";
    $orders_result = $conn->query($orders_sql);

    // Display admin panel
    include 'admin_panel.php';
} elseif ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['add_product'])) {
    // Display add product form
    include 'add_product_form.php';
} elseif ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['add_product'])) {
    $image_path = '';
    var_dump($_FILES);
    if ($_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $upload_dir = '../uploads/';
        $uploaded_file = $upload_dir . basename($_FILES['image']['name']);
        if (move_uploaded_file($_FILES['image']['tmp_name'], $uploaded_file)) {
            $image_path = $uploaded_file;
        } else {
            echo "Failed to upload image.";
            exit();
        }
    }
    // Add product
    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $image = $image_path;

    $add_product_sql = "INSERT INTO products (product_name, price, description, product_image) VALUES ('$name', '$price', '$description', '$image')";
    if ($conn->query($add_product_sql) === TRUE) {
        header("Location: admin.php?admin=true");
        exit();
    } else {
        echo "Error: " . $add_product_sql . "<br>" . $conn->error;
    }
} elseif ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['edit_product'])) {
    // Display edit product form
    $product_id = $_GET['edit_product'];
    $edit_product_sql = "SELECT * FROM products WHERE id=$product_id";
    $edit_product_result = $conn->query($edit_product_sql);
    $product = $edit_product_result->fetch_assoc();

    include 'edit_product_form.php';
} elseif ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['edit_product'])) {
    // Update product
    $product_id = $_POST['product_id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];

    $update_product_sql = "UPDATE products SET product_name='$name', price='$price', description='$description' WHERE id=$product_id";
    if ($conn->query($update_product_sql) === TRUE) {
        header("Location: admin.php?admin=true");
        exit();
    } else {
        echo "Error: " . $update_product_sql . "<br>" . $conn->error;
    }
}

$conn->close();
