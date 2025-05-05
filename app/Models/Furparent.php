<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Furparent extends Model
{
    use HasFactory;
    protected $table = 'furparents';
    protected $fillable = [
        'id',
        'furparent_name'
    ];

    public function breeds() {
        return $this->hasMany(Breed::class, 'furparent_id');
    }
    
}
