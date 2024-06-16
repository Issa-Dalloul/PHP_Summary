<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Input Validation in PHP</title>
    <link rel="stylesheet" href="../styles/chapter10.css">
</head>

<body>
    <div id="container">
        <header>
            <h2>This chapter is about Input Validation in PHP</h2>
        </header>
        <main>
            <form action="Chapter10.php" method="post" class="input-validation-form">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
                <br>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <br>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
                <br>

                <input type="submit" value="Submit" name="submit">
            </form>

            <?php
            if (isset($_POST["submit"])) {
                $username = $_POST["username"];
                $email = $_POST["email"];
                $password = $_POST["password"];

                // Validate username
                if (empty($username)) {
                    echo "<p class='error'>Username is required.</p>";
                } else {
                    // Check if username contains only letters and whitespace
                    if (!preg_match("/^[a-zA-Z ]*$/", $username)) {
                        echo "<p class='error'>Only letters and white space allowed in username.</p>";
                    }
                }

                // Validate email
                if (empty($email)) {
                    echo "<p class='error'>Email is required.</p>";
                } else {
                    // Check if email address is well-formed
                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        echo "<p class='error'>Invalid email format.</p>";
                    }
                }

                // Validate password
                if (empty($password)) {
                    echo "<p class='error'>Password is required.</p>";
                } else {
                    // Check if password is at least 8 characters long and contains at least one number and one uppercase letter
                    if (!preg_match("/^(?=.*\d)(?=.*[A-Z]).{8,}$/", $password)) {
                        echo "<p class='error'>Password must be at least 8 characters long and contain at least one number and one uppercase letter.</p>";
                    }
                }
            }
            ?>
        </main>
        <footer>
            <a href="Chapter11.php" class="next-link">Next chapter</a>
        </footer>
    </div>
</body>

</html>