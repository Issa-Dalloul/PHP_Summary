<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Radio Buttons in PHP</title>
    <link rel="stylesheet" href="../styles/chapter8.css">
</head>

<body>
    <div id="container">
        <header>
            <h2>This chapter is about Radio buttons in PHP</h2>
        </header>
        <main>
            <form action="Chapter8.php" method="post" class="radio-form">
                <input type="radio" id="visa" name="credit_card" value="Visa">
                <label for="visa">Visa</label><br>

                <input type="radio" id="mastercard" name="credit_card" value="Mastercard">
                <label for="mastercard">Mastercard</label><br>

                <input type="radio" id="amex" name="credit_card" value="American Express">
                <label for="amex">American Express</label><br>

                <input type="submit" value="Confirm" name="confirm">
            </form>

            <?php
            if (isset($_POST["confirm"])) {
                $creditcard = isset($_POST["credit_card"]) ? $_POST["credit_card"] : null;
                if ($creditcard) {
                    echo "You selected $creditcard";
                } else {
                    echo "Please make a selection";
                }
            }
            ?>
        </main>
        <footer>
            <a href="Chapter9.php" class="next-link">Next chapter</a>
        </footer>
    </div>
</body>

</html>