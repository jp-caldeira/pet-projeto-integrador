<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pets extends Model
{
  public $table = "pets";
  public $primaryKey = "id";
  public $timestamp = false;
  public $guarded = [];

  // protected $fillable = [
  //   'nome', 'especie', 'genero','nascimento',];
  
  


}
