<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrefixNotationController extends Controller{

function calculate(Request $request){

    $text = $request->text;

    $expression = explode(" ", $text);
    $operator = array_shift($expression);
    $operand1 = array_shift($expression);
    $operand2 = array_shift($expression);
    
    switch($operator) {
        case '+':
            return $operand1 + $operand2;
            break;
        case '-':
            return $operand1 - $operand2;
            break;
        case '*':
            return $operand1 * $operand2;
            break;
        case '/':
            return $operand1 / $operand2;
            break;
    }

}
}