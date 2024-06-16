<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Math Functions</title>
    <link rel="stylesheet" href="../styles/Chapter1.css">
</head>

<body>
    <div id="container">
        <header>
            <h2 id="title">PHP Math Functions</h2>
        </header>
        <main>
            <div class="content">
                <?php
                $product = "Book"; // variable
                $price = 10;     // variable

                echo "<p>Our Product is a : </p>"; //print a string
                echo "<p class='highlight'>" . $product . "</p><br> ";  //print a variable and use . to concatenate 
                echo "<p>Our Product is a : {$product}</p><br>"; //print both, use {} for variables 
                echo "<p>Price: {$price} \$</p><br>"; //print the $ in that way

                echo "<h3>Some math functions now:</h3>";
                $x = -10;
                $y = 25;
                $z = 10.82;
                $m = 2;

                $aux = abs($x);
                echo "<p>{$aux} - absolute value function</p><br>";

                $aux = round($z);
                echo "<p>{$aux} - rounding function</p><br>";

                $aux = floor($z);
                echo "<p>{$aux} - floor function</p><br>";

                $aux = sqrt($y);
                echo "<p>{$aux} - radical function</p><br>";

                $aux = pow($z, $m);
                echo "<p>{$aux} - power function</p><br>";

                $aux = min($x, $y, $z);
                echo "<p>{$aux} - minimum function</p><br>";

                $aux = max($x, $y, $z);
                echo "<p>{$aux} - maximum function</p><br>";

                $aux = pi();
                echo "<p>{$aux} - pi function</p><br>";

                $aux = rand(1, 100);
                echo "<p>{$aux} - random function (number between 1 and 100)</p><br>";
                ?>
                <p>Read the Code For some comments</p>
                <a href="Chapter2.php" class="next-link">Next chapter</a>
            </div>
        </main>
    </div>
</body>

</html>