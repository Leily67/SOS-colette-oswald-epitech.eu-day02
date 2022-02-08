<?php

class Fox {

    // https://randomfox.ca/floof/
    static function getRandomUrl() {
        $data = file_get_contents("https://randomfox.ca/floof/");
        $array = json_decode($data, true);

        return $array["image"];
    }

}
//echo Fox::getRandomUrl();