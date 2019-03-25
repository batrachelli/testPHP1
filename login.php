<?php
//echo $_POST['login'];
if (isset($_POST['login'])) {
    $GLOBALS['result'] = $_POST['login'];
} else {
    $GLOBALS['result'] = 'Error';
}

header("Location: http://localhost:8091/test1/index.php");

?>