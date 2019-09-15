<?php

namespace App\Http\Controllers\WebControllers;

use App\Car;
use App\Http\Controllers\Controller;

class CarController extends Controller
{
    public function cars_simple_table()
    {
        $cars = Car::all();

        return View('simple',compact('cars'));
    }

    public function cars_datatable()
    {
        $cars = Car::all();

        return View('datatables',compact('cars'));
    }

    public function cars_ajax_datatable()
    {
        return View('ajax_datatables');
    }
}
