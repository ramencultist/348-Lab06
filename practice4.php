<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Multiplication Table Result</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px;
            text-align: center;
        }
    </style>
</head>
<body>

<h1>EECS 348 Lab Six - Multiplication Table</h1>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $size = intval($_POST["size"]);

    echo "<h3>Multiplication Table of Size $size</h3>";
    echo "<table>";

    // Display column headers
    echo "<tr><th>*</th>";
    for ($col = 1; $col <= $size; $col++) {
        echo "<th>$col</th>";
    }
    echo "</tr>";

    // Display table rows
    for ($row = 1; $row <= $size; $row++) {
        echo "<tr><th>$row</th>"; // Row header
        for ($col = 1; $col <= $size; $col++) {
            echo "<td>" . ($row * $col) . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "<p>Please submit a size for the multiplication table.</p>";
}
?>

</body>
</html>
