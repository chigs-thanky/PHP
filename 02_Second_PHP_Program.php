<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .total{
            color: red;
            font-size: 100px;
            /* font-family: cursive; */
            background-color: yellow;
            text-align: center;
            margin: 20px;
            /* margin-left: 50px; */
            padding: 50px;

        }
        marquee {
            text-align: center;
        }
    </style>
</head>
<body>
    
    <div class="total">
        <marquee behavior="" direction="" scrollamount="20">
        <?php
    $num1 = 2;
    $num2 = 5;
    // echo $num1 + $num2;
    echo "Hello World";
    ?>
        </marquee>
    
    </div>
</body>
</html>