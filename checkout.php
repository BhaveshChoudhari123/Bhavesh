<!DOCTYPE html>
<html lang="en">
<head>
    <title>Styled Form</title>
    <link rel="stylesheet" href="style.css">
    <style>
    button {
    background-color:rgb(247, 20, 4); /* Red color */
    color: white; /* Text color */
    border: none; /* No border */
    padding: 10px 20px; /* Padding for size */
    text-align: center; /* Align text */
    text-decoration: none; /* Remove underline */
    display: inline-block; /* Inline-block */
    font-size: 16px; /* Font size */
    margin: 20px auto; /* Center spacing */
    cursor: pointer; /* Pointer cursor on hover */
    border-radius: 8px; /* Rounded corners */
    transition: background-color 0.3s ease; /* Smooth hover effect */
}

button:hover {
    background-color:rgb(148, 4, 4); /* Darker red on hover */
}

.response {
    background-color: #4CAF50; /* Green success color */
    color: white;
    padding: 15px;
    text-align: center;
    font-size: 18px;
    margin-top: 20px;
    border-radius: 8px;
}



</style>
</head>

<body>
    <div class="check">
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <h2>Submit Your Info</h2>
        Name: <input type="text" name="name" required>
        Address: <input type="text" name="address" required>
        Phone No: <input type="number" name="number" required>
        E-mail: <input type="email" name="email" required>
        Payment: <input type="text" value="Cash on delivery" readonly>
        <button type="submit">Next</button>
        </div>
    </form>
    <button onclick="document.location = 'index.html'">Back To Home</button>
</body>
</html>

<?php
error_reporting(0); 
ini_set('display_errors', 0); 

// Database connection details
$host = "localhost";
$username = "root";
$password = "";
$database = "orderease"; // Replace with your database name

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to insert data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $phone_number = $_POST['number'];
    $email = $_POST['email'];
    $payment_mode = "Cash on delivery";

    // SQL query to insert data into the table
    $sql = "INSERT INTO users (name, address, phone_number, email, payment_mode) VALUES (?, ?, ?, ?, ?)";

    // Prepare statement
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssiss", $name, $address, $phone_number, $email, $payment_mode);

    // Execute statement
    if ($stmt->execute()) {
        // Redirect to success page
        header("Location: order_successful.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
}
?>