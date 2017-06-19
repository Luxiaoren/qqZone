<?php
function buildRandomString($type,$lenght){
    if($type==1){
        $chars=join("", range(0,9));
    }else if($type==2){
        $chars=join("",array_merge(range("a","z"),range("A","Z")));
    }elseif($type==3){
        $chars=join("",array_merge(range("a","z"),range("A","Z"),range(0,9)));
    }

    if($lenght>strlen($chars)){
        exit("nono");
    }
    $char=str_shuffle($chars);//´òÂÒ×Ö·û´®
    $chars=substr($char,0,$lenght);//½ØÈ¡×Ö·û´®
    return $chars;
}