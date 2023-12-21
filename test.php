<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Regular Expression Functions</title>
    <style>
        table {
            width: 80%;
            border-collapse: collapse;
            margin: 20px auto;
        }

        th, td {
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
    <h2>PHP Regular Expression Functions</h2>

    <table>
        <tr>
            <th>Function</th>
            <th>Description</th>
        </tr>
        <tr>
            <td>preg_match()</td>
            <td>Returns 1 if the pattern was found in the string and 0 if not</td>
        </tr>
        <tr>
            <td>preg_match_all()</td>
            <td>Returns the number of times the pattern was found in the string, which may also be 0</td>
        </tr>
        <tr>
            <td>preg_replace()</td>
            <td>Returns a new string where matched patterns have been replaced with another string</td>
        </tr>
    </table>

</body>
</html>
