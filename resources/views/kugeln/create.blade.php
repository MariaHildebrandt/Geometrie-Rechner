@extends('main')
@section('title', '| Kugel')
@section('stylesheets')
  
{{ Html::style('css/stylesheet.css') }}
    
@endsection
@section('content')
    <div class="row">
        <div class ="layout-postion">
            <header>
                <a href="/" >
					<h1>Geometrie Rechner</h1>
                </a>
            </header>
         </div>
    </div>
    <div class="row">
        <div class ="layout-postion">
            <div id="click-to-fade" class ="header-box" style="font-size:17px; padding:0 0 0 15px;">
				Gib einen Wert ein um Radius, Durchmesser, Umfang, Oberfläche und Volumen zu berechnen.
            </div>
        </div>
    </div>

    @include('partials._optionBoxes')
    
    
    <div class="row" id="fade-calculator">
        <div class ="layout-postion">
           <div class="row">
               <?php $options= ['Radius' => 'Radius', 'Durchmesser' => 'Durchmesser', 'Umfang' => 'Umfang'];?>
                {!! Form::open(['route' => 'kugeln.berechne' , 'data-parsley-validate' => '']) !!}
               
                <!--EingabeFormular für Kreisberechnungen-->
               
               <div class = "col-sm-4">
                    {{ Form::select('option',  $options ,null , ['class' => 'form-control', 'name' => 'option']) }}
               </div>
               <div class = "col-sm-4">
                    {{ Form::text('eingabe', null, array('class' => 'form-control', 'required' => 'required'))}}
               </div>
                <div class = "col-sm-4">
                    <input type="submit"  name="Berechnen" value="Berechnen" class = "button">
               </div>
                {!! Form::close() !!}
            </div>
        
       
        
        <?php if(isset($_GET['radius'])){ ?>
    
                
        <?php $radius = $_GET['radius'];
            $durchmesser = $_GET['durchmesser'];
            $umfang = $_GET['umfang'];
            $oberflache = $_GET['oberflache'];
            $volumen = $_GET['volumen'];?>
                 
            <table class="table table-condensed"><!--sonst:...-stripped-->
                <thead>
                    <tr>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Radius</td>
                        <td><?php echo $radius; ?> cm</td>
                        <td>Oberfläche</td>
                        <td><?php echo $oberflache; ?> cm</td>
                    </tr>
                    <tr>
                        <td>Umfang</td>
                        <td><?php echo $umfang; ?> cm</td>
                        <td>Volumen</td>
                        <td><?php echo $volumen; ?> cm²</td>
                    </tr>
                    <tr>
                        <td>Durchmesser</td>
                        <td><?php echo $durchmesser; ?> cm</td>
                    </tr>
                </tbody>
            </table>
        
         @include('partials._messages')

        <div clas="row">
           <?php 
            echo ('<a href="store?radius=' . $radius .
                  '&durchmesser='.$durchmesser. 
                  '&umfang=' .$umfang. 
                  '&oberflache='.$oberflache.
                  '&volumen='.$volumen.'">'
                      .'<div class ="button">'
                            ."Speichern"
                      .'</div>
                  </a>'
                 ); 
            ?>
            
            <a href="{{route('kugeln.index')}}" >
                <div class ="button" id="show-all">
                    Alle Kugelberechnungen anzeigen
                </div>
            </a>
        </div>
        <?php } ?>
            
    </div>
</div>
 
@endsection
@section('scripts')
   {{ html::script('js/scripts.js') }}
@endsection