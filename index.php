<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial Using PHP</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <section>
        <h1>Learn PHP</h1>
        <P>PHP is a server scripting language, and a powerful tool for making dynamic and interactive Web pages.
            PHP is a widely-used, free, and efficient alternative to competitors such as Microsoft's ASP.PHP code is executed on the server.</P>
        <br><b>What is PHP?</b><br>
        <ul>
            <li>PHP is an acronym for "PHP: Hypertext Preprocessor"</li>
            <li>PHP is a widely-used, open source scripting language</li>
            <li>PHP scripts are executed on the server</li>
            <li>PHP is free to download and use</li>
        </ul>
    </section>
    <section id="1">
        <h3>PHP Syntax</h3>
        <p>A PHP script can be placed anywhere in the document.
            <br>
            A PHP script starts with &lt;?php ends with ?&gt;
            <br>
            <code>
                &lt;?php <br>
                //PHP code goes here <br>
                ?&gt;
            </code>
        </p>

    </section>
    <section id="2">
        <h3></h3>
        <p></p>
    </section>
    <section id="3">
        <h3>PHP Comments</h3>
        <p>
            A comment in PHP code is a line that is not executed as a part of the program. Its only purpose is to be read by someone who is looking at the code. <br>
            <b>Comments can be used to ignore the code</b><br>
            // This is a single-line comment <br>

            # This is also a single-line comment<br>

            /* This is a
            multi-line comment */
        </p>
    </section>
    <section id="4">
        <h3>PHP echo</h3>
        <p>The echo statement can be used with or without parentheses: echo or echo().</p><br>
        <?php
        echo "<h2>Hiiii</h2>";
        echo "iam was wriiten in php using 'echo'<br>";
        echo "i going to tell you all about PH so, Welcome aboard<br>";
        echo "i ", "can ", "take ", "multiple ", "parameters<br>";
        echo "just take a look at me";
        ?>

    </section>
    <section id="5">
        <h3>PHP Variables</h3>
        <p>Variables are "containers" for storing information.
            <br><b>Declaring PHP Variables</b><br>
            <code> &lt;?php<br> $myage = 25;<br>
                $myname = "Joseph";<br>
                &gt;</code><br>
            A PHP variables must start with $variable name.<br>
            Variable names are case sensitive.<br>
            <b>Output Variables</b><br>
            <?php
            $txt = "this ia variable ";
            echo "$txt";
            ?>
            <br>
            PHP automatically associates a data type to the variable, depending on its value. Since the data types are not set in a strict sense, you can do things like adding a string to an integer without causing an error.
        </p>
    </section>
    <section id="6">
        <h3>PHP Variables Scope</h3>
        <p>PHP has three different variable scopes:
        <ul>
            <li><b>local</b> -A variable declared within a function has a LOCAL SCOPE and can only be accessed within that function</li>
            <li><b>global</b> -A variable declared outside a function has a GLOBAL SCOPE and can only be accessed outside a function</li>
            <li><b>static</b>-when a function is completed/executed, all of its variables are deleted. However, sometimes we want a local variable NOT to be deleted. We need it for a further job.

                To do this, use the static keyword when you first declare the variable</li>
        </ul>
        </p>
    </section>
    <section id="7">
        <h3>PHP Data Types</h3>
        <p>
            PHP supports the following data types
        <table>
            <tr>
                <th>Data Type</th>
                <th>Declaration</th>
            </tr>
            <tr>
                <td>String</td>
                <td>Used to represent text. Declared using single or double quotes, like: <code>$name = 'John';</code></td>
            </tr>
            <tr>
                <td>Integer</td>
                <td>Used to represent whole numbers. Declared like: <code>$count = 10;</code></td>
            </tr>
            <tr>
                <td>Float (Double)</td>
                <td>Used to represent floating-point numbers. Declared like: <code>$price = 19.99;</code></td>
            </tr>
            <tr>
                <td>Boolean</td>
                <td>Used to represent true or false values. Declared like: <code>$isTrue = true;</code></td>
            </tr>
            <tr>
                <td>Array</td>
                <td>Used to store multiple values in a single variable. Declared like: <code>$colors = array('red', 'green', 'blue');</code></td>
            </tr>
            <tr>
                <td>Object</td>
                <td>Used to create instances of user-defined classes. Declared like: <code>$car = new Car();</code></td>
            </tr>
            <tr>
                <td>NULL</td>
                <td>Represents a variable with no value. Declared like: <code>$noValue = null;</code></td>
            </tr>
            <tr>
                <td>Resource</td>
                <td>Special variable holding a reference to an external resource. Declared through functions returning resources.</td>
            </tr>
        </table>
        </p>
    </section>

    <section id="8">
        <h3>PHP String Operations</h3>
        <table>
            <tr>
                <th>Operation</th>
                <th>Example</th>
                <th>Result</th>
            </tr>
            <tr>
                <td>Concatenation</td>
                <td><code>$str1 = "Hello"; $str2 = " World"; $result = $str1 . $str2;</code></td>
                <td><?php $str1 = "Hello";
                    $str2 = " World";
                    $result = $str1 . $str2;
                    echo $result; ?></td>
            </tr>
            <tr>
                <td>String Length</td>
                <td><code>$str = "Hello"; $length = strlen($str);</code></td>
                <td><?php $str = "Hello";
                    $length = strlen($str);
                    echo $length; ?></td>
            </tr>
            <tr>
                <td>Substring</td>
                <td><code>$str = "Hello World"; $sub = substr($str, 0, 5);</code></td>
                <td><?php $str = "Hello World";
                    $sub = substr($str, 0, 5);
                    echo $sub; ?></td>
            </tr>
            <tr>
                <td>Uppercase</td>
                <td><code>$str = "hello"; $uppercase = strtoupper($str);</code></td>
                <td><?php $str = "hello";
                    $uppercase = strtoupper($str);
                    echo $uppercase; ?></td>
            </tr>
            <tr>
                <td>Lowercase</td>
                <td><code>$str = "HELLO"; $lowercase = strtolower($str);</code></td>
                <td><?php $str = "HELLO";
                    $lowercase = strtolower($str);
                    echo $lowercase; ?></td>
            </tr>
            <tr>
                <td>Find Position</td>
                <td><code>$str = "Hello World"; $position = strpos($str, "World");</code></td>
                <td><?php $str = "Hello World";
                    $position = strpos($str, "World");
                    echo $position; ?></td>
            </tr>
            <tr>
                <td>Replace</td>
                <td><code>$str = "Hello, John!"; $newStr = str_replace("John", "Jane", $str);</code></td>
                <td><?php $str = "Hello, John!";
                    $newStr = str_replace("John", "Jane", $str);
                    echo $newStr; ?></td>
            </tr>
            <tr>
                <td>Count</td>
                <td><code>$str = "Hello World"; $count = substr_count($str, "o");</code></td>
                <td><?php $str = "Hello World";
                    $count = substr_count($str, "o");
                    echo $count; ?></td>
            </tr>
            <tr>
                <td>Search</td>
                <td><code>$str = "Hello World"; $search = strstr($str, "World");</code></td>
                <td><?php $str = "Hello World";
                    $search = strstr($str, "World");
                    echo $search; ?></td>
            </tr>
            <tr>
                <td>Reverse</td>
                <td><code>$str = "Hello"; $reverse = strrev($str);</code></td>
                <td><?php $str = "Hello";
                    $reverse = strrev($str);
                    echo $reverse; ?></td>
            </tr>
            <tr>
                <td>Trim</td>
                <td><code>$str = " Hello "; $trimmed = trim($str);</code></td>
                <td><?php $str = "   Hello   ";
                    $trimmed = trim($str);
                    echo $trimmed; ?></td>
            </tr>
            <tr>
                <td>String to Array</td>
                <td><code>$str = "Hello"; $charArray = str_split($str);</code></td>
                <td><?php $str = "Hello";
                    $charArray = str_split($str);
                    print_r($charArray); ?></td>
            </tr>
        </table>
    </section>
    <section id="9">
        <h3>PHP Escape Characters</h3>
        <table>
            <tr>
                <th>Escape Sequence</th>
                <th>Description</th>
            </tr>
            <tr>
                <td>\'</td>
                <td>Single Quote</td>
            </tr>
            <tr>
                <td>\"</td>
                <td>Double Quote</td>
            </tr>
            <tr>
                <td>\$</td>
                <td>PHP Variables</td>
            </tr>
            <tr>
                <td>\n</td>
                <td>New Line</td>
            </tr>
            <tr>
                <td>\r</td>
                <td>Carriage Return</td>
            </tr>
            <tr>
                <td>\t</td>
                <td>Tab</td>
            </tr>
            <tr>
                <td>\f</td>
                <td>Form Feed</td>
            </tr>
            <tr>
                <td>\ooo</td>
                <td>Octal Value</td>
            </tr>
            <tr>
                <td>\xhh</td>
                <td>Hex Value</td>
            </tr>
        </table>
    </section>
    <section id="10">
        <h3>PHP Numbers</h3>
        <p>There are three main numeric types in PHP.<br>
            <b>Integer,
                Float,
                Number Strings</b>
        </p>

    </section>
    <section id="11">
        <h3>PHP Math</h3>
        <table>
        <tr>
            <th>Function</th>
            <th>Description</th>
            <th>Example</th>
            <th>Result</th>
        </tr>
        <tr>
            <td>abs()</td>
            <td>Returns the absolute value of a number.</td>
            <td><code>$result = abs(-5);</code></td>
            <td><?php $result = abs(-5); echo $result; ?></td>
        </tr>
        <tr>
            <td>sqrt()</td>
            <td>Returns the square root of a number.</td>
            <td><code>$result = sqrt(25);</code></td>
            <td><?php $result = sqrt(25); echo $result; ?></td>
        </tr>
        <tr>
            <td>pow()</td>
            <td>Returns the value of a base raised to the power of an exponent.</td>
            <td><code>$result = pow(2, 3);</code></td>
            <td><?php $result = pow(2, 3); echo $result; ?></td>
        </tr>
        <tr>
            <td>round()</td>
            <td>Rounds a floating-point number to the nearest integer.</td>
            <td><code>$result = round(4.6);</code></td>
            <td><?php $result = round(4.6); echo $result; ?></td>
        </tr>
        <tr>
            <td>ceil()</td>
            <td>Rounds a number up to the nearest integer.</td>
            <td><code>$result = ceil(4.2);</code></td>
            <td><?php $result = ceil(4.2); echo $result; ?></td>
        </tr>
        <tr>
            <td>floor()</td>
            <td>Rounds a number down to the nearest integer.</td>
            <td><code>$result = floor(4.8);</code></td>
            <td><?php $result = floor(4.8); echo $result; ?></td>
        </tr>
        <tr>
            <td>rand()</td>
            <td>Generates a random integer.</td>
            <td><code>$result = rand(1, 100);</code></td>
            <td><?php $result = rand(1, 100); echo $result; ?></td>
        </tr>
        <tr>
            <td>min()</td>
            <td>Returns the lowest value in an array or a list of arguments.</td>
            <td><code>$result = min(3, 8, 1, 6);</code></td>
            <td><?php $result = min(3, 8, 1, 6); echo $result; ?></td>
        </tr>
        <tr>
            <td>max()</td>
            <td>Returns the highest value in an array or a list of arguments.</td>
            <td><code>$result = max(3, 8, 1, 6);</code></td>
            <td><?php $result = max(3, 8, 1, 6); echo $result; ?></td>
        </tr>
    </table>
    </section>
    <section id="12">
        <h3>PHP Constants</h3>
        <p>In PHP, constants are like variables, but once they are defined, they cannot be changed or undefined during the script execution. Constants are useful for defining values that remain the same throughout the execution of a script.</p>
    </section>
    <section id="13">
        <h3>PHP Arithemetic Operations</h3>
        <table>
        <tr>
            <th>Operator</th>
            <th>Description</th>
            <th>PHP Code</th>
            <th>Result</th>
        </tr>
        <tr>
            <td>+</td>
            <td>Addition</td>
            <td><code>&lt;?php $x = 5; $y = 3; echo $x + $y; ?&gt;</code></td>
            <td><?php $x = 5; $y = 3; echo $x + $y; ?></td>
        </tr>
        <tr>
            <td>-</td>
            <td>Subtraction</td>
            <td><code>&lt;?php $x = 5; $y = 3; echo $x - $y; ?&gt;</code></td>
            <td><?php $x = 5; $y = 3; echo $x - $y; ?></td>
        </tr>
        <tr>
            <td>*</td>
            <td>Multiplication</td>
            <td><code>&lt;?php $x = 5; $y = 3; echo $x * $y; ?&gt;</code></td>
            <td><?php $x = 5; $y = 3; echo $x * $y; ?></td>
        </tr>
        <tr>
            <td>/</td>
            <td>Division</td>
            <td><code>&lt;?php $x = 6; $y = 2; echo $x / $y; ?&gt;</code></td>
            <td><?php $x = 6; $y = 2; echo $x / $y; ?></td>
        </tr>
        <tr>
            <td>%</td>
            <td>Modulus</td>
            <td><code>&lt;?php $x = 8; $y = 3; echo $x % $y; ?&gt;</code></td>
            <td><?php $x = 8; $y = 3; echo $x % $y; ?></td>
        </tr>
        <tr>
            <td>**</td>
            <td>Exponentiation</td>
            <td><code>&lt;?php $x = 2; $y = 3; echo $x ** $y; ?&gt;</code></td>
            <td><?php $x = 2; $y = 3; echo $x ** $y; ?></td>
        </tr>
    </table>
    </section>
    <section id="14">
        <h3>PHP Assignment Operators</h3>
        <table>
        <tr>
            <th>Operator</th>
            <th>Description</th>
            <th>PHP Code</th>
            <th>Result</th>
        </tr>
        <tr>
            <td>=</td>
            <td>Assignment</td>
            <td><code>&lt;?php $x = $y; ?&gt;</code></td>
            <td><?php $x = 10;$y=$x ; echo $x; ?></td>
        </tr>
        <tr>
            <td>+=</td>
            <td>Addition Assignment</td>
            <td><code>&lt;?php $x += $y; ?&gt;</code></td>
            <td><?php $x = 5; $y = 3; $x += $y; echo $x; ?></td>
        </tr>
        <tr>
            <td>-=</td>
            <td>Subtraction Assignment</td>
            <td><code>&lt;?php $x -= $y; ?&gt;</code></td>
            <td><?php $x = 5; $y = 3; $x -= $y; echo $x; ?></td>
        </tr>
        <tr>
            <td>*=</td>
            <td>Multiplication Assignment</td>
            <td><code>&lt;?php $x *= $y; ?&gt;</code></td>
            <td><?php $x = 5; $y = 3; $x *= $y; echo $x; ?></td>
        </tr>
        <tr>
            <td>/=</td>
            <td>Division Assignment</td>
            <td><code>&lt;?php $x /= $y; ?&gt;</code></td>
            <td><?php $x = 6; $y = 2; $x /= $y; echo $x; ?></td>
        </tr>
        <tr>
            <td>%=</td>
            <td>Modulus Assignment</td>
            <td><code>&lt;?php $x %= $y; ?&gt;</code></td>
            <td><?php $x = 8; $y = 3; $x %= $y; echo $x; ?></td>
        </tr>
    </table>
    </section>
    <section id="14">
        <h3>PHP Comparison Operators</h3>
        <table>
        <tr>
            <th>Operator</th>
            <th>Description</th>
            <th>Example</th>
            <th>Result</th>
        </tr>
        <tr>
            <td>==</td>
            <td>Equal</td>
            <td><code>&lt;?php $x = 5; $y = 5; echo $x == $y; ?&gt;</code></td>
            <td><?php $x = 5; $y = 5; echo $x == $y ? 'true' : 'false'; ?></td>
        </tr>
        <tr>
            <td>===</td>
            <td>Identical</td>
            <td><code>&lt;?php $x = 5; $y = '5'; echo $x === $y; ?&gt;</code></td>
            <td><?php $x = 5; $y = '5'; echo $x === $y ? 'true' : 'false'; ?></td>
        </tr>
        <tr>
            <td>!=</td>
            <td>Not equal</td>
            <td><code>&lt;?php $x = 5; $y = 10; echo $x != $y; ?&gt;</code></td>
            <td><?php $x = 5; $y = 10; echo $x != $y ? 'true' : 'false'; ?></td>
        </tr>
        <tr>
            <td>&lt;&gt;</td>
            <td>Not equal</td>
            <td><code>&lt;?php $x = 5; $y = 10; echo $x <> $y; ?&gt;</code></td>
            <td><?php $x = 5; $y = 10; echo $x <> $y ? 'true' : 'false'; ?></td>
        </tr>
        <tr>
            <td>!==</td>
            <td>Not identical</td>
            <td><code>&lt;?php $x = 5; $y = '5'; echo $x !== $y; ?&gt;</code></td>
            <td><?php $x = 5; $y = '5'; echo $x !== $y ? 'true' : 'false'; ?></td>
        </tr>
        <tr>
            <td>&gt;</td>
            <td>Greater than</td>
            <td><code>&lt;?php $x = 10; $y = 5; echo $x > $y; ?&gt;</code></td>
            <td><?php $x = 10; $y = 5; echo $x > $y ? 'true' : 'false'; ?></td>
        </tr>
        <tr>
            <td>&lt;</td>
            <td>Less than</td>
            <td><code>&lt;?php $x = 5; $y = 10; echo $x < $y; ?&gt;</code></td>
            <td><?php $x = 5; $y = 10; echo $x < $y ? 'true' : 'false'; ?></td>
        </tr>
        <tr>
            <td>&gt;=</td>
            <td>Greater than or equal to</td>
            <td><code>&lt;?php $x = 10; $y = 5; echo $x >= $y; ?&gt;</code></td>
            <td><?php $x = 10; $y = 5; echo $x >= $y ? 'true' : 'false'; ?></td>
        </tr>
        <tr>
            <td>&lt;=</td>
            <td>Less than or equal to</td>
            <td><code>&lt;?php $x = 5; $y = 10; echo $x <= $y; ?&gt;</code></td>
            <td><?php $x = 5; $y = 10; echo $x <= $y ? 'true' : 'false'; ?></td>
        </tr>
        <tr>
            <td>&lt;=&gt;</td>
            <td>Spaceship</td>
            <td><code>&lt;?php $x = 5; $y = 5; echo $x <=> $y; ?&gt;</code></td>
            <td><?php $x = 5; $y = 5; echo $x <=> $y; ?></td>
        </tr>
    </table>
    </section>
    <section id="15">
        <h3>PHP Increment and Decrement</h3>
        <table>
        <tr>
            <th>Operator</th>
            <th>Description</th>
            <th>Example</th>
            <th>Result</th>
        </tr>
        <tr>
            <td>++$x</td>
            <td>Pre-increment</td>
            <td><code>&lt;?php $x = 5; echo ++$x; ?&gt;</code></td>
            <td><?php $x = 5; echo ++$x; ?></td>
        </tr>
        <tr>
            <td>$x++</td>
            <td>Post-increment</td>
            <td><code>&lt;?php $x = 5; echo $x++; ?&gt;</code></td>
            <td><?php $x = 5; echo $x++; ?></td>
        </tr>
        <tr>
            <td>--$x</td>
            <td>Pre-decrement</td>
            <td><code>&lt;?php $x = 5; echo --$x; ?&gt;</code></td>
            <td><?php $x = 5; echo --$x; ?></td>
        </tr>
        <tr>
            <td>$x--</td>
            <td>Post-decrement</td>
            <td><code>&lt;?php $x = 5; echo $x--; ?&gt;</code></td>
            <td><?php $x = 5; echo $x--; ?></td>
        </tr>
    </table>
    </section>
    <section id="16">
    <h3>PHP Logical Opertators</h3>
    <table>
        <tr>
            <th>Operator</th>
            <th>Description</th>
            <th>Example</th>
            <th>Result</th>
        </tr>
        <tr>
            <td>and</td>
            <td>And</td>
            <td><code>&lt;?php $x = true; $y = false; echo ($x and $y) ? 'true' : 'false'; ?&gt;</code></td>
            <td><?php $x = true; $y = false; echo ($x and $y) ? 'true' : 'false'; ?></td>
        </tr>
        <tr>
            <td>or</td>
            <td>Or</td>
            <td><code>&lt;?php $x = true; $y = false; echo ($x or $y) ? 'true' : 'false'; ?&gt;</code></td>
            <td><?php $x = true; $y = false; echo ($x or $y) ? 'true' : 'false'; ?></td>
        </tr>
        <tr>
            <td>xor</td>
            <td>Xor</td>
            <td><code>&lt;?php $x = true; $y = false; echo ($x xor $y) ? 'true' : 'false'; ?&gt;</code></td>
            <td><?php $x = true; $y = false; echo ($x xor $y) ? 'true' : 'false'; ?></td>
        </tr>
        <tr>
            <td>&&</td>
            <td>And</td>
            <td><code>&lt;?php $x = true; $y = false; echo ($x && $y) ? 'true' : 'false'; ?&gt;</code></td>
            <td><?php $x = true; $y = false; echo ($x && $y) ? 'true' : 'false'; ?></td>
        </tr>
        <tr>
            <td>||</td>
            <td>Or</td>
            <td><code>&lt;?php $x = true; $y = false; echo ($x || $y) ? 'true' : 'false'; ?&gt;</code></td>
            <td><?php $x = true; $y = false; echo ($x || $y) ? 'true' : 'false'; ?></td>
        </tr>
        <tr>
            <td>!</td>
            <td>Not</td>
            <td><code>&lt;?php $x = true; echo !$x ? 'true' : 'false'; ?&gt;</code></td>
            <td><?php $x = true; echo !$x ? 'true' : 'false'; ?></td>
        </tr>
    </table>
