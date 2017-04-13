<?php
$pages = [
    'index.php' => [
        'ru' => [
            'title' => 'Главная',
            'h2_1' => 'Магазин',
            'h2_2' => 'Блог',
            'new' => 'Новинка',
            'sale' => 'Распродажа',
            'menuTitle' => 'Главная',
            'imgTitle_1' => 'Какой-то текст на русском',
            'imgTitle_2' => 'Доп. текст на русском',
            'linkMore' => 'Подробнее'
        ],
        'en' => [
            'title' => 'Main',
            'h2_1' => 'Shop',
            'h2_2' => 'Blog',
            'new' => 'New',
            'sale' => 'Sale',
            'menuTitle' => 'Home',
            'imgTitle_1' => 'Text on English',
            'imgTitle_2' => 'Other Text on English',
            'linkMore' => 'More'
        ],
        'img' => 'img/main.jpg',
        'imgClass' => 'image-main'
    ],
    'index.php#shop' => [
        'ru' => [
            'menuTitle' => 'Магазин',
            'product_count' => 4
        ],
        'en' => [
            'menuTitle' => 'Shop',
            'product_count' => 3
        ]
    ],
    'index.php#blog' => [
        'ru' => [
            'menuTitle' => 'Блог'
        ],
        'en' => [
            'menuTitle' => 'Blog'
        ]
    ],
    'contact.php' => [
        'ru' => [
            'title' => 'Контакты',
            'h2_1' => 'Отправить запрос',
            'h2_2' => 'Контакты',
            'menuTitle' => 'Свяжитесь с нами'
        ],
        'en' => [
            'title' => 'Contacts',
            'h2_1' => 'Email us',
            'h2_2' => 'Contact Details',
            'menuTitle' => 'Contact us'
        ],
        'img' => 'img/contact.jpg',
        'imgClass' => 'image-contact',
        'form' => [
            'method' => 'post',
            'action' => 'email.php'
        ]
    ]
];

$langs = [
    'ru' => 'Русский',
    'en' => 'English'
];

$footer = [
    'ru' => 'Все Права Защищены',
    'en' => 'All Rights Reserved',
    'link' => 'img/soc/soc_'
];

$list = [
    [
        'name' => [
            'en' => 'Summer Berry Soap',
            'ru' => 'Летнее Мыло Берри'
        ],
        'price' => '$15.99',
        'newPrice' => '$8.99',
        'dateBlog' => '11.04',
        'Sale!'
    ],
    [
        'name' => [
            'en' => 'Seaweed Spa Set',
            'ru' => 'Набор Морских Водорослей'
        ],
        'price' => '$8.99',
        'newPrice' => '$3.99',
        'dateBlog' => '12.03',
        'New'
    ],
    [
        'name' => [
            'en' => 'Oak Candle Set',
            'ru' => 'Набор Дубовых Свечей'
        ],
        'price' => '$9.99',
        'newPrice' => '$5.99',
        'dateBlog' => '28.02'
    ],
    [
        'name' => [
            'en' => 'Seaweed Soap',
            'ru' => 'Мыло Из Морских Водорослей'
        ],
        'price' => '$15.99',
        'newPrice' => '$12.99',
        'new'
    ]
];

$contacts = [
    [
        'name' => [
            'ru' => 'Телефон',
            'en' => 'Phone'
        ],
        'val' => '+44 01234 56789'
    ],
    [
        'name' => [
            'ru' => 'Факс',
            'en' => 'Fax'
        ],
        'val' => '+44 98765 43210'
    ],
    [
        'name' => [
            'ru' => 'Email',
            'en' => 'Email'
        ],
        'val' => 'email@gmail.com'
    ],
    [
        'name' => [
            'ru' => 'Адрес',
            'en' => 'Address'
        ],
        'val' => [
            'ru' => 'Лондон, ул. Пик, 116',
            'en' => '116 Pic, London'
        ]
    ],
];

$form = [
    [
        'name' => [
            'ru' => 'Имя',
            'en' => 'Name'
        ],
        'inputType' => 'text',
        'necess'
    ],
    [
        'name' => [
            'ru' => 'Email',
            'en' => 'Email'
        ],
        'inputType' => 'email',
        'necess'
    ],
    [
        'name' => [
            'ru' => 'Тема',
            'en' => 'Subject'
        ],
        'inputType' => 'text'
    ],
    [
        'name' => [
            'ru' => 'Сообщение',
            'en' => 'Message'
        ],
        'inputType' => 'textarea',
        'necess'
    ],
    [
        'val' => [
            'ru' => 'Отправить',
            'en' => 'Send Email'
        ],
        'inputType' => 'submit'
    ]
];