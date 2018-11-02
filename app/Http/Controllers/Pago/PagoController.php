<?php
namespace App\Http\Controllers\Pago;

use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Credito;

class PagoController extends VoyagerBreadController
{
    //
    public function index()
    {
        //
        $creditos = Credito::with('customer')->get();   
        //  
        return view('pagos.index')->with('creditos', $creditos);
        
    }
}