<?php
function generatePassword($length): string
{

    $lowerCaseLetters = 'abcdefghijklmnopqrstuvwxyz';
    $upperCaseLetters = strtoupper(($lowerCaseLetters));
    $numbers = '0123456789';
    $symbols = '.,:;@+-()!?#';

    $chars = $lowerCaseLetters . $upperCaseLetters . $numbers . $symbols;
    //var_dump($chars);

    $password = '';
    while (strlen($password) < $length) {
        $char = $chars[rand(0, strlen($chars))];
        $password .= $char;
    };

    return $password;
};
