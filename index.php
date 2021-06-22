<?php

include_once 'DB/initBase.php';
require 'DB/showPage.php';

// берем полный путь
$fullUrl = $_SERVER['REQUEST_URI'];

//разбиваем путь на массив
$urlNumber = explode('/', $fullUrl);

//берем цифру (это будет страница) из пути (массива urlNumber)
$pageNumber = $urlNumber[2];

// выводим страницу с html согласно pageNumber
showPage($pageNumber);
