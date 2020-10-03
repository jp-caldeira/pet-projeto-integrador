<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pets extends Model
{
  public $table = "pets";
  public $primaryKey = "id_pet";
  public $timestamp = false;
  public $guarded = [];

  protected $fillable = [
    'especie', 'nome', 'genero','nascimento', 'comentarios', 'preferencias',
  ];
  
  public function user(){
    return $this-> belongsTo("App\User","id");
  }


}
