<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Shopping Website</title>
    
    <style>
        body{
            font-family: Arial, sans-serif;
            margin:0;
            padding:0;
            background:#f2f2f2;
        }

        header{
            background:#007bff;
            color:white;
            padding:20px;
            text-align:center;
        }

        nav{
            background:#333;
            padding:15px;
            text-align:center;
        }

        nav a{
            color:white;
            text-decoration:none;
            margin:15px;
            font-size:18px;
        }

        nav a:hover{
            color:yellow;
        }

        .btn{
            background:green;
            color:white;
            padding:12px 25px;
            text-decoration:none;
            border-radius:5px;
            font-size:18px;
        }

        .btn:hover{
            background:darkgreen;
        }

        /* Slider */

        .slider{
            width:100%;
            height:450px;
            position:relative;
            overflow:hidden;
        }

        .slide{
            width:100%;
            height:450px;
            position:absolute;
            top:0;
            left:0;
            object-fit:cover;
            opacity:0;
            transition:opacity 1s ease-in-out;
        }

        .slide.active{
            opacity:1;
        }

        .container{
            width:80%;
            margin:auto;
            text-align:center;
            padding:50px;
        }
        

        footer{
            background:#333;
            color:white;
            text-align:center;
            padding:15px;
            position:fixed;
            bottom:0;
            width:100%;
        }
        .whatsapp{
    position:fixed;
    bottom:20px;
    right:20px;
    z-index:999;
}

.whatsapp img{
    width:60px;
    height:60px;
}
        .mobile-frame{
    width:250px;
    height:500px;
    margin:40px auto;
    padding:15px;
    background:#111;
    border:8px solid #444;
    border-radius:40px;
    box-shadow:0 0 20px rgba(0,0,0,0.5);
}

.mobileSwiper{
    width:100%;
    height:100%;
    border-radius:25px;
    overflow:hidden;
}

.mobileSwiper img{
    width:100%;
    height:100%;
    object-fit:cover;
}
    </style>

</head>

<body>

<header>
    <h1>Welcome to Shopping Website</h1>
</header>

<nav>
    <a href="index.php">Home</a>
    <a href="../category/index.php">Category</a>
    <a href="../shopping/index.php">Shopping</a>
    <a href="../cart/index.php">Cart</a>
    <a href="../checkout/index.php">Checkout</a>
    <a href="../shopping/index.php" class="btn">Start Shopping</a>
</nav>

<!-- Image Slider -->

<div class="slider">
    <img src="../images/bag.jpeg" class="slide active">
    <img src="../images/price.jpeg" class="slide">
</div>

<div class="container">

    <h2>Online Shopping System</h2>

    <p>Welcome to our Shopping Website.</p>

    <br>

    <a href="../shopping/index.php" class="btn">
        Shop Now
    </a>

</div>
<div class="mobile-frame">

    <div class="swiper mobileSwiper">

        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <img src="../images/bag.jpeg">
            </div>

            <div class="swiper-slide">
                <img src="../images/price.jpeg">
            </div>


        </div>

    </div>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
var swiper = new Swiper(".watchSwiper",{
    loop:false,
    grabCursor:true,
    allowTouchMove:true,
    simulateTouch:true
});
</script>


    </div>

</div>

</div>
var mobileSwiper = new Swiper(".mobileSwiper", {
    loop:false,
    grabCursor:true,
    allowTouchMove:true,
    simulateTouch:true
});

<footer>
    &copy; <?php echo date("Y"); ?> Shopping Website
</footer>

<script>
let slides = document.querySelectorAll(".slide");
let current = 0;

setInterval(function(){

    slides[current].classList.remove("active");

    current++;

    if(current >= slides.length){
        current = 0;
    }

    slides[current].classList.add("active");

},3000);
</script>
<footer>
    &copy; <?php echo date("Y"); ?> Shopping Website
</footer>

<a href="https://wa.me/916369785331" target="_blank" class="whatsapp">
    <img src="../images/whatsapp.jpeg" alt="WhatsApp">
</a>

</body>
</html>

</body>
</html>