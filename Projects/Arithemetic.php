<?php
/**
 * This PHP script demonstrates the use of arithmetic operators and string concatenation.
 *
 * The script defines a function opr() that performs various operations using numeric values
 * and demonstrates string concatenation.
 */
function opr()
{
    // Initialize numeric values.
    $num1 = 5;
    $num2 = 10;

    // Perform arithmetic operations.
    $numadd = $num1 + $num2;
    $numsub = $num1 - $num2;
    $numdiv = $num1 / $num2;
    $nummulti = $num1 * $num2;
    $nummod = $num1 % $num2;
    $numincr = ++$num1;
    $numdecr = --$num2;

    // Perform string concatenation.
    $addstr = "PHP is a powerful scripting language" . " used for web development.";

    // Display the results of arithmetic operations and string concatenation.
    echo("<p>Value of num1 = $num1</p>");
    echo("<p>Value of num2 = $num2</p>");
    echo("<p>Value of numadd = $numadd</p>");
    echo("<p>Value of numsub = $numsub</p>");
    echo("<p>Value of numdiv = $numdiv</p>");
    echo("<p>Value of nummulti = $nummulti</p>");
    echo("<p>Value of nummod = $nummod</p>");
    echo("<p>Value of numincr = $numincr</p>");
    echo("<p>Value of numdecr = $numdecr</p>");
    echo("<p>String Concatenation = $addstr</p>");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arithmetic Operators</title>
    <style>
        /* Your styles here */
    </style>
</head>
<body>
    <header>
        <h1>Arithmetic Operators and String Concatenation</h1>
    </header>
    <main>
        <?php opr(); ?>
    </main>
</body>
</html>
