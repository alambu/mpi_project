<?php


function toast_set($key,$message)
{
    $_SESSION[$key] = $message;
}

function toast($key)
{
    $m = $_SESSION[$key];
    unset($_SESSION[$key]);
    echo $m;
}

function toast_exists($key)
{
    if(isset($_SESSION[$key])){
        return true;
    }else{
        return false;
    }
}

function debug($input)
{
    header('Content-Type: application/json');
    echo json_encode($input);
    die();
}