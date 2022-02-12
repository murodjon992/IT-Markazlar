<?
    ob_start();
    session_start();
    if ($_SESSION['is_login']) {
        session_unset();
        session_destroy();
        header("Location: /");
    } else {
        header("Location: /");
    }
    ob_end_flush();
?>