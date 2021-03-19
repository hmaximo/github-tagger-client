<?php

function my_session_start() {
    if (isset($_SESSION['gitHubUser'])) {
        $gitHubUser = $_SESSION['gitHubUser'];
    }
    session_start();
    if (!empty($_SESSION['deleted_time']) && $_SESSION['deleted_time'] < time() - 180) {
        session_destroy();
        session_start();
    }
}

function check_session_user() {
    my_session_start();
    if (!isset ($_SESSION['gitHubUser']) && (!isset($_SESSION['password']))) {
        header("Location: ../index.php");
        exit;
    }
}

?>