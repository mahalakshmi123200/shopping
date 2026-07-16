<?php
include("../config/database.php");

if (isset($_GET['category'])) {
    $category = $_GET['category'];
    $sql = "SELECT * FROM products WHERE category_id='$category'";
} else {
    $sql = "SELECT * FROM products";
}

$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Shopping</title>
    <style>
        body{
            font-family: Arial, sans-serif;
            background-color:#f8f8f8;
        }

        h1{
            text-align:center;
        }

        .container{
            width:90%;
            margin:auto;
        }
        .card{
    background:white;
    width:250px;
    border-radius:12px;
    box-shadow:0 2px 8px rgba(0,0,0,0.1);
    padding:15px;
    text-align:center;
    transition:0.3s;
}

.card:hover{
    transform:translateY(-5px);
    box-shadow:0 6px 15px rgba(0,0,0,0.2);
}

        .product{
            width:220px;
            display:inline-block;
            margin:15px;
            padding:15px;
            background:white;
            border:1px solid #ddd;
            text-align:center;
            border-radius:8px;
        }

        .product img{
            width:150px;
            height:150px;
        }

        button{
            background:green;
            color:white;
            border:none;
            padding:10px;
            cursor:pointer;
        }
    </style>
</head>
<body>

<h1>Shopping Products</h1>

<div class="container">

<?php
if(mysqli_num_rows($result) > 0)
{
    while($row = mysqli_fetch_assoc($result))
    {
?>
        <div class="product">
            <img src="../images/<?php echo $row['image']; ?>" alt="">
            <h3><?php echo $row['name']; ?></h3>
            <p>₹<?php echo $row['price']; ?></p>

            <form action="../cart/index.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                <button type="submit">Add to Cart</button>
            </form>
        </div>

<?php
    }
}
else
{
    echo "<h3>No Products Found</h3>";
}
?>

</div>

</body>
</html>
