<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Periodo extends Model
{
    protected $table = 'periodos';
    protected $primaryKey = 'id';
    protected $fillable = [ 'nombre', 'año','fehca_i','fecha_f'];
    public $timestamps = true;

    public function reservas(){
    	return $this->hasMany(Reserva::class,'reserva_id');
    }
}
