<?php
// Extract and sanitize values
$firstname  = isset($_POST['firstname']) ? htmlspecialchars($_POST['firstname']) : '';
$lastname   = isset($_POST['lastname']) ? htmlspecialchars($_POST['lastname']) : '';
$age        = isset($_POST['age']) ? htmlspecialchars($_POST['age']) : '';
$species    = isset($_POST['species']) ? htmlspecialchars($_POST['species']) : '';
$food       = isset($_POST['food']) ? htmlspecialchars($_POST['food']) : '';
$date       = isset($_POST['bookday']) ? htmlspecialchars($_POST['bookday']) : '';
$partysize  = isset($_POST['partysize']) ? htmlspecialchars($_POST['partysize']) : '';

// Handle checkboxes
$bookings = [];
if (isset($_POST['accom'])) $bookings[] = "Accommodation";
if (isset($_POST['4day']))  $bookings[] = "4 Day Tour";
if (isset($_POST['10day'])) $bookings[] = "10 Day Tour";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Booking Confirmation</title>
    <link rel="stylesheet" type="text/css" href="/Lab07/style/style.css">
    <link rel="stylesheet" type="text/css" href="/Lab07/style/register.css">
</head>
<body>
    <header><h1>Rohirrim Dude Ranch</h1></header>
    <nav>
        <ul>
            <li><a href="construction.html">Home</a></li>
            <li><a href="construction.html">Accommodation</a></li>
            <li><a href="construction.html">Horse Riding</a></li>
            <li><a href="construction.html">Sight Seeing</a></li>
            <li><a href="register.html">Book</a></li>
        </ul>
    </nav>

    <article>
        <h2>Rohirrim Tour Booking Confirmation</h2>
        <p>Thank you for your booking, <strong><?php echo $firstname . " " . $lastname; ?></strong>.</p>
        <ul>
            <li>Age: <?php echo $age; ?></li>
            <li>Species: <?php echo $species; ?></li>
            <li>Booking Options: <?php echo !empty($bookings) ? implode(", ", $bookings) : "None"; ?></li>
            <li>Menu Preference: <?php echo $food; ?></li>
            <li>Date: <?php echo $date; ?></li>
            <li>Number of Travellers: <?php echo $partysize; ?></li>
        </ul>
    </article>

    <footer>
        <p class="fineprint">Conditions Apply – Rohirrim Dude Ranch management takes no responsibility for any injury, beheadings, spells, spider-bites, or anything whatsoever.</p>
    </footer>
</body>
</html>
