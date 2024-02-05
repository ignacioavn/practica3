<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Framework extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'level',
        'year',
    ];

    public $timestamps = false;

    public function user(){
        return $this->belongsTo(User::class);
    }
}
