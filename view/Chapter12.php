<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Connecting to a Database with XAMPP</title>
    <link rel="stylesheet" href="../styles/chapter12.css">
</head>

<body>
    <div id="container">
        <header>
            <h2>This chapter is about connecting to a database with XAMPP</h2>
        </header>
        <main>
            <h3>Step 1: Install XAMPP</h3>
            <p>XAMPP is a free and open-source cross-platform web server solution stack package developed by Apache Friends. It consists mainly of the Apache HTTP Server, MariaDB database, and interpreters for scripts written in PHP and Perl.</p>
            <p>To install XAMPP, download the installer from the official website and follow the installation instructions. Once installed, start the Apache and MySQL modules from the XAMPP Control Panel.</p>

            <h3>Step 2: Access phpMyAdmin</h3>
            <p>phpMyAdmin is a free and open-source administration tool for managing MySQL and MariaDB databases. It provides a web interface to perform database management tasks such as creating, deleting, and modifying databases, tables, and records.</p>
            <p>To access phpMyAdmin, open your web browser and navigate to http://localhost/phpmyadmin/. Log in using the default username (root) and password (blank).</p>

            <h3>Step 3: Create a Database</h3>
            <p>In phpMyAdmin, click on the "Databases" tab and enter a name for your new database in the "Create database" field. Click the "Create" button to create the database.</p>

            <h3>Step 4: Create a Table</h3>
            <p>Inside your newly created database, click on the "SQL" tab and enter the SQL query to create a table. For example:</p>
            <pre>
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL
);
            </pre>
            <p>Execute the query to create the table.</p>

            <h3>Step 5: Connect to the Database in PHP</h3>
            <p>Now that your database is set up, you can connect to it using PHP. Below is an example PHP code to connect to the database:</p>
            <pre>
            <p>After the database creation make a new file for database connection example : (db_connection.php) and check the code ,uncomment it and do the necessary changes.<br>     
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "your_database_name";
            </p>
            <?php

            // $servername = "localhost";
            // $username = "root";
            // $password = "";
            // $database = "your_database_name";
            // // Create connection
            // $conn = new mysqli($servername, $username, $password, $database);

            // // Check connection
            // if ($conn->connect_error) {
            //     die("Connection failed: " . $conn->connect_error);
            // } else {
            //     echo "Connected successfully";
            // }
            ?>
            </pre>
            <p>Replace "your_database_name" with the name of your database.</p>

            <h3>Step 6: Perform Database Operations</h3>
            <p>Once connected, you can perform various database operations such as inserting, updating, deleting, and selecting records.</p>
        </main>
        <footer>

            <a href="Chapter13.php" class="next-link">Next chapter</a>
        </footer>
    </div>
</body>

</html>