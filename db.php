<?php

function connect() {
    // read parameters in the ini configuration file
    $params = parse_ini_file(__DIR__ . '/.env');
    if ($params === false) {
        throw new \Exception("Error reading database configuration file");
    }
    // connect to the postgresql database
    $conStr = sprintf("pgsql:host=%s;port=%d;dbname=%s;user=%s;password=%s;sslmode=require",
            $params['DB_HOST'],
            $params['DB_PORT'],
            $params['DB_NAME'],
            $params['DB_USER'],
            $params['DB_PASS']);

    $pdo = new \PDO($conStr);
    $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    return $pdo;
}

$db = connect();

$count = $db->query("SELECT COUNT(*) FROM public.users WHERE email ILIKE '%da%'")->fetchColumn();
echo($count);

$users = $db->query("SELECT name, id, email FROM public.users WHERE email ILIKE '%da%'")->fetchAll(PDO::FETCH_ASSOC);
print('<pre>');
print_r($users);
$first_user = $users[0];
// print_r($first_user);
$name = $first_user['name'];
print_r($first_user['name']);
print('</pre>');

