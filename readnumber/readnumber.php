<?php

function lessThan10($number)
{
    switch ($number[strlen($number) - 1]) {
        case 0:
            return "Zero";
            break;
        case 1:
            return "One";
            break;
        case 2:
            return "Two";
            break;
        case 3:
            return "Three";
            break;
        case 4:
            return  "Four";
            break;
        case 5:
            return "Five";
            break;
        case 6:
            return "Six";
            break;
        case 7:
            return "Seven";
            break;
        case 8:
            return "Eight";
            break;
        case 9:
            return "Nine";
            break;
        default:
            return "Not result";
            break;
    }
}

function from10to19($number)
{
    switch ($number[strlen($number) - 1]) {
        case 0:
            return "Ten";
            break;
        case 1:
            return "eleven";
            break;
        case 2:
            return "twelve";
            break;
        case 3:
            return "thirteen";
            break;
        case 4:
            return "fourteen";
            break;
        case 5:
            return "fifteen";
            break;
        case 6:
            return "sixteen";
            break;
        case 7:
            return "seventeen";
            break;
        case 8:
            return "eighteen";
            break;
        case 9:
            return "nineteen";
            break;
    }
}

function moreThan20($number)
{
    switch ($number[strlen($number) - 2]) {
        case 2:
            return "Twenty";
            break;
        case 3:
            return "thirty";
            break;
        case 4:
            return "forty";
            break;
        case 5:
            return "fifty";
            break;
        case 6:
            return "sixty";
            break;
        case 7:
            return "seventy";
            break;
        case 8:
            return "eighty";
            break;
        case 9:
            return "ninety";
            break;
    }
}

function hundred($number)
{
    switch ($number[strlen($number)  - 3]) {
        case 1:
            return "One hundred";
            break;
        case 2:
            return "Two hundred";
            break;
        case 3:
            return "Three hundred";
            break;
        case 4:
            return "Four hundred";
            break;
        case 5:
            return "Five hundred";
            break;
        case 6:
            return "Six hundred";
            break;
        case 7:
            return "Seven hundred";
            break;
        case 8:
            return "Eight hundred";
            break;
        case 9:
            return "Nine hundred";
            break;
    }
}

function twoNumber($number)
{
    if ($number < 20) {
        return from10to19($number);
    }
    if ($number[strlen($number) - 1] == 0) {
        return moreThan20($number);
    } else {
        return moreThan20($number) . " " . lessThan10($number);
    }
}
function threeNumber($number)
{
    if ($number % 100 == 0) {
        return hundred($number);
    }
    if ($number[1] == 0) {
        return hundred($number) . " and " . lessThan10($number[2]);
    } else {
        return hundred($number) . " and " . twoNumber($number[1] . $number[2]);
    }
}

function changenumbertoLetter($number)
{
    if (strlen($number) > 3) {
        echo "Out of ability";
    }
    if (strlen($number) == 3) {
        echo threeNumber($number);
    }
    if (strlen($number) == 2) {
        echo twoNumber($number);
    }
    if (strlen($number) == 1) {
        echo lessThan10($number);
    }
}



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST["search"];
    changenumbertoLetter($number);
}
