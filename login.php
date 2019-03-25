<?php
if ($_POST['login'] == "batrachelli" and $_POST['password'] == "1234") {
    session_start($_SESSION['login'])} else {session_destroy()}
?>