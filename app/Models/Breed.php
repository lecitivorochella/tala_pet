<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Breed extends Model
{
    use HasFactory;
    protected $table = 'breeds';
    protected $fillable = [
        'id',
        'name',
        'furparent_id',
        'adoptiondate'
    ];

    public function furparent() {
        return $this->belongsTo(Furparent::class, 'furparent_id');
    }
    
}
