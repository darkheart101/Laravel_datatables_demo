<?php

namespace App\Http\Controllers\ApiControllers;

use App\Http\Controllers\Controller;
use App\Car;

class CarController extends Controller
{
    public function getCars()
    {
        $query = Car::select('CarManufactor', 'CarModel', 'CarYear');
        return datatables($query)->make(true);
    }
}
