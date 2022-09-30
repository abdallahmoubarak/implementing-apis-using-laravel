<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TranslateController extends Controller{

function translate(Request $request){

    $text = $request->text;

    $arr = str_split($text);
	$newStr = "";
	$temp = "";
	
	for($i = 0; $i < count($arr); $i++) {
		if(is_numeric($arr[$i])) {
			$temp .= $arr[$i];
		} else {
			if($temp != "") {
				$newStr .= decbin($temp);
				$temp = "";
			}
			$newStr .= $arr[$i];
		}
	}
	
	if($temp != "") {
		$newStr .= decbin($temp);
	}
	
	return $newStr;


}
}