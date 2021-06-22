<?php

//инициализация доступа к базе

function initBase (): PDO
{
    $dbName = 'mysql:dbname=shop;host=127.0.0.1';
    $user = 'root';
    $password = 'Werewolf1989*';

    return new PDO($dbName, $user, $password);
}