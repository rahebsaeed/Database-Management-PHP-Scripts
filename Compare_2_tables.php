<?php
/* 
Code content explanation
##file Compare_2_tables.php
compare a column in table1 and table2
 if there is a column (name) in table2 equal
 a column (name) in able1 
 remove row from table2 */



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

// Select matching names from table2 that exist in table1
$select_query = "
    SELECT t2.name 
    FROM table2 t2
    INNER JOIN table1 t1 ON t2.name = t1.name
";

$result = $conn->query($select_query);

if ($result->num_rows > 0) {
    echo "The following names will be deleted from table2:<br>";
    $names_to_delete = [];

    // Fetch and display names
    while ($row = $result->fetch_assoc()) {
        echo $row['name'] . "<br>";
        $names_to_delete[] = $row['name'];
    }

    // Delete matching rows from table2
    $delete_query = "
        DELETE t2 
        FROM table2 t2
        INNER JOIN table1 t1 ON t2.name = t1.name
    ";

    if ($conn->query($delete_query) === TRUE) {
        echo "Matching rows have been removed from table2.<br>";
    } else {
        echo "Error removing rows: " . $conn->error . "<br>";
    }
} else {
    echo "No matching names found to delete in table2.<br>";
}

$conn->close();
?>
