<?php
/**
 * Created by PhpStorm.
 * User: sakib
 * Date: 29/09/14
 * Time: 10:14
 */
function strip_zeros_from_date($marked_string=""){
    //removed the marked zeros
    $no_zeros = str_replace('*0','',$marked_string);
    // remove the remaining marks
    $cleaned_string = str_replace('*','',$no_zeros);
    return $cleaned_string;
}
function redirect_to($location =NULL){
    if($location!=NULL){
        header("Location: {$location}");
        exit;
    }
}

function output_message($message=""){
    if(!empty($message)){
        return "<p class=\"message\">{$message}</p>";

    } else {
        return "";
    }
}