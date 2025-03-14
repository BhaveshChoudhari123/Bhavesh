<!DOCTYPE html>
<head>
</head>
<body>
<form action="" method="post">
    <input type="hidden" name="product" value="Pizza">
    <input type="hidden" name="price" value="120">
    <label for="quantity">Quantity:</label>
    <input type="number" name="quantity" value="1" min="1">
    <button type="submit" class="add-to-cart">Add to Cart</button>
</form>
    

<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product = $_POST["product"];
    $price = $_POST["price"];

    if (!isset($_SESSION["cart"])) {
        $_SESSION["cart"] = array();
    }

    array_push($_SESSION["cart"], array("product" => $product, "price" => $price));

    header("Location: categories.html");
    exit();
}
?>



</body>
</html>