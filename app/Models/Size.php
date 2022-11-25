<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    use HasFactory;
    protected $table = 'sizes';
    protected $primaryKey = 'size_id';
    protected $guarded = ['size_id','name'];

    /**
     * This function returns all the dogs that have a size_id that matches the id of the current size
     * 
     * @return A collection of dogs that have the same size_id as the size.
     */
    public function dogs () {
        return $this->hasMany(Dog::class, 'size_id');
    }
}
