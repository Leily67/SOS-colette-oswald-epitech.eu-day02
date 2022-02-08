<?php

include("../model/cat.php");
include("../model/dog.php");
include("../model/fox.php");
include("../model/meme.php");

class ShelterController {


    /*
       return a pet or a meme url in a json format  
       based on the 'type' query param ($_GET['type'])

        Examples:

        GET shelter?type=meme 
        {
            "url": "https://i.redd.it/2mljndb7ybg81.jpg", 
        }

        GET shelter?type=fox 
        {
            "url": "https://randomfox.ca/images/69.jpg", 
        }
        
        GET shelter?type=dog 
        {
            "url": "https://images.dog.ceo/breeds/labrador/n02099712_57.jpg", 
        }

        GET shelter?type=cat 
        {
            "url": "https://purr.objects-us-east-1.dream.io/i/969045_562915657092075_1520396426_n.jpg", 
        }

    */
    static function get() {

        switch ($_GET["type"]) {
            case 'cat':
                $url = Cat::getRandomUrl();
                break;
            case 'dog':
                $url = Dog::getRandomUrl();
                break;
            case 'fox':
                $url = Fox::getRandomUrl();
                break;
            case 'meme':
                $url = Meme::getRandomUrl();
        }
        echo $url;

    }


}


if($_SERVER['REQUEST_METHOD'] == "GET")
ShelterController::get();