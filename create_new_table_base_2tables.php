<?php

// Database connection settings
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL to create table3 with the desired columns
$create_table_query = "
    CREATE TABLE table3 (
        name VARCHAR(255),
        carte VARCHAR(255),
        phone VARCHAR(255),
        sum VARCHAR(255),
        city VARCHAR(255)
    )
";

if ($conn->query($create_table_query) === TRUE) {
    echo "Table table3 created successfully.<br>";
} else {
    echo "Error creating table: " . $conn->error . "<br>";
}

// Insert rows from table1 into table3
$insert_table1_query = "
    INSERT INTO table3 (name, carte, phone, sum, city)
    SELECT name, carte, phone, sum, city 
    FROM table1
";

if ($conn->query($insert_table1_query) === TRUE) {
    echo "Rows from table1 inserted into table3.<br>";
} else {
    echo "Error inserting rows from table1: " . $conn->error . "<br>";
}

// Insert rows from table2 into table3
$insert_table2_query = "
    INSERT INTO table3 (name, carte, phone, sum, city)
    SELECT name, carte, phone, sum, city 
    FROM table2
";

if ($conn->query($insert_table2_query) === TRUE) {
    echo "Rows from table2 inserted into table3.<br>";
} else {
    echo "Error inserting rows from table2: " . $conn->error . "<br>";
}

$conn->close();
?>
