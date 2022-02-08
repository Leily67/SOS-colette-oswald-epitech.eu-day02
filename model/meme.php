<?php

class Meme {

    // https://meme-api.herokuapp.com/gimme
    static function getRandomUrl() {
        $data = file_get_contents("https://meme-api.herokuapp.com/gimme");
        $array = json_decode($data, true);

        return $array["url"];
    }
    

}
//echo Meme::getRandomUrl();