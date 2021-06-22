<?php

include_once 'initBase.php';

function showPage($pageNumber)
{
    if ($pageNumber)
    {
        //запрос из базы
        $query = initBase()->query("SELECT title, content FROM shop.pages WHERE idpages ='$pageNumber'");

        //получение результатов запроса и возврат их в вызов функции
        $result = $query->fetchAll(PDO::FETCH_ASSOC);

        $title = $result[0]['title'];
        $content = $result[0]['content'];

        //даем доступ переменным из if в layout
        include 'templates/layout.php';
    }
    else if ($pageNumber = '/')
    {
        include 'templates/loginForm.php';
    }
}