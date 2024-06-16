<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arrays</title>
    <link rel="stylesheet" href="../Styles/Chapter5.css">
</head>

<body>
    <div id="container">
        <header>
            <h2>This chapter is about Arrays</h2>
        </header>
        <main>
            <?php
            $cars = array("BMW", "Tesla", "KIA");
            echo "<p>Printing 1 element: <br>{$cars[0]} <br></p>";
            echo "<p>Printing all elements using foreach loop:</p>";
            echo "<ul>";
            foreach ($cars as $car) {
                echo "<li>{$car}</li>";
            }
            echo "</ul>";

            array_push($cars, "Mercedes", "Honda");
            echo "<p>Printing all elements after adding 2 elements using array_push function:</p>";
            echo "<ul>";
            foreach ($cars as $car) {
                echo "<li>{$car}</li>";
            }
            echo "</ul>";

            array_pop($cars);
            echo "<p>Printing all elements after removing 1 element using array_pop function which will remove the last element:</p>";
            echo "<ul>";
            foreach ($cars as $car) {
                echo "<li>{$car}</li>";
            }
            echo "</ul>";

            array_shift($cars);
            echo "<p>Printing all elements after removing 1 element using array_shift function which will remove the first element:</p>";
            echo "<ul>";
            foreach ($cars as $car) {
                echo "<li>{$car}</li>";
            }
            echo "</ul>";

            echo "<p>Printing all elements after reversing the array using array_reverse function:</p>";
            echo "<p>Be careful because reversing the array doesn't change it but makes a new reversed array so you have to make a new array.</p>";
            $reversedCars = array_reverse($cars);
            echo "<ul>";
            foreach ($reversedCars as $car) {
                echo "<li>{$car}</li>";
            }
            echo "</ul>";

            echo "<p>Printing array size using count function: " . count($cars) . "</p>";
            ?>
        </main>
        <footer>
            <a href="Chapter6.php" class="next-link">Next chapter</a>
        </footer>
    </div>
</body>

</html>