<?php

/** @var PDO $pdo */
$pdo = require 'connection-no-db.php';

$dbname = 'demo';

$sql = "CREATE SCHEMA $dbname";

if ($pdo->exec($sql) !== false) {
    echo "The database '$dbname' was successfully created." . PHP_EOL;
} else {
    list(, , $driverErrMsg) = $pdo->errorInfo();
    echo "Error creating the database: $driverErrMsg" . PHP_EOL;
}
