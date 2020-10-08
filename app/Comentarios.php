<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentarios extends Model
{
    protected $fillable =[
        'comentarios_id',

    ];

    public $timestamps = false;
    
    public function comentarios()
    {
        return $this->belongsTo(ProdutoModel::class, "produtos_id");        

    }
    public function user()
    {
        return $this->belongsTo(User::class, "users_id");
    }
}
