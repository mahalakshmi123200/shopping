<?php
include("../config/database.php");

if (isset($_GET['category'])) {
    $category = (int)$_GET['category']; 
    $sql = "SELECT * FROM products WHERE category_id = $category";
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
            background:#f2f2f2;
        }

        h1{
            text-align:center;
        }

        .container{
            width:90%;
            margin:auto;
        }

        .product{
            width:220px;
            display:inline-block;
            margin:15px;
            padding:15px;
            background:yellow;
            border:1px solid #ddd;
            text-align:center;
            border-radius:8px;
        }
        .product img{
            width:150px;
            height:150px;
            object-fit:cover;
        }
        .review{
    background:#f8f8f8;
    border:1px solid #ddd;
    border-radius:8px;
    padding:10px;
    margin-top:10px;
    width:300px;
}

.review-section{
    width:80%;
    margin:60px auto;
    text-align:center;
    position:relative;
}

.review-section h4{
    color:#777;
    margin-bottom:5px;
}

.review-slider{
    position:relative;
    min-height:180px;
}

.review{
    display:none;
    font-size:20px;
    color:#666;
    text-align:center;
    margin:0 auto;
}

.review.active{
    display:block;
}

.review h3{
    margin-top:20px;
    color:#000;
}

.prev,.next{
    position:absolute;
    top:50%;
    transform:translateY(-50%);
    background:none;
    border:none;
    font-size:35px;
    cursor:pointer;
}

.prev{
    left:120px;
}

.next{
    right:120px;
}

.dots{
    margin-top:20px;
}

.dot{
    width:12px;
    height:12px;
    background:#ccc;
    display:inline-block;
    border-radius:50%;
    margin:5px;
    cursor:pointer;
}

.activeDot{
    background:orange;
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

<?php
if(trim(strtolower($row['name'])) == "watch")
{
?>
    <a href="../category/watch.php">
        <img src="../images/<?php echo $row['image']; ?>" alt="">
    </a>
<?php
}
else
{
?>
    <img src="../images/<?php echo $row['image']; ?>" alt="">
<?php
}
?>

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
<div class="review-section">

    <h4>OUR TESTIMONIAL</h4>
    <h1>Customer Review</h1>

    <div class="review-slider">

        <div class="review active">
            <p>
                "Excellent product. Very good quality and fast delivery.
                I am fully satisfied."
            </p>
            <h3>Rahul K.</h3>
            <span>Chennai</span>
        </div>

        <div class="review">
            <p>
                "Nice product. Worth buying. Packaging was very good."
            </p>
            <h3>Priya S.</h3>
            <span>Madurai</span>
        </div>

        <div class="review">
            <p>
                "Amazing watch. Battery backup is excellent."
            </p>
            <h3>Karthik R.</h3>
            <span>Coimbatore</span>
        </div>

    </div>

    <button class="prev" onclick="prevReview()">❮</button>
    <button class="next" onclick="nextReview()">❯</button>

    <div class="dots">
        <span class="dot activeDot" onclick="showReview(0)"></span>
        <span class="dot" onclick="showReview(1)"></span>
        <span class="dot" onclick="showReview(2)"></span>
    </div>

</div>
<script>

let current=0;

let reviews=document.querySelectorAll(".review");
let dots=document.querySelectorAll(".dot");

function showReview(index){

reviews[current].classList.remove("active");
dots[current].classList.remove("activeDot");

current=index;

reviews[current].classList.add("active");
dots[current].classList.add("activeDot");

}

function nextReview(){

let n=(current+1)%reviews.length;
showReview(n);

}

function prevReview(){

let p=(current-1+reviews.length)%reviews.length;
showReview(p);

}

setInterval(nextReview,4000);

</script>

</body>
</html>