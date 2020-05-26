<?php

		    function getRightKey($tempArray, $id, $type) {
    $rightID = $id;
    $rightKey = 0;

    $cnt = count($tempArray);
    $cindex = $cnt - 1;

    if ($type < -10) {
        if ($type == -11) {
            $rightID = $tempArray[0];
        }

        if ($type == -12) {
            $rightID = $tempArray[$cindex];
        }
    } else {
        if ($cnt > 1) {
            $key = array_search($id, $tempArray);

            if ($type == 1) {
                if ($key < $cindex) {
                    $rightKey = $key + 1;
                } else {
                    $rightKey = 0;
                }
            } else {
                if ($key == 0) {

                    $rightKey = $cindex;
                } else {
                    $rightKey = $key - 1;
                }
            }


            $rightID = $tempArray[$rightKey];
        }
    }

    return $rightID;
}
function date_converter($time)
{
        $american_date = date('m/Y/d h:i:s',$time);
        return $american_date;
}

 function check_numeric($variable){
        
        if(is_numeric($variable)){
            return $variable;
        } else {
            return 0;
        }
    }
    
    
    if (!function_exists('usa_date')) {

        function usa_date($date) {
            if($date && $date != '1900-01-01' && $date != '1970-01-01'){
               return $newDate = date("m/d/Y", strtotime($date));
            } else {
                return '';
            }

        }

    }

    if (!function_exists('small_date')) {

        function small_date($date) {
            if($date && $date != '1900-01-01' && $date != '1970-01-01'){
               return $newDate = date("m/d/y", strtotime($date));
            } else {
                return '';
            }

        }

    }

function parseDate_US($strDate){
// mm/dd/yyyy - US date format


if($strDate){
     $strTemp = explode(" ",$strDate);
    $strTemp = explode("/",$strTemp[0]);
   // print_r($strTemp);
    $strTemp[0]; //mm
    $strTemp[1]; //dd
    $strTemp[2]; //yyyy
    $strDate = $strTemp[2] . "-" . $strTemp[0] . "-" . $strTemp[1]; // mm/dd/yyyy
     return $strDate;
} else {
    return '';
}


}//endof fucntion

function check_empty($var){
        if($var){
            return $var;
        } else {
            return 0;
        }
    }

function add_padding_to_string($string){

    $spaces_to_add = 12 - strlen($string);

    for($i = 1; $i <= $spaces_to_add; $i++){
        $string .= '&nbsp;';
    }
    return $string;
    //return str_pad($string,12, ' ',STR_PAD_RIGHT);
    
}
