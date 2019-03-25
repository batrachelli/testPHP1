<?php
if ($_POST['login'] == "alex" && $_POST['password'] == "1234") {
    session_start();
    $session_login = $_POST['login'];} else {session_destroy();}
?>