<?php

if (($_SERVER['REQUEST_METHOD'] === 'POST') || ($_SERVER['REQUEST_METHOD'] === 'GET'))
{
    $BASE_DIRS = __DIR__;
    switch($_SERVER['REQUEST_URI'])
    {
        case '/':
        case '/home':
            require_once($BASE_DIRS . 'ViewCandidates/view.php');
            break;
        default:
            // echo '[' . $_SERVER['REQUEST_URI'] . '] This page not found...';                
            require_once('notFound.php');
            break;
    }
}

?>