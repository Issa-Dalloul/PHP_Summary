<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Checkboxes in PHP</title>
    <link rel="stylesheet" href="../Styles/Chapter7.css">
</head>

<body>
    <div id="container">
        <header>
            <h2>This chapter is about Checkboxes in PHP</h2>
        </header>
        <main>
            <h3>Checkboxes using the basic method</h3>
            <form action="Chapter7.php" method="post" class="checkbox-form">
                <input type="checkbox" id="pizza" name="pizza" value="Pizza">
                <label for="pizza">Pizza</label><br>

                <input type="checkbox" id="hamburger" name="hamburger" value="Hamburger">
                <label for="hamburger">Hamburgers</label><br>

                <input type="checkbox" id="hotdog" name="hotdog" value="Hotdog">
                <label for="hotdog">Hotdog</label><br>

                <input type="checkbox" id="taco" name="taco" value="Taco">
                <label for="taco">Taco</label><br>

                <input type="submit" name="submit" value="Submit">
            </form>

            <?php
            if (isset($_POST["submit"])) {
                if (isset($_POST["pizza"])) {
                    echo "<p>You like pizza</p>";
                } else {
                    echo "<p>You don't like pizza</p>";
                }
                if (isset($_POST["hamburger"])) {
                    echo "<p>You like hamburgers</p>";
                } else {
                    echo "<p>You don't like hamburgers</p>";
                }
                if (isset($_POST["hotdog"])) {
                    echo "<p>You like hotdogs</p>";
                } else {
                    echo "<p>You don't like hotdogs</p>";
                }
                if (isset($_POST["taco"])) {
                    echo "<p>You like tacos</p>";
                } else {
                    echo "<p>You don't like tacos</p>";
                }
            }
            ?>
            <br>
            <a href="Chapter7(2).php" class="next-link">Better way to use checkboxes</a><br>
        </main>
    </div>
</body>

</html>