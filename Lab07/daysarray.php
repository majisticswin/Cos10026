<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Jours de la semaine</title>
</head>
<body>
<?php
// (original): English days
// $days = ['Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday'];

// (updated): French days
$days = ['Dimanche','Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi'];

echo '<h1>Jours de la semaine</h1>';
echo '<ul>';
foreach ($days as $day) {
        echo '<li>' . htmlspecialchars($day, ENT_QUOTES, 'UTF-8') . '</li>';
}
echo '</ul>';
?>
</body>
</html>