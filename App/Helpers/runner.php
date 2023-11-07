<?php
function getCategory($bd,$g){
    $now = new DateTime("now",new DateTimeZone("Europe/Madrid"));
    $interval = $now->diff($bd);
    $age = $interval->y;
    if($g =="fe"){
        if($age<19){
            return "1";
        }else if($age<65){
            return "2";
        }else{
            return "3";
        }
    }else{
        if($age<19){
            return "4";
        }else if($age<65){
            return "5";
        }else{
            return "6";
        }
    }
}