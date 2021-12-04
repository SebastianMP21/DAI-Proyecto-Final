<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class CatalogoController extends Controller
{
    
    public function index()
    {       
         //Con paginación
        
         return view('Catalogo.index');
         //al usar esta paginacion, recordar poner en el el index.blade.php este codigo  {!! $blogs->links() !!}    
    }

    

    
}
