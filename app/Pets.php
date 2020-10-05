<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pets extends Model
{
  public $table = "pets";
  public $primaryKey = "id";
  public $timestamp = false;
  public $guarded = [];

  protected $fillable = [
    'especie', 'nome', 'genero','nascimento', 'comentarios', 'preferencias', 'users_id',
  ];
  
  public function user(){
    // return $this-> belongsTo("App\User","id");
    return $this-> belongsTo(User::class, "users_id");
    
  }


}
