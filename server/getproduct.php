<?php
include_once("./db/connect.php");

class Product {
    public $name;
    public $price;
    public $description;
    public $image;
}

$query = "select * from products";
$result = $conn->query($query);

if($result){
    while ($row = $result->fetch_assoc()){
        $product = new Product();
        $product->name = $row["product_name"];
        $product->price = $row["price"];
        $product->description = $row["description"];
        $product->image = $row["product_image"];

        $productJson = json_encode($product);        
    }
}
echo $productJson;
