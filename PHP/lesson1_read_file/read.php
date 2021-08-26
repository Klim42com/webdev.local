<?php

$f = fopen('text.txt', 'r'); // $f - дескриптор файла
//fgets - чтение строки
//feof - false конец файла не достигнут

while ( !feof($f) ) {
    echo fgets($f). "<hr>";
}




fclose($f);