<?php

namespace App\Faker;

use Faker\Provider\Base;

class CustomProvider extends Base
{


    public function manufacturerName()
    {
        $names = array(
            'BMW',
            'MERCEDES',
            'AUDI',
            'DACIA',
            'HONDA',
            'FIAT',
            'NISSAN',
        );
        return $this->randomElement($names);
    }
    public function carModelName()
    {
        $names = array(
            '320i',
            '118i',
            'E 180',
            'C 200',
            'E 250',
            'A1',
            'A2',
            'A3',
            'R8',
            'DUSTER',
            'LOGAN',
            'CIVIC',
            'CITY',
            'SPORT',
            '350z',
            'ALBEA',
            'PUNTO',
            'UNO',
        );
        return $this->randomElement($names);
    }
    public function categoryName()
    {
        $names = array(
            'SEDAN',
            'CUV',
            'SUV',
            'COUPE',
            'TRUCK',
            'HATCHBACK',
            'SUPERCAR',
        );
        return $this->randomElement($names);
    }

}
