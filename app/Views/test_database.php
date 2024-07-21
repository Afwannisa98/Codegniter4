<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Connection Test</title>
</head>
<body>
    <h1>Database Connection Test</h1>
    <p><?= $status ?></p>

    <?php if (!empty($result)): ?>
        <h2>Sample Data from 'students' Table:</h2>
        <ul>
            <?php foreach ($result as $row): ?>
                <li>ID: <?= $row->id ?>, Name: <?= $row->name ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
</body>
</html>
