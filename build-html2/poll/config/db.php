<?php

// Подключение к бд
define("HOST", "localhost");
define("USER", "tdevelrc_poll");
define("PASSWORD", "DeadBoy7967");
define("DB", "tdevelrc_poll");

// Соединение с бд
$GLOBALS["db"] = mysqli_connect(HOST, USER, PASSWORD, DB) or die("Ошибка подключения MySql");

// Кодировка для текущего соединения
mysqli_set_charset($GLOBALS["db"], 'utf8');