<?php

class Dog {

    // https://dog.ceo/api/breeds/image/random
    static function getRandomUrl() {
    $data = file_get_contents("https://dog.ceo/api/breeds/image/random");
    $array = json_decode($data, true);

    return $array["message"];
    }

}
//echo Dog::getRandomUrl();