</section>
<section id="17">
    <h3>PHP Array Operators</h3>
    <table>
        <tr>
            <th>Operator</th>
            <th>Description</th>
            <th>Example</th>
            <th>Result</th>
        </tr>
        <tr>
            <td>+</td>
            <td>Union</td>
            <td><code>&lt;?php $x = array("a", "b", "c"); $y = array(1, 2, 3); print_r($x + $y); ?&gt;</code></td>
            <td><?php $x = array("a", "b", "c"); $y = array(1, 2, 3); print_r($x + $y); ?></td>
        </tr>
        <tr>
            <td>==</td>
            <td>Equality</td>
            <td><code>&lt;?php $x = array("a" => 1, "b" => 2); $y = array("b" => 2, "a" => 1); var_dump($x == $y); ?&gt;</code></td>
            <td><?php $x = array("a" => 1, "b" => 2); $y = array("b" => 2, "a" => 1); var_dump($x == $y); ?></td>
        </tr>
        <tr>
            <td>===</td>
            <td>Identity</td>
            <td><code>&lt;?php $x = array("a" => 1, "b" => 2); $y = array("b" => 2, "a" => 1); var_dump($x === $y); ?&gt;</code></td>
            <td><?php $x = array("a" => 1, "b" => 2); $y = array("b" => 2, "a" => 1); var_dump($x === $y); ?></td>
        </tr>
        <tr>
            <td>!=</td>
            <td>Inequality</td>
            <td><code>&lt;?php $x = array("a" => 1, "b" => 2); $y = array("c" => 3, "d" => 4); var_dump($x != $y); ?&gt;</code></td>
            <td><?php $x = array("a" => 1, "b" => 2); $y = array("c" => 3, "d" => 4); var_dump($x != $y); ?></td>
        </tr>
        <tr>
            <td>&lt;&gt;</td>
            <td>Inequality</td>
            <td><code>&lt;?php $x = array("a" => 1, "b" => 2); $y = array("c" => 3, "d" => 4); var_dump($x <> $y); ?&gt;</code></td>
            <td><?php $x = array("a" => 1, "b" => 2); $y = array("c" => 3, "d" => 4); var_dump($x <> $y); ?></td>
        </tr>
        <tr>
            <td>!==</td>
            <td>Non-identity</td>
            <td><code>&lt;?php $x = array("a" => 1, "b" => 2); $y = array("c" => 3, "d" => 4); var_dump($x !== $y); ?&gt;</code></td>
            <td><?php $x = array("a" => 1, "b" => 2); $y = array("c" => 3, "d" => 4); var_dump($x !== $y); ?></td>
        </tr>
    </table>
