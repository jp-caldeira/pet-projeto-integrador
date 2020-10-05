<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;


class ProdutoModel extends Model
{
  use SearchableTrait;

   /**
    * Searchable rules.
    *
    * @var array
    */
   protected $searchable = [
       /**
        * Columns and their priority in search results.
        * Columns with higher values are more important.
        * Columns with equal values have equal importance.
        *
        * @var array
        */
       'columns' => [
         'produtos.nome' => 3, 
        'produtos.categoria' => 10,               
           
       ]
   ];
    public $table = "produtos";
   public $primaryKey = "id";
   public $timestamps = false;
    public $guarded = [];

    public function comentarios()
    {
      return $this->hasMany(comentarios::class);
    }
    public function User()
    {
      return $this->hasMany(User::class);
    }
}
