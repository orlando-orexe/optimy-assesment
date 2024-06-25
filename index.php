<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$host = getenv('DB_HOST');
$db   = getenv('DB_NAME');
$user = getenv('DB_USER');
$pass = getenv('DB_PASS');

$dsn = "mysql:host=$host;dbname=$db;port=3306;";

try {
    $conn = new PDO($dsn, $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo 'Table contents:<br/>';

    $tableQuery = "SELECT * FROM test;";
    $tableStmt = $conn->query($tableQuery);

    $table = $tableStmt->fetchAll(PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Test Table</title>
</head>
<body>
    <table border="1" id="devops-app">
        <thead>
            <tr>
                <?php if (!empty($table)): ?>
                    <?php foreach ($table[0] as $columnName => $value): ?>
                        <th><?= htmlspecialchars($columnName) ?></th>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($table as $row): ?>
                <tr>
                    <?php foreach ($row as $cell): ?>
                        <td><?= htmlspecialchars($cell) ?></td>
                    <?php endforeach; ?>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
