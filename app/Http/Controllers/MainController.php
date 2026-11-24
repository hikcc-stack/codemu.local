<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function calculator()
    {
        //1
        $number = 245;
        $sqrtResult = sqrt($number);

        //2
        $number1 = 2;
        $number2 = 10;
        $powResult = pow($number1, $number2);

        //3
        $arr = [4, 2, 5, 19, 13, 0, 10];
        $sum = 0;
        foreach ($arr as $elem) {
            $sum += pow($elem, 2);
        }
        $arrResult = sqrt($sum);

        // Функции округления в PHP
        //1
        $roundNumber = 379;
        $roundNumberResult = round(sqrt(379));
        $roundNumberResult2 = round(sqrt(379), 1);
        $roundNumberResult3 = round(sqrt(379), 2);

        //2
        $floorceil = 587;
        $floorResult = floor(sqrt(587));
        $ceilResult = ceil(sqrt(587));


        //Функция min
        $array = [4, -2, 5, 19, -130, 0, 10];
        $min = min($array);
        //Функция max
        $max = max($array);


        // Функция abs
        $a = 10;
        $b = -19;

        $absResult = abs($a - $b);

        //Функция array_sum
        $arrSum = [1, 2, 3, 4, 5];
        $arrSumReuslt = array_sum($arrSum);

        //Функция array_product
        $arrProductReuslt = array_product($arrSum);

        $avgResult = array_sum($arrSum) / count($arrSum);


        //Функция strlen
        $str = 'abcde';
        $strResult = strlen($str);

        //Функция mb_strlen
        $strRus = 'привет';
        $strRusResult = mb_strlen($strRus);

        //3
        $password = 'secret12';
        $len = strlen($password);

        if ($len > 5 && $len < 10) {
            $passwordMessage = 'Пароль подходит';
        } else {
            $passwordMessage = 'Нужно придумать другой пароль';
        }

        return view('main', compact(
            'number',
            'sqrtResult',
            'number1',
            'number2',
            'powResult',
            'arrResult',
            'roundNumberResult',
            'roundNumberResult2',
            'roundNumberResult3',
            'floorResult',
            'ceilResult',
            'min',
            'max',
            'absResult',
            'arrSumReuslt',
            'arrProductReuslt',
            'avgResult',
            'strResult',
            'strRusResult',
            'password',
            'passwordMessage'
        ));

    
        
        

    }
}
