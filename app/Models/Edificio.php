<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Edificio extends Model
{
    protected $table = 'edificios';
    protected $primaryKey = 'id';
    protected $fillable = [ 'nombre', 'telefono', 'direccion'];
    public $timestamps = true;

    public function aulas(){
    	return $this->hasMany(Aula::class,'aula_id');
    }
}