</section>
<section id="18">
    <h3>PHP Ternary and Null Coalescing Operators</h3>
    <table>
        <tr>
            <th>Operator</th>
            <th>Description</th>
            <th>Example</th>
            <th>Result</th>
        </tr>
        <tr>
            <td>?:</td>
            <td>Ternary</td>
            <td><code>&lt;?php $expr1 = true; $x = $expr1 ? "expr2 result" : "expr3 result"; echo $x; ?&gt;</code></td>
            <td><?php $expr1 = true; $x = $expr1 ? "expr2 result" : "expr3 result"; echo $x; ?></td>
        </tr>
        <tr>
            <td>??</td>
            <td>Null Coalescing</td>
            <td><code>&lt;?php $expr1 = "exists"; $x = $expr1 ?? "default value"; echo $x; ?&gt;</code></td>
            <td><?php $expr1 = "exists"; $x = $expr1 ?? "default value"; echo $x; ?></td>
        </tr>
    </table>
</section>
<section id="19">
    <h3>PHP Conditional Statements</h3>
    <table>
        <tr>
            <th>Statement</th>
            <th>Description</th>
            <th>Example</th>
            <th>Result</th>
        </tr>
        <tr>
            <td>if</td>
            <td>Executes code if a specified condition is true</td>
            <td><code>&lt;?php $x = 5; if ($x > 0) { echo "Positive number"; } ?&gt;</code></td>
            <td><?php $x = 5; if ($x > 0) { echo "Positive number"; } ?></td>
        </tr>
        <tr>
            <td>else</td>
            <td>Executes code if the specified condition of the if statement is false</td>
            <td><code>&lt;?php $x = -5; if ($x > 0) { echo "Positive number"; } else { echo "Negative number or zero"; } ?&gt;</code></td>
            <td><?php $x = -5; if ($x > 0) { echo "Positive number"; } else { echo "Negative number or zero"; } ?></td>
        </tr>
        <tr>
            <td>elseif</td>
            <td>Executes code if the previous condition is false and the specified condition is true</td>
            <td><code>&lt;?php $x = 0; if ($x > 0) { echo "Positive number"; } elseif ($x < 0) { echo "Negative number"; } else { echo "Zero"; } ?&gt;</code></td>
            <td><?php $x = 0; if ($x > 0) { echo "Positive number"; } elseif ($x < 0) { echo "Negative number"; } else { echo "Zero"; } ?></td>
        </tr>
        <tr>
            <td>switch</td>
            <td>Selects one of many blocks of code to be executed</td>
            <td><code>&lt;?php $day = "Monday"; switch ($day) { case "Monday": echo "It's Monday!"; break; case "Tuesday": echo "It's Tuesday!"; break; default: echo "It's not Monday or Tuesday!"; } ?&gt;</code></td>
            <td><?php $day = "Monday"; switch ($day) { case "Monday": echo "It's Monday!"; break; case "Tuesday": echo "It's Tuesday!"; break; default: echo "It's not Monday or Tuesday!"; } ?></td>
        </tr>
        <tr>
            <td>?:</td>
            <td>Ternary Operator - Short if-else statement</td>
            <td><code>&lt;?php $x = 5; echo ($x > 0) ? "Positive number" : "Non-positive number"; ?&gt;</code></td>
            <td><?php $x = 5; echo ($x > 0) ? "Positive number" : "Non-positive number"; ?></td>
        </tr>
    </table>
