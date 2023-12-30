<?php

namespace App\controllers;
require_once '../../vendor/autoload.php';

class DetailsController
{

    public function details()
    {
        include '../../views/user/details/details.php';
        exit();
    }
}