<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Kugel;

class KugelnController extends Controller
{

    public function index()
    {
        $kugeln = Kugel::orderBy('radius', 'asc')->paginate(8);
        return view('kugeln.index')->withKugeln($kugeln); 
    }

    public function create()
    {
        
        return view('kugeln.create');
    }


    public function store(Request $request)
    {
        $radius =  $_GET['radius'];
        $durchmesser =  $_GET['durchmesser'];
        $umfang =  $_GET['umfang'];
        $oberflache =  $_GET['oberflache'];
        $volumen =  $_GET['volumen'];
   
        $kugel = new Kugel;
        $kugel->radius = $radius;
        $kugel->durchmesser = $durchmesser;
        $kugel->umfang = $umfang;
        $kugel->oberflache = $oberflache;
        $kugel->volumen = $volumen;
        $kugel->save();
        
        Session::flash('success', 'Eintrag gespeichert!');
        
        return redirect()->back();
    }


    public function show($id){/*...*/ }
    
    public function edit($id) {/*...*/ }
   
    public function update(Request $request, $id){/*...*/ }

    
    public function destroy($id)
    {
        $kugel = Kugel::find($id);
        $kugel->delete();
        Session::flash('success' , 'Eintrag gelöscht');
        return redirect()->route('kugeln.index');
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
        
        
        $builder = new \App\builder\KugelBuilder();
        $director = new \App\builder\Director($builder);
        $director->buildKugel($radius);
        $kugel = $director->getObject();
        
        $ergebnisse = new Kugel;
        $ergebnisse->radius = $kugel->getRadius();
        $ergebnisse->durchmesser = $kugel->getDurchmesser();
        $ergebnisse->umfang = $kugel->getUmfang();
        $ergebnisse->oberflache = $kugel->getKugelOberflache();
        $ergebnisse->volumen = $kugel->getKugelVolumen();
        
        return redirect()->route('kugeln.create', ['radius' => $ergebnisse->radius,'durchmesser'=> $ergebnisse->durchmesser,'umfang' => $ergebnisse->umfang,'oberflache' => $ergebnisse->oberflache , 'volumen' => $ergebnisse->volumen ]);
    }
    
}