</section>
<section id="20">
    <h3>PHP Nested If</h3>
    <p>if statements inside if statements, this is called nested if statements.</p>

</section>
<section id="21">
    <h3>PHP Loops</h3>
    <table>
        <tr>
            <th>Loop</th>
            <th>Description</th>
            <th>Example</th>
            <th>Result</th>
        </tr>
        <tr>
            <td>while</td>
            <td>Executes code as long as a specified condition is true</td>
            <td><code>&lt;?php $i = 1; while ($i <= 5) { echo $i . " "; $i++; } ?&gt;</code></td>
            <td><?php $i = 1; while ($i <= 5) { echo $i . " "; $i++; } ?></td>
        </tr>
        <tr>
            <td>do-while</td>
            <td>Executes code at least once and then as long as a specified condition is true</td>
            <td><code>&lt;?php $i = 1; do { echo $i . " "; $i++; } while ($i <= 5); ?&gt;</code></td>
            <td><?php $i = 1; do { echo $i . " "; $i++; } while ($i <= 5); ?></td>
        </tr>
        <tr>
            <td>for</td>
            <td>Executes code a specified number of times</td>
            <td><code>&lt;?php for ($i = 1; $i <= 5; $i++) { echo $i . " "; } ?&gt;</code></td>
            <td><?php for ($i = 1; $i <= 5; $i++) { echo $i . " "; } ?></td>
        </tr>
        <tr>
            <td>foreach</td>
            <td>Iterates over arrays</td>
            <td><code>&lt;?php $colors = array("red", "green", "blue"); foreach ($colors as $color) { echo $color . " "; } ?&gt;</code></td>
            <td><?php $colors = array("red", "green", "blue"); foreach ($colors as $color) { echo $color . " "; } ?></td>
        </tr>
    </table>
