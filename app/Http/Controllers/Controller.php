<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controller   
{
    public function result($value1, $operator, $value2)
    {
        $value1 = (float) $value1;
        $value2 = (float) $value2;

        switch ($operator) {
            case 'addition':
                $result = $value1 + $value2;
                break;
            case 'subtraction':
                $result = $value1 - $value2;
                break;
            case 'multiplication': 
                $result = $value1 * $value2;
                break;
            case 'division': 
                if ($value2 == 0) {
                    return "エラー: 0で割ることはできません。";
                }
                $result = $value1 / $value2;
                break;
            default:
                return "エラー: 無効な演算子です。";
        }

        return view('result',compact('result'));
    }
}
