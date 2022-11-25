<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dog extends Model
{
    use HasFactory;
    protected $table = 'dogs';
    protected $primaryKey = 'dog_id';
    protected $fillable = ['sex_id', 'size_id', 'name','image','breed','color','adopted'];
    protected $guarded = ['dog_id'];

    /**
     * This function returns the Sex model that belongs to the current model.
     * 
     * @return Sex The sex of the dog.
     */
    public function sex() {
        return $this->belongsTo(Sex::class, 'sex_id');
    }

    /**
     * This function returns the Size model that belongs to the current model.
     * 
     * @return Size The size of the dog.
     */
    public function size() {
        return $this->belongsTo(Size::class, 'size_id');
    }
}
