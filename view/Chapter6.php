<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Associative Arrays</title>
    <link rel="stylesheet" href="../styles/chapter6.css">
</head>

<body>
    <div id="container">
        <header>
            <h2>This chapter is about Associative Arrays</h2>
        </header>
        <main>
            <p>An associative array is an array made of key => value pairs.</p>
            <p>Functions like array_pop, array_shift, array_reverse, and count work the same way for associative arrays.</p>
            <br>
            <?php
            $capitals = array(
                "USA" => "Washington",
                "Japan" => "Tokyo",
                "Lebanon" => "Beirut"
            );

            echo "<p>Printing associative array:</p>";
            foreach ($capitals as $country => $capital) {
                echo "<p>{$country} = {$capital}</p>";
            }

            echo "<p>Array after flipping keys and values:</p>";
            $flippedCapitals = array_flip($capitals);
            foreach ($flippedCapitals as $capital => $country) {
                echo "<p>{$capital} = {$country}</p>";
            }
            echo "<p>Note that you have to make a new array or assign the old one again to the new value of the array_flip.</p>";
            ?>
        </main>
        <footer>
            <a href="Chapter7.php" class="next-link">Next chapter</a>
        </footer>
    </div>
</body>

</html>