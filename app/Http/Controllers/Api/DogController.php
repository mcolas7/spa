<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\DogStoreRequest;
use App\Http\Resources\DogResource;
use App\Models\Dog;

class DogController extends Controller
{
    public function index() {

        return DogResource::collection(Dog::paginate(3));
    }

    public function store(DogStoreRequest $request) {

        sleep(2);

        // Emmagatzemo la imatge i l'autorització a la carpeta storage\app\public
        $pathImage = $request->file('image')->store('images', 'public');
        $imageRouter = explode('/', $pathImage);
        $imageName = $imageRouter[1];

        // $destinationPath = 'images';
        // $myimage = $request->image->getClientOriginalName();
        // $request->image->move(public_path($destinationPath), $myimage);

        $dog = Dog::create([
            'sex_id' => $request->sex_id,
            'size_id' => $request->size_id,
            'name' => $request->name,
            'image' => $pathImage, 
            'breed' => $request->breed,
            'color' => $request->color,
            'adopted' => false
        ]);

        return new DogResource($dog);



    }
}
