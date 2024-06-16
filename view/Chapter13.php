<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Database Operations in PHP</title>
    <link rel="stylesheet" href="../styles/chapter13.css">
</head>

<body>
    <div id="container">
        <header>
            <h2>This chapter is about Database Operations in PHP</h2>
        </header>
        <main>
            <h3>Inserting Data into a Database</h3>
            <p>To insert data into a database using PHP, you can use the following syntax:</p>
            <pre>
INSERT INTO table_name (column1, column2, column3, ...)
VALUES (value1, value2, value3, ...);
            </pre>
            <?php
            // Include the database connection file
            // include_once("your database file location ");

            // // Inserting Data into a Database
            // $sql = "INSERT INTO table_name (column1, column2, column3, ...)
            //         VALUES (value1, value2, value3, ...)";
            // // Execute the SQL query
            // mysqli_query($conn, $sql);
            ?>

            <h3>Updating Data in a Database</h3>
            <p>To update data in a database using PHP, you can use the following syntax:</p>
            <pre>
UPDATE table_name
SET column1 = value1, column2 = value2, ...
WHERE condition;
            </pre>
            <?php
            // // Updating Data in a Database
            // $sql = "UPDATE table_name
            //         SET column1 = value1, column2 = value2, ...
            //         WHERE condition";
            // // Execute the SQL query
            // mysqli_query($conn, $sql);
            ?>

            <h3>Deleting Data from a Database</h3>
            <p>To delete data from a database using PHP, you can use the following syntax:</p>
            <pre>
DELETE FROM table_name
WHERE condition;
            </pre>
            <?php
            // // Deleting Data from a Database
            // $sql = "DELETE FROM table_name
            //         WHERE condition";
            // // Execute the SQL query
            // mysqli_query($conn, $sql);
            ?>

            <h3>Selecting Data from a Database</h3>
            <p>To select data from a database using PHP, you can use the following syntax:</p>
            <pre>
SELECT column1, column2, ...
FROM table_name
WHERE condition;
            </pre>
            <?php
            // // Selecting Data from a Database
            // $sql = "SELECT column1, column2, ...
            //         FROM table_name
            //         WHERE condition";
            // // Execute the SQL query and store the result
            // $result = mysqli_query($conn, $sql);

            // You can also use other SQL commands and clauses such as JOIN, ORDER BY, GROUP BY, etc., to perform more complex database operations.
            ?>
        </main>
    </div>
</body>

</html>