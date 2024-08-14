<!DOCTYPE html>
<html>
<head>
    <title>PHP Web App with AWS Services</title>
</head>
<body>
    <h1>Welcome to the PHP Web Application</h1>
    <h2>MySQL Users</h2>
    <ul>
        <?php foreach ($users as $user): ?>
            <li><?php echo $user['name']; ?></li>
        <?php endforeach; ?>
    </ul>

    <h2>OpenSearch Results</h2>
    <pre><?php print_r($searchResults); ?></pre>

    <h2>Redis Message</h2>
    <p><?php echo $redisMessage; ?></p>
</body>
</html>
