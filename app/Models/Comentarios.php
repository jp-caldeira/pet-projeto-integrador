<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comentarios extends Model
{
    protected $fillable =[
        'comentarios_id',

    ];

    public $timestamps = false;
    
    public function comentarios()
    {
        return $this->belongsTo(Comentarios::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
