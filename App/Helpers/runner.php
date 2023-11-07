<?php
function getCategory($bd,$g){
    $age = getEdat($bd);
    if($g =="female"){
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

function getEdat($bd){
    $now = new DateTime("now",new DateTimeZone("Europe/Madrid"));
    $interval = $now->diff($bd);
    $age = $interval->y;
    return $age;
}