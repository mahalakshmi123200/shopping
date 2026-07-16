<?php
session_start();
include("../config/database.php");
if (isset($_SESSION['cart']) && is_array($_SESSION['cart']) && count($_SESSION['cart']) > 0)
{
    foreach ($_SESSION['cart'] as $product_id)
    {
        $sql = "INSERT INTO orders(product_id) VALUES('$product_id')";
        mysqli_query($conn, $sql);
    }

    unset($_SESSION['cart']);
}

// Save each product in orders table
if (isset($_SESSION['cart']) && is_array($_SESSION['cart']) && count($_SESSION['cart']) > 0) {

    foreach ($_SESSION['cart'] as $product_id) {

        $sql = "INSERT INTO orders (product_id) VALUES ('$product_id')";

        if (!mysqli_query($conn, $sql)) {
            die("Database Error: " . mysqli_error($conn));
        }
    }

    unset($_SESSION['cart']);
}
// Clear cart
unset($_SESSION['cart']);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Order Success</title>
    <audio id="successSound" autoplay>
    <source src="../sound/success.mpeg" type="audio/mpeg">
</audio>

    <style>
        body{
            font-family: Arial, sans-serif;
            background:#f2f2f2;
        }

        .success-box{
            width:500px;
            margin:80px auto;
            background:white;
            padding:30px;
            text-align:center;
            border-radius:10px;
            box-shadow:0px 0px 10px #ccc;
        }

        .tick{
            font-size:80px;
            color:green;
        }

        h2{
            color:green;
            font-size:32px;
            margin-top:10px;
        }

        p{
            font-size:20px;
            color:#333;
        }

        .btn{
            display:inline-block;
            margin-top:20px;
            padding:12px 25px;
            background:#007bff;
            color:white;
            text-decoration:none;
            border-radius:6px;
            font-size:18px;
        }

        .btn:hover{
            background:#0056b3;
        }
    </style>
</head>

<body>

<div class="success-box">

    <div class="tick">✅</div>

    <h2>Order Placed Successfully!</h2>

    <p>Thank you for shopping with us.</p>

    <a href="../home/index.php" class="btn">Continue Shopping</a>

</div>

</body>
</html>