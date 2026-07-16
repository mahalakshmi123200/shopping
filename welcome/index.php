<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>

    <style>
        body{
            margin:0;
            font-family:Arial,sans-serif;
            display:flex;
            justify-content:center;
            align-items:center;
            height:100vh;
            background:linear-gradient(to right,#4facfe,#00f2fe);
        }

        .container{
            text-align:center;
        }

        h1{
            color:white;
            font-size:42px;
            margin-bottom:25px;
            text-shadow:2px 2px 5px black;
            letter-spacing:2px;
        }

        .circle{
            width:420px;
            height:420px;
            background:white;
            border-radius:50%;
            display:flex;
            flex-direction:column;
            justify-content:center;
            align-items:center;
            border:8px solid #28a745;
            box-shadow:0 0 30px rgba(0,0,0,0.3);
            position:relative;
        }

        /* Decorative Circle */
        .circle::before{
            content:"";
            position:absolute;
            width:450px;
            height:450px;
            border:3px dashed white;
            border-radius:50%;
            pointer-events:none;
        }

        .logo{
            width:140px;
            height:140px;
            border-radius:50%;
            object-fit:cover;
            border:5px solid #007bff;
            box-shadow:0 0 15px #007bff;
        }

        h2{
            color:#007bff;
            margin:20px 0 10px;
            font-size:30px;
        }

        p{
            font-size:20px;
            color:#555;
        }

        .btn{
            position:relative;
            z-index:2;
            margin-top:20px;
            display:inline-block;
            padding:14px 30px;
            background:linear-gradient(to right,#28a745,#0b8d2f);
            color:white;
            text-decoration:none;
            border-radius:30px;
            font-size:20px;
            font-weight:bold;
            transition:0.3s;
        }

        .btn:hover{
            background:linear-gradient(to right,#0b8d2f,#28a745);
            transform:scale(1.05);
        }
    </style>
</head>
<body>

<div class="container">

    <h1>MAHI SHOPPING</h1>

    <div class="circle">

        <img src="../images/logo.jpeg" class="logo">

        <h2>Online Shopping</h2>

        <a href="../home/index.php" class="btn">Start Shopping</a>

    </div>

</div>

</body>
</html>