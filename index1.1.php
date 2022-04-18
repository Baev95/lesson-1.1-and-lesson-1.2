<!-- 1.	Слова предложение «Я хочу быть программистом» разбить на массив и вывести каждое слово на новой строке. -->

<?php
$row = "Я хочу быть программистом";
$splitRow = explode(" ", $row );  


foreach ($splitRow as $key => $value) {
    $text = ("$value \n");
    $text = preg_replace('<br>','', $text);
    echo $text;
}

// Проверка в песочнице https://php-sandbox.ru/ 
// показала нужный результат:
// Я 
// хочу 
// быть 
// программистом   


// 2.	В чём разница между «=», «==» и «===» ?

// = присваивание информации в переменную. 
// ==  сравнение с приведением типов (выдает либо true, либо false).
// === строгое сравнение (типы переменных и их значения должны строго совпадать) (выдает либо true, либо false).


// 3.	Перечислите типы данных.

// bool – булево значение. True или false
// int - целые числа
// float - дробные числа (с плавающей точкой)
// string - строки 
// array - массивы 
// object - объекты
// resource - ресурсы, обычно специальная ссылка на внешний ресурс
// null - отсутствие значения

// Опредлить тип данных можно с помощью gettype()


// 4.	Чем отличается константа от переменной?

// Переменная назначается символом $ и может быть изменена. 
// Константа назначается define(), и не может быть переписана в другое значение. 
// Имена констант всегда пишутся в верхнем регистре и  у них нет приставки в виде знака доллара. 
// Константы могут иметь только скалярные значения или массивы. 
// Также они могут быть определены и доступны в любом месте без учёта области видимости.

// 5.	Объявите переменную «i» и присвойте ей значение 5

// $i = 5;

// 6.	Чем отличается конструкция «if» от «elseif» ?

// Условие elseif используется только после объявления if  и выполняется только если условие (в  if) было false. 
// elseif предлагает новое условие и если результат == true, тогда выполняется тело кода. 
// Если же false, то условие переходит к дефолтному else или если его нет закрывает условие.

// 7.	Для чего используется конструкция «foreach» ?

// Конструкция foreach предоставляет простой способ перебора массивов. 
// foreach работает только с массивами и объектами. Открываются скобки и 
// создаются два аргумента, которые могут принимать один элемент от родителя.


// 8.	Для чего используется «break» ?

// break прерывает выполнение for, foreach, while, do-while. Выходит из цикла. 

// 9.	Чем отличается «include» от «require» ?

// «include» от «require» отличается в том, что «require» падает в Fatal error при невозможности подключения файла по любой причине.
// А «include» только выдает warning и спокойно продолжает работу. 

// 10.	В чем различия между «include» и «include_once»

// Отличие «include_once» от «include» заключается в том, что файл не будет подключен второй раз при повторной попытке, в отличие от «include». 