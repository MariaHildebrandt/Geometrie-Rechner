<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Kreis;

class KreiseController extends Controller
{

    public function index()
    {
        $kreise = Kreis::orderBy('radius', 'asc')->paginate(8);
        return view('kreise.index')->withKreise($kreise); 
    }

    public function create()
    {
        
        return view('kreise.create');
    }


    public function store(Request $request)
    {
        $radius =  $_GET['radius'];
        $durchmesser =  $_GET['durchmesser'];
        $umfang =  $_GET['umfang'];
        $flacheninhalt =  $_GET['flacheninhalt'];
   
        $kreis = new Kreis;
        $kreis->radius = $radius;
        $kreis->durchmesser = $durchmesser;
        $kreis->umfang = $umfang;
        $kreis->flacheninhalt = $flacheninhalt;
        $kreis->save();
        
        Session::flash('success', 'Eintrag gespeichert!');
        
        return redirect()->back();
    }


    public function show($id){/*...*/ }
    
    public function edit($id) {/*...*/ }
   
    public function update(Request $request, $id){/*...*/ }

    
    public function destroy($id)
    {
        $kreis = Kreis::find($id);
        $kreis->delete();
        Session::flash('success' , 'Eintrag gelöscht');
        return redirect()->route('kreise.index');
    }
    
    public function berechne(Request $request)
    {
        
        /*option enthält radius, umfang oder durchmesser */
        $eingabe = $request['eingabe'];
        $option = $request->get('option');
        
        $validation = $this->validate($request, array(
            'eingabe' => 'required|numeric|min:0',
            'option' => 'required'
        ));
        
        /*
        *einagbe in für Builder in Radius umrechnen
        */
        
        if($option == "Durchmesser"){
            $radius = $eingabe/2;
        }
        elseif($option == "Umfang"){
            $durchmesser= $eingabe/pi();
            $radius = $durchmesser/2;
        }
        elseif($option == "Radius"){
            $radius = $eingabe;
        }
        
        
        $builder = new \App\builder\KreisBuilder();
        $director = new \App\builder\Director($builder);
        $director->buildKreis($radius);
        $kreis = $director->getObject();
        
        $ergebnisse = new Kreis;
        $ergebnisse->radius = $kreis->getRadius();
        $ergebnisse->durchmesser = $kreis->getDurchmesser();
        $ergebnisse->umfang = $kreis->getUmfang();
        $ergebnisse->flacheninhalt = $kreis->getFlacheninhalt();
        
        return redirect()->route('kreise.create', ['radius' => $ergebnisse->radius,'durchmesser'=> $ergebnisse->durchmesser,'umfang' => $ergebnisse->umfang,'flacheninhalt' => $ergebnisse->flacheninhalt ]);
    }
    
}
