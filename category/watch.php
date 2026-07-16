<!DOCTYPE html>
<html>
<head>
<title>Watch Details</title>

<style>

body{
    font-family:Arial;
    background:#f2f2f2;
    margin:0;
    padding:30px;
}

.container{
    width:900px;
    margin:auto;
    display:flex;
    gap:40px;
    background:#fff;
    padding:20px;
    border-radius:10px;
}

.left{
    width:50%;
    text-align:center;
}

#mainImage{
    width:350px;
    height:350px;
    object-fit:cover;
    border:1px solid #ddd;
}

.thumb{
    margin-top:20px;
}

.thumb img{
    width:70px;
    height:70px;
    margin:5px;
    border:2px solid #ccc;
    cursor:pointer;
}

.thumb img:hover{
    border:2px solid blue;
}

.right{
    width:50%;
}

.price{
    color:green;
    font-size:30px;
    font-weight:bold;
}

button{
    padding:12px 30px;
    font-size:18px;
    margin-top:20px;
    cursor:pointer;
}

.cart{
    background:orange;
    color:white;
    border:none;
}

.buy{
    background:#fb641b;
    color:white;
    border:none;
}

</style>

</head>

<body>

<div class="container">

<div class="left">

<img id="mainImage" src="../images/watch1.jpg">

<div class="thumb">

<img src="../images/watch1.jpg"
onclick="changeImage(this.src)">

<img src="../images/watch2.jpeg"
onclick="changeImage(this.src)">

<img src="../images/watch4.jpeg"
onclick="changeImage(this.src)">

</div>

</div>

<div class="right">

<h1>Smart Watch</h1>

<h2 class="price">₹1500</h2>

<p>

Bluetooth Calling<br><br>

Heart Rate Monitor<br><br>

Fitness Tracking<br><br>

Water Resistant<br><br>

1 Year Warranty

</p>

<a href="../cart/index.php">
    <button>Add to Cart</button>
</a>

<button class="buy">
Buy Now
</button>

</div>

</div>

<script>

function changeImage(image)
{
    document.getElementById("mainImage").src=image;
}

</script>

</body>
</html>