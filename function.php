<?php


// функция которая возвращает дату                                                  вернет 01.05.2022
// функция которая возвращает время 12:15                                           вернет 22:06
// функция которая возвращает версию php текущею                                    вернет 7.4

// функция которая складвывает 2 цифры                                              вернет сумму
// функция которая сравнивает 2 цифны больше(true) меньше(false) равно(0)           вернет true или false или 0
// функция которая разворачивает одномерный массив   [ 1, 2, 3 ,4] функция даст [ 4, 3 , 2 ,1 ]

//function will_not_return( $a,$b){
//    $c = $a+$b;
//}
//
//function will_return( $a,$b){
//    $c = $a+$b;
//    return $c;
//}
//
//echo will_return(1,2);<?php



//Date
function date_now(){
    $date = date ("l jS \of F Y h:i:s A");
    return $date;
}
echo date_now();

//Time
function time_now(){
    $time = date ("h:i:s A");
    return $time;
}
echo time_now();


//Version
function version_php(){
    $vrs = phpversion();
    return $vrs;
}
echo 'Текущая версия PHP: '.version_php();

//Sum
function sum( $a,$b){
    $c = $a+$b;
    return $c;
}
echo sum(1,2);

//Sravni
function sravni($a, $b)
{
    if ($a == $b) {
        return 0;
    }
    return ($a < $b) ? "false" : "true";
}
echo sravni(2, 6);