</section>
<section id="22">
    <h3>PHP Break and Continue </h3>
    <table>
        <tr>
            <th>Statement</th>
            <th>Description</th>
            <th>Example</th>
            <th>Result</th>
        </tr>
        <tr>
            <td>break</td>
            <td>Terminates the execution of the nearest loop or switch</td>
            <td><code>&lt;?php for ($i = 1; $i <= 5; $i++) { if ($i == 3) { break; } echo $i . " "; } ?&gt;</code></td>
            <td><?php for ($i = 1; $i <= 5; $i++) { if ($i == 3) { break; } echo $i . " "; } ?></td>
        </tr>
        <tr>
            <td>continue</td>
            <td>Skips the rest of the current loop iteration and continues with the next one</td>
            <td><code>&lt;?php for ($i = 1; $i <= 5; $i++) { if ($i == 3) { continue; } echo $i . " "; } ?&gt;</code></td>
            <td><?php for ($i = 1; $i <= 5; $i++) { if ($i == 3) { continue; } echo $i . " "; } ?></td>
        </tr>
    </table>
</section>
<section id="">
    <h3></h3>
    <p></p>
</section>
<section id="">
    <h3></h3>
    <p></p>
</section>
<section id="">
    <h3></h3>
    <p></p>
</section>
    <!-- <section id="">
    <h3></h3>
    <p></p>
</section> -->



</body>

</html>