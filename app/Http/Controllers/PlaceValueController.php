<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlaceValueController extends Controller{

function placeValue(Request $request){

    $number = $request->number;
    
    /* gitting the sign of the number*/
    $sign=1;
    if ($number < 0) $sign=-1;
    $number = abs($number);

    /* converting the number to an array */
    $num_array = str_split($number);
    $result = [];
    $a=1;

    /* looping on the array and giving each number its value  */
    foreach($num_array as $value) {
      $result[] = (int)$value*(10**(count($num_array)-$a))*$sign;
      $a++;
    }
    return $result;
}
}