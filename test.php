<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Break and Continue</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
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
    <h2>PHP Break and Continue</h2>

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
</body>
</html>
