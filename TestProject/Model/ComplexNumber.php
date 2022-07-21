<?php

class ComplexNumber
{
    public function Addition(array $number1, array $number2): array
    {
        return array($number1[0] + $number2[0], $number1[1] + $number2[1]);
    }
    public function Subtraction(array $number1, array $number2): array
    {
        return array($number1[0] - $number2[0], $number1[1] - $number2[1]);
    }
    public function Multiplication(array $number1, array $number2): array
    {
        return array(($number1[0] * $number2[0]) - ($number1[1] * $number2[1]),
            ($number1[0] * $number2[1]) + ($number1[1] * $number2[0]));
    }
    public function Division(array $number1, array $number2): array
    {
        return array((($number1[0] * $number2[0]) + ($number1[1] * $number2[1]))
            / (($number2[0]**2) + ($number2[1]**2)),
            (($number2[0] * $number1[1]) - ($number1[0] * $number2[1]))
            / (($number2[0]**2) + ($number2[1]**2)));
    }
}