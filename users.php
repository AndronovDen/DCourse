<?php
// Подключение БД
require_once 'db.php';

// Подготовка "каркаса" запросв
$statement = $mysqli->prepare("
    SELECT * FROM `users` WHERE login = ? AND password = ?;
");

// Передача данных пользователя для использования в запросе
$statement->bind_param("ss", $_POST['login'], $_POST['password']);

// Выполнение запроса с сохранением результата
$result = $statement->execute();