<?php
require_once("settings.php");

// Connect to database
$conn = mysqli_connect($host, $user, $pwd, $sql_db);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Car Search</title>
</head>
<body>

<h2>Search for a Car by Model</h2>
<form action="search_result.php" method="get">
    <label for="model">Car Model:</label>
    <input type="text" name="model" id="model" 
           value="<?php echo isset($_GET['model']) ? htmlspecialchars($_GET['model']) : ''; ?>">
    <input type="submit" value="Search">
</form>

<?php
if (!empty($_GET['model'])) {
    $model = mysqli_real_escape_string($conn, $_GET['model']);
    $sql = "SELECT * FROM cars WHERE model LIKE '%$model%'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "<h3>Results for: " . htmlspecialchars($model) . "</h3>";
        echo "<table border='1' cellpadding='5'>";
        echo "<tr><th>ID</th><th>Make</th><th>Model</th><th>Price</th><th>Year</th></tr>";
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
        echo "🚫 No matching cars found.";
    }
} elseif (isset($_GET['model'])) {
    echo "Please enter a model to search.";
}
mysqli_close($conn);
?>

</body>
</html>
