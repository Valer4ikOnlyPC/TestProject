<?php
require_once "../Model/ComplexNumber.php";

$complexNumber = new ComplexNumber();
switch ($_REQUEST['action_name'])
{
    case 1:
        $arr = $complexNumber->Addition($_REQUEST['number1'], $_REQUEST['number2']);
        echo "Результат: $arr[0] ".IsPositive($arr[1])."i";
        break;
    case 2:
        $arr = $complexNumber->Subtraction($_REQUEST['number1'], $_REQUEST['number2']);
        echo "Результат: $arr[0] ".IsPositive($arr[1])."i";
        break;
    case 3:
        $arr = $complexNumber->Multiplication($_REQUEST['number1'], $_REQUEST['number2']);
        echo "Результат: $arr[0] ".IsPositive($arr[1])."i";
        break;
    case 4:
        $arr = $complexNumber->Division($_REQUEST['number1'], $_REQUEST['number2']);
        echo "Результат: $arr[0] ".IsPositive($arr[1])."i";
        break;
}

function IsPositive($num): string
{
    if (abs($num) === $num) return '+ '."$num";
    return '- '.abs($num);
}