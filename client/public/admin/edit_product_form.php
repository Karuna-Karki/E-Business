<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 50%;
            margin: 20px auto;
        }
        form {
            background-color: #f2f2f2;
            padding: 20px;
            border-radius: 5px;
        }
        input[type="text"], input[type="number"], textarea {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
        background-color: #947b8f;
        color: white;
        padding: 10px 20px;
         border: none;
        border-radius: 4px;
        cursor: pointer;
}
        input[type="submit"]:hover {
            background-color: #947b8f;
        }
    </style>
</head>
<body>
<div class="container">
        <h2>Edit Product</h2>
        <form action="admin.php" method="POST">
            <input type="hidden" name="product_id" value="<?php echo isset($product['id']) ? $product['id'] : ''; ?>">
            
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="<?php echo isset($product['name']) ? $product['name'] : ''; ?>" required>
            
            <label for="price">Price:</label>
            <input type="number" id="price" name="price" value="<?php echo isset($product['price']) ? $product['price'] : ''; ?>" min="0" step="0.01" required>
            
            <label for="description">Description:</label>
            <textarea id="description" name="description" rows="4" required><?php echo isset($product['description']) ? $product['description'] : ''; ?></textarea>
            
            <input type="submit" name="edit_product" value="Save Changes">
        </form>
    </div>
    <!-- <div class="container">
        <h2>Edit Product</h2>
        <form action="admin.php" method="POST">
            <input type="hidden" name="product_id" value="<?php echo $product['id']; ?>">
            
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="<?php echo $product['name']; ?>" required>
            
            <label for="price">Price:</label>
            <input type="number" id="price" name="price" value="<?php echo $product['price']; ?>" min="0" step="0.01" required>
            
            <label for="description">Description:</label>
            <textarea id="description" name="description" rows="4" required><?php echo $product['description']; ?></textarea>
            
            <input type="submit" name="edit_product" value="Save Changes">
        </form>
    </div> -->
</body>
</html>
