<?php
require_once("settings.php");

// Connect to database
$conn = mysqli_connect($host, $user, $pwd, $sql_db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM cars";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<table border='1'>";
    echo "<tr>
            <th>ID</th>
            <th>Make</th>
            <th>Model</th>
            <th>Price</th>
            <th>Year</th>
          </tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['car_id'] . "</td>";
        echo "<td>" . $row['make'] . "</td>";
        echo "<td>" . $row['model'] . "</td>";
        echo "<td>$" . number_format($row['price'], 2) . "</td>";
        echo "<td>" . $row['yom'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "There are no cars to display.";
}

mysqli_close($conn);
?>
