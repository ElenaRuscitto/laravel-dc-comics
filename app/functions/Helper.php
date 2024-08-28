<?php

namespace App\Functions ;

use Illuminate\Support\Str;

class Helper{

    public static function generateSlug($string, $model){
        $slug = Str::slug($string, '-');
        $original_slug = $slug ;

        $exist = $model::where ('slug', $slug)->first();
        $c = 1;

        while($exist){
            $slug =  $original_slug . '-' . $c ;
            $exist = $model::where ('slug', $slug)->first();
            $c++;
        }

        return $slug;
    }




    // per trasformare array in stringa
    public static function toString($myArray){
        $string = '';
        foreach($myArray as $item){
            if(!$string == ''){
                $string .= ' , ' . $item;
            }else{
                $string = $item;
            }
        }
        return $string;
    }


    public static function formDate($data) {
        $data = date_create($data);
        return date_format($data, 'd/m/Y');
    }
}
