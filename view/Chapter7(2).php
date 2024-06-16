<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Using Arrays for Checkboxes in PHP</title>
    <link rel="stylesheet" href="../styles/chapter7.css">
</head>

<body>
    <div id="container">
        <header>
            <h3>In this way, you will get the same results but you will be storing the values in an array so you can use loops instead of tons of if statements</h3>
        </header>
        <main>
            <form action="Chapter7(2).php" method="post" class="checkbox-form">
                <input type="checkbox" id="pizza" name="foods[]" value="Pizza">
                <label for="pizza">Pizza</label><br>

                <input type="checkbox" id="hamburger" name="foods[]" value="Hamburger">
                <label for="hamburger">Hamburger</label><br>

                <input type="checkbox" id="hotdog" name="foods[]" value="Hotdog">
                <label for="hotdog">Hotdog</label><br>

                <input type="checkbox" id="taco" name="foods[]" value="Taco">
                <label for="taco">Taco</label><br>

                <input type="submit" name="submit" value="Submit">
            </form>

            <?php
            if (isset($_POST["submit"])) {
                if (!empty($_POST["foods"])) {
                    $foods = $_POST["foods"];

                    echo "<p>You like:</p>";
                    echo "<ul>";
                    foreach ($foods as $food) {
                        echo "<li>$food</li>";
                    }
                    echo "</ul>";
                } else {
                    echo "<p>You didn't select any foods.</p>";
                }
            }
            ?>
            <br>
            <a href="Chapter8.php" class="next-link">Next chapter</a><br>
        </main>
    </div>
</body>

</html>