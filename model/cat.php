<?php

class Cat {

    // https://aws.random.cat/meow
    static function getRandomUrl() {

    $data = file_get_contents("https://aws.random.cat/meow");
    $array = json_decode($data, true);
        
    return $array["file"];
    }

}
//echo Cat::getRandomUrl();