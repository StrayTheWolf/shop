<?php

include_once 'initBase.php';

function readPages()
{
//запрос из базы
    $query = initBase()->query('SELECT name FROM shop.pages ORDER BY idpages');

//получение результатов запроса и возврат их в вызов функции
    return $query->fetchAll(PDO::FETCH_ASSOC);
}

