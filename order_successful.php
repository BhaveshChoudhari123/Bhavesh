<!DOCTYPE html>
<html lang="en">
<head>
    <title>Order Successful</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .success-container {
            text-align: center;
            margin-top: 50px;
            font-family: Arial, sans-serif;
        }

        .success-message {
            background-color: #4CAF50;
            color: white;
            padding: 20px;
            font-size: 20px;
            border-radius: 8px;
            display: inline-block;
        }

        .home-button {
            background-color: #ff9800;
            color: white;
            padding: 10px 20px;
            margin-top: 20px;
            text-decoration: none;
            border-radius: 5px;
            display: inline-block;
            font-size: 18px;
        }

        .home-button:hover {
            background-color: #e68900;
        }
    </style>
    <script>
        setTimeout(function(){
            window.location.href = "index.html"; // Redirect to home after 5 seconds
        }, 5000);
    </script>
</head>
<body>

<div class="success-container">
    <div class="success-message"> Order placed successfully! Thank you for ordering with OrderEase. </div>
    <br>
    <a href="index.html" class="home-button">Back to Home</a>
</div>

</body>
</html>