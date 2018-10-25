<?php
namespace App\Http\Controllers\Pago;


use Illuminate\Http\Request;


class PagoController extends VoyagerBreadController
{
    //
    public function index()
    {
        //
        return view('pagos.index');
        
    }
}