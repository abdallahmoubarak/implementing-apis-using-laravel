<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SortController extends Controller{

function sortString(Request $request){

        $str = $request->str;
        $letters = array();
        $numbers = array();
        
        for ($i = 0; $i < strlen($str); $i++) {
            if (is_numeric($str[$i])) {
                array_push($numbers, $str[$i]);
            } else {
                array_push($letters, $str[$i]);
            }
        }

        /* we make all our letters lower case, then we get one of each, 
        that means letter will never be duplicated in our array 
        */

        $result = [];
        $lower_all =  array_map('strtolower', $letters);
        $unique_letters = array_unique($lower_all);
        sort($unique_letters);

        /* when we loop over all unique_letters 
        if the letter exists as a lowercase we set it and look for the uppercase 
        if is not exist we set it as an uppercase
        */

        foreach($unique_letters as $x){
            if(in_array($x,$letters)){
                $result[]=$x;
                if (in_array(strtoupper($x), $letters)){
                    $result[]=strtoupper($x);
                }
            }elseif (in_array(strtoupper($x), $letters)){
                $result[]=strtoupper($x);
            }
          }
        
        $letters= $result;
        sort($numbers);

        $output = array_merge($letters, $numbers);
        $output = implode('', $output);

        return json_encode($output);
    }

}