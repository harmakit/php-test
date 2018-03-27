<?php
$mysqli = new mysqli('127.0.0.1', 'harmakit', 'password', 'test', 3300);
if ($mysqli->connect_error) {
    throw new Exception('Ошибка подключения (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
}

