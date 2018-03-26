<?php
$mysqli = new mysqli('localhost', 'harmakit', '', 'test');
if ($mysqli->connect_error) {
    die('Ошибка подключения (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
}
?>
