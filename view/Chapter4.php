<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Loops</title>
    <link rel="stylesheet" href="../styles/Chapter4.css">
</head>

<body>
    <div id="container">
        <header>
            <h2 id="title">This chapter is about Loops</h2>
        </header>
        <main>
            <form action="chapter4.php" method="post" class="form">
                <label for="for-loop">Count till __ using for loop:</label>
                <input type="number" id="for-loop" name="For">

                <label for="while-loop">Count till __ using while loop:</label>
                <input type="number" id="while-loop" name="While">

                <input type="submit" value="Submit" class="submit-button">
            </form>

            <div class="output">
                <?php
                if (isset($_POST["For"]) && isset($_POST["While"])) {
                    $Counter1 = $_POST["For"];
                    $Counter2 = $_POST["While"];

                    echo "<p>Start of the for loop:</p>";
                    for ($i = 1; $i <= $Counter1; $i++) {
                        echo "<p>$i</p>";
                    }
                    echo "<p>End of the for loop</p>";

                    echo "<p>Start of the while loop:</p>";
                    $i = 1;
                    while ($i <= $Counter2) {
                        echo "<p>$i</p>";
                        $i++;
                    }
                    echo "<p>End of the while loop</p>";
                }
                ?>
            </div>

            <a href="Chapter5.php" class="next-link">Next chapter</a>
        </main>
    </div>
</body>

</html>