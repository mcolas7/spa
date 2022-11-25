<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\DogResource;
use App\Models\Dog;
use Illuminate\Http\Request;

class DogController extends Controller
{
    public function index() {
        // return Dog::all();

        return DogResource::collection(Dog::all());
    }
}
