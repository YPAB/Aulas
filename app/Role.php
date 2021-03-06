<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';
    protected $primaryKey = 'id';
    protected $fillable = [ 'name','description'];
    public $timestamps = true;


    public function users()
    {

        return $this
            ->belongsToMany('App\User')
            ->withTimestamps();
    }
}
