<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Pago extends Model
{
	protected $fillable = [
        'numero_cuota',
        'valor',
        'cliente',
        'credito'
    ];
	public function Credito(){
		return $this->belongsToMany(Credito::class); 
	}
	

   
}
