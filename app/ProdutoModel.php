<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProdutoModel extends Model
{
    public $table = "produtos";
   public $primaryKey = "id";
   public $timestamps = false;
    public $guarded = [];
}
