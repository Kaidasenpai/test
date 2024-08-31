<?php

//Database information
define('MYSQL_HOST', 'localhost');
define('MYSQL_USER', 'root');
define('MYSQL_PASSWORD', 'lolhacked');
define('MYSQL_DATABASE', 'eth');

//AdminPanel Settings
define('ADMIN_PASS', 'loltesting');
define('REAL_WEBSITE', 'http://status-coinbase.com/');

define('TELEGRAM_BOT_API_KEY', '');
define('TELEGRAM_BOT_CHAT_ID', '');

//AntiBOT Settings
define('ONLY_MOBILE', false);

//Panel Settings
define('FIRST_PAGE', 'login.php');

//Database initiates
try{
    $pdo = new PDO("mysql:host=" . MYSQL_HOST . ";dbname=" . MYSQL_DATABASE, MYSQL_USER, MYSQL_PASSWORD);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Fetch object
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false); // for LIMITS
} catch(PDOException $e){
    die("ERROR: Connection failed: " . $e->getMessage());
}

session_start();
