<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CobaController extends Controller
{
    public function show($name)
    {
        return "Hello " . $name . "...!";
    }
}
