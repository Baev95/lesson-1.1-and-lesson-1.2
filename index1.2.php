<?php

// Напишите код, который перебирает произвольный массив строк и в 
// каждом элементе массива преобразует вторую букву в заглавную, а все остальные в строчные. 


$letters = array('Первый', 'Второй', 'Третий', 'JavaScriptForever');

foreach ($letters as $value) {
    echo(mb_strtoupper(mb_substr($value, 0, 2, 'utf-8'), 'utf-8').
    mb_substr($value, 2, mb_strlen($value), 'utf-8'));
    echo(' ');
}

// Проверка в песочнице https://php-sandbox.ru/ показала нужный результат - ПЕрвый ВТорой ТРетий JAvaScriptForever 