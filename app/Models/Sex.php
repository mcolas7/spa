<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sex extends Model
{
    use HasFactory;
    protected $table = 'sexes';
    protected $primaryKey = 'sex_id';
    protected $guarded = ['sex_id','name'];

    /**
     * This function returns all the dogs that have a sex_id that matches the id of the current sex
     * 
     * @return A collection of dogs that have the same sex_id as the current instance of Sex.
     */
    public function dogs () {
        return $this->hasMany(Dog::class, 'sex_id');
    }
}
