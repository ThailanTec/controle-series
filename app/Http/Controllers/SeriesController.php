<?php 

namespace App\Http\Controllers;

class SeriesController extends Controller
{

  public  function index() {

        $series = [
            'Lost',
            'Agents of SHIELD',
            'Vikins',
            'American Pie',
            'As aventuras do cavalo'
            
            
        ];
     
        return view('series.index' , compact('series'));
    }
    
  public function create(){

    return view('series.create');


    }

    
    
}












