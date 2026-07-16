<?php
session_start();
include("../config/database.php");

// Add product to cart
if (isset($_POST['id'])) {
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }

    $_SESSION['cart'][] = $_POST['id'];
}

$total = 0;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Shopping Cart</title>

    <style>
        body{
            font-family: Arial, sans-serif;
            background:#fff9c4;
        }

        h1{
            text-align:center;
            color:white;
            background:#007bff;
            padding:12px;
            border-radius:8px;
            width:80%;
            margin:20px auto;
        }

        table{
            width:80%;
            margin:auto;
            border-collapse:collapse;
            background:white;
        }

        th,td{
            border:1px solid #ccc;
            padding:10px;
            text-align:center;
        }

        a{
            text-decoration:none;
            color:red;
        }

        .checkout-btn{
            background:green;
            color:white;
            padding:10px 20px;
            border:none;
            border-radius:5px;
            cursor:pointer;
            font-size:16px;
        }

        .checkout-btn:hover{
            background:darkgreen;
        }
    </style>
</head>

<body>

<h1>My Shopping Cart</h1>

<table>

<tr>
    <th>Product</th>
    <th>Price</th>
    <th>Action</th>
</tr>

<?php

if(isset($_SESSION['cart']) && count($_SESSION['cart']) > 0)
{
    foreach($_SESSION['cart'] as $id)
    {
        $sql = "SELECT * FROM products WHERE id='$id'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);

        if($row)
        {
            $total += $row['price'];
?>

<tr>
    <td><?php echo $row['name']; ?></td>
    <td>₹<?php echo $row['price']; ?></td>
    <td>
        <a href="remove_cart.php?id=<?php echo $row['id']; ?>">Remove</a>
    </td>
</tr>

<?php
        }
    }
}
else
{
    echo "<tr><td colspan='3'>Cart is Empty</td></tr>";
}
?>

<tr>
    <th>Total</th>
    <th>₹<?php echo $total; ?></th>
    <th></th>
</tr>

<tr>
    <td colspan="3" style="text-align:center;">
        <a href="../checkout/index.php">
            <button type="button" class="checkout-btn">Checkout</button>
        </a>
    </td>
</tr>

</table>

</body>
</html>