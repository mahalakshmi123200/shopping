<?php
include("../config/database.php");

$sql = "SELECT * FROM categories";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Categories</title>

    <style>
        body{
            font-family:Arial,sans-serif;
            background:#f2f2f2;
        }

        h1{
            text-align:center;
        }

        .container{
            width:90%;
            margin:auto;
            display:flex;
            flex-wrap:wrap;
            justify-content:center;
        }

        .category{
            width:220px;
            margin:15px;
            padding:20px;
            background:white;
            text-align:center;
            border-radius:10px;
            box-shadow:0 0 10px #ccc;
        }

        .btn{
            display:inline-block;
            margin-top:10px;
            text-decoration:none;
            color:white;
            background:blue;
            padding:10px 20px;
            border-radius:5px;
        }

        .btn:hover{
            background:darkblue;
        }

    </style>

</head>

<body>

<h1>Product Categories</h1>

<div class="container">

<?php

if(mysqli_num_rows($result)>0)
{
    while($row=mysqli_fetch_assoc($result))
    {

?>

<div class="category">

<h3><?php echo $row['category_name']; ?></h3>

<br>

<?php

if($row['id']==3)
{

?>

<a href="watch.php" class="btn">View Products</a>

<?php

}
else
{

?>

<a href="../shopping/index.php?category=<?php echo $row['id']; ?>" class="btn">
View Products
</a>

<?php

}

?>

</div>

<?php

    }
}
else
{
    echo "<h3>No Categories Found</h3>";
}

?>

</div>

</body>
</html>