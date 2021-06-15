<?php

include 'DB/readBasePages.php';

$id = readPages();
print_r($id);
die;


//Трим для удаления / из пути, который потом в кейсах
switch (trim($_SERVER['REQUEST_URI'], '/')) {
    case '':
        //задаем переменной title которая в шаблоне, значение
        ob_start();
        //инклудим страницу для сбора и вывода
        include __DIR__ . '/pages/index.php';
        //в переменной контент будет все содержимое до комманды clean а именно страница addProduct
        $content = ob_get_contents();
        ob_clean();
        $title = 'Добро пожаловать в наш магазин';
        include __DIR__ . '/pages/layout.php';
        break;

    case 'delivery':
        //начинаем собираем в буфер
        ob_start();
        //инклудим страницу для сбора и вывода
        include __DIR__ . '/pages/delivery.php';
        //в переменной контент будет все содержимое до комманды clean а именно страница addProduct
        $content = ob_get_contents();
        ob_clean();
        //задаем переменной title которая в шаблоне, значение
        $title = 'Доставка';
        //инклудим основной шаблон
        include __DIR__ . '/pages/layout.php';
        break;

    case 'payment':
        //начинаем собираем в буфер
        ob_start();
        //инклудим страницу для сбора и вывода
        include __DIR__ . '/pages/payment.php';
        //в переменной контент будет все содержимое до комманды clean а именно страница addProduct
        $content = ob_get_contents();
        ob_clean();
        //задаем переменной title которая в шаблоне, значение
        $title = 'Способы оплаты';
        //инклудим основной шаблон
        include __DIR__ . '/pages/layout.php';
        break;

    case 'vacancy':
        //начинаем собираем в буфер
        ob_start();
        //инклудим страницу для сбора и вывода
        include __DIR__ . '/pages/vacancy.php';
        //в переменной контент будет все содержимое до комманды clean а именно страница addProduct
        $content = ob_get_contents();
        ob_clean();
        //задаем переменной title которая в шаблоне, значение
        $title = 'Вакансии';
        //инклудим основной шаблон
        include __DIR__ . '/pages/layout.php';
        break;

    case 'contacts':
        //начинаем собираем в буфер
        ob_start();
        //инклудим страницу для сбора и вывода
        include __DIR__ . '/pages/contacts.php';
        //в переменной контент будет все содержимое до комманды clean а именно страница addProduct
        $content = ob_get_contents();
        ob_clean();
        //задаем переменной title которая в шаблоне, значение
        $title = 'Контакты';
        //инклудим основной шаблон
        include __DIR__ . '/pages/layout.php';
        break;

    case 'aboutUs':
        //начинаем собираем в буфер
        ob_start();
        //инклудим страницу для сбора и вывода
        include __DIR__ . '/pages/aboutUs.php';
        //в переменной контент будет все содержимое до комманды clean а именно страница addProduct
        $content = ob_get_contents();
        ob_clean();
        //задаем переменной title которая в шаблоне, значение
        $title = 'О нас';
        //инклудим основной шаблон
        include __DIR__ . '/pages/layout.php';
        break;
}