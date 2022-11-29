<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\DogEditRequest;
use App\Http\Requests\DogStoreRequest;
use App\Http\Resources\DogResource;
use App\Models\Dog;
use Illuminate\Support\Facades\Storage;

class DogController extends Controller
{
    public function index() {

        return DogResource::collection(Dog::paginate(3));
    }

    public function store(DogStoreRequest $request) {

        sleep(2);

        // Emmagatzemo la imatge
        $pathImage = $request->file('image')->store('images', 'public'); 

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

    public function show(Dog $dog) {
        return new DogResource($dog);
    }

    public function update(Dog $dog, DogEditRequest $request) {
        $dog->update($request->validated());

        return new DogResource($dog);
    }

    public function destroy(Dog $dog) {
        unlink(public_path('images/'.$dog->image));

        $dog->delete();

        return response()->noContent();
    }
}
