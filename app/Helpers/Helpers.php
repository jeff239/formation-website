<?php

namespace App\Helpers;

class Helpers
{

    public static function generateBreadCumbData($title, $path): array
    {
        return [
            'title' => $title,
            'path' => $path
        ];
    }

    public static function getRouteNameList(){

    }

}
