<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>getdate Function Example</title>
</head>
<body>
    <h2>getdate Function Example</h2>
    <?php
    // Get the current date and time information as an associative array
    $dateInfo = getdate();

    // Display the elements of the date information
    echo "<p>Year: {$dateInfo['year']}</p>";
    echo "<p>Month: {$dateInfo['mon']}</p>";
    echo "<p>Day: {$dateInfo['mday']}</p>";
    echo "<p>Hour: {$dateInfo['hours']}</p>";
    echo "<p>Minute: {$dateInfo['minutes']}</p>";
    echo "<p>Second: {$dateInfo['seconds']}</p>";
    echo "<p>Weekday: {$dateInfo['weekday']}</p>";
    echo "<p>Month name: {$dateInfo['month']}</p>";
    ?>
</body>
</html>
