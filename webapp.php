<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to my App</title>
</head>
<body>
    <h1>Welcome to my App</h1>
    <p>This is a simple web application.</p>
    <p>Current date and time: <?php echo date('Y-m-d H:i:s'); ?></p>
    <form method="POST" action="process.php">
        <input type="text" name="input" placeholder="Enter something" required>
        <button type="submit">Submit</button>
    </form>
    <h2>Previous Submissions</h2>
    <ul>
        <?php
        // Assuming you have a function to fetch previous submissions from a database or file
        $submissions = ['Submission 1', 'Submission 2', 'Submission 3']; // Example data
        foreach ($submissions as $submission) {
            echo "<li>" . htmlspecialchars($submission) . "</li>";
        }
        ?>
    </ul>
    <footer>
        <p>&copy; 2023 My App. All rights reserved.</p>
    </footer>
</body>
</html>