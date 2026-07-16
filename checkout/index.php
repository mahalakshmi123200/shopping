<?php
session_start();
include("../config/database.php");

$total = 0;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Checkout</title>
    <style>
        body{
            font-family: Arial, sans-serif;
            background:#f2f2f2;
        }

        .container{
            width:500px;
            margin:30px auto;
            background:white;
            padding:20px;
            border-radius:10px;
        }

        input, textarea{
            width:100%;
            padding:10px;
            margin:10px 0;
        }

        button{
    background:green;
    color:white;
    padding:10px;
    border:none;
    width:100%;
    cursor:pointer;
}

h2{
    text-align:center;
    background:#007bff;
    color:white;
    padding:12px;
    border-radius:8px;
    margin-bottom:20px;
}
    </style>
</head>
<body>

<div class="container">

<h2>Checkout</h2>

<?php

if(isset($_SESSION['cart']))
{
    foreach($_SESSION['cart'] as $id)
    {
        $sql = "SELECT * FROM products WHERE id='$id'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);

        $total += $row['price'];
    }
}

?>

<h3>Total Amount : ₹<?php echo $total; ?></h3>

<form action="../placeorder/index.php" method="POST">

    <input type="text" name="customer_name" placeholder="Enter Your Name" required>

    <input type="text" name="phone" placeholder="Enter Mobile Number" required>

    <textarea name="address" placeholder="Enter Address" required></textarea>

    <button type="submit">Place Order</button>

</form>

</div>


</body>

</html>