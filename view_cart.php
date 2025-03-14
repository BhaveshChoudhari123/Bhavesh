<?php
session_start();

// Handle item removal before any HTML output
if (isset($_GET["remove"]) && isset($_SESSION["cart"])) {
    $removeIndex = $_GET["remove"];
    if (isset($_SESSION["cart"][$removeIndex])) {
        unset($_SESSION["cart"][$removeIndex]);
        $_SESSION["cart"] = array_values($_SESSION["cart"]); // Re-index array
    }
    header("Location: view_cart.php"); // Refresh the page
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cart</title>
    <link rel="stylesheet" href="style.css">
    <style>
        button {
            background-color: #f44336; /* Red color */
            color: white; /* Text color */
            border: none; /* No border */
            padding: 10px 20px; /* Padding for size */
            text-align: center; /* Align text */
            text-decoration: none; /* Remove underline */
            display: inline-block; /* Inline-block */
            font-size: 16px; /* Font size */
            margin: 10px auto; /* Center spacing */
            cursor: pointer; /* Pointer cursor on hover */
            border-radius: 8px; /* Rounded corners */
            transition: background-color 0.3s ease; /* Smooth hover effect */
        }

        button:hover {
            background-color: #d32f2f; /* Darker red on hover */
        }

        .cart-list {
            text-align: center;
            margin-top: 20px;
        }

        .cart-item {
            display: flex;
            justify-content: space-between;
            width: 50%;
            margin: 10px auto;
            padding: 10px;
            background: #222;
            color: white;
            border-radius: 8px;
            
        }

        .remove-btn {
            background-color: red;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
            border-radius: 5px;
            text-decoration: none;
        }

        .remove-btn:hover {
            background-color: darkred;
        }





        body{
        width: 100%;
       background:  url(restrrr.png);
       background-position: center;
       background-size: cover;
       height: 109vh;
       background-color: #111;
       color: white;
       }
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: sans-serif;
    text-decoration: none;
    list-style: none;
}

a {
    text-decoration: none;
}

.hero{
    min-height: 150vh;
    background-position: center;
    background-size: auto;
    background-repeat: no-repeat;
    text-decoration: none;
}

nav{
    display: flex;
    align-items: center;
    justify-content: space-between;
    width: 90%;
    margin: auto;
    padding-top: 20px;
    text-decoration: none;
}

.logo{
    color: #e78f38;
    font-size: 30px;
    font-weight: bolder;
    transition: .3s;
    text-decoration: none;
}

header {
    display: flex;
    align-items: center;
    justify-content: flex-start;
    padding: 20px 50px;
    background: rgba(0, 0, 0, 0.9);
}

nav {
    margin-left: auto; /* Pushes navigation to the right */
    text-align: right;
}

.logo:hover{
    transform: translateX(20px);
    text-decoration: none;
}
nav ul{
    display: flex;
    align-items: center;
    text-decoration: none;
    text-align: right;
}

nav ul li{
    margin: 0 20px;
    text-decoration: none;
    text-align: right;
}

nav ul li a{
    font-size: 15px;
    color: #fff;
    text-transform: uppercase;
    text-decoration: none;
}

nav ul li a:hover{
    color: #e78f38;
    text-decoration: none;
}

nav button{
    background: red;
    border: none;
    color: #fff;
    padding: 12px 35px;
    font-size: 15px;
    font-weight: 600;
    border-radius: 2rem;
    transition: .3s;
    text-decoration: none;
    text-align: right;
}

nav button:hover{
    scale: .8;
    text-decoration: none;
    text-align: right;
}

.content{
    position: absolute;
    top: 35%;
    left: 90px;
    text-decoration: none;
}

h2{
    font-size: 50px;
    text-transform: uppercase;
    color: #fff;
    text-decoration: none;
}
p{
    font-size: 10px;
    margin-top: 10px;
    color: #eee;
}

.content button{
    margin-top: 50px;
    background: red;
    border: 2px solid #e78f38;
    color: #fff;
    padding: 12px 45px;
    font-size: 15px;
    font-weight: 600;
    border-radius: 2rem;
    transition: .3s;
    text-decoration: none;
}

.content button:hover{
    scale: .8;
    text-decoration: none;
}
    </style>
</head>
<body>

<body>
        <section class="hero">
            <nav>
                <a href="#" class="logo">OrderEase</a>
    
                <ul>
                    <li><a href="index.html"><button>Home</button></a></li>
                    <li><a href="categories.html"><button>Menu</button></a></li>
                </ul>
                
            </nav>
</body>

    <main>
        <h1>Your Cart</h1>
        
        <div class="cart-list">
            <?php
            if (isset($_SESSION["cart"]) && count($_SESSION["cart"]) > 0) {
                echo "<ul>";
                foreach ($_SESSION["cart"] as $index => $item) {
                    echo "<div class='cart-item'>
                            <span>{$item['product']} - \${$item['price']}</span>
                            <a href='view_cart.php?remove=$index' class='remove-btn'>Remove</a>
                          </div>";
                }
                echo "</ul>";
            } else {
                echo "<p>Your cart is empty.</p>";
            }
            ?>
        </div>
    </main>
    <button onclick="document.location = 'checkout.php'">Check Out</button>

</body>
</html>