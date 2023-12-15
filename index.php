<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML with External PHP</title>
</head>
<body>
    <header>
        <h1>Welcome to my Website</h1>
    </header>

    <main>
        <?php
        // Include the external PHP file
        include 'external_file.php';
        ?>

        <p>This is the main content of the HTML page.</p>
    </main>

    <footer>
        <p>&copy; 2023 My Website</p>
    </footer>
</body>
</html>
