<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Caracteristica extends Model
{
    protected $table = 'caracteristicas';
    protected $primaryKey = 'id';
    protected $fillable = [ 'descripcion'];
    public $timestamps = true;

    public function aula(){
    	return $this->belongsTo(Aula::class);
    }

}
