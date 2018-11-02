<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Credito extends Model
{
	protected $fillable = [
        'monto',
        'plazo',
        'cuotas',
        'interes',
        'valorcuota',
        'periodopagos',        
        'estado'
    ];
   public function customer(){
		return $this->hasOne('App\Customer','id','customer_id'); 
	} 
}
