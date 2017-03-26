@extends('main')
@section('title', '| Home')
@section('stylesheets')
  
{{ Html::style('css/stylesheet.css') }}
    
@endsection
@section('content')
     <div class="row">
			<!--<div class="col-lg-8 col-lg-offset-2">-->
            <div class ="layout-postion">
				<header>
                    <a href="/" >
					<h1>Geometrie Rechner</h1>
                        </a>
				</header>
			</div>
		</div>
		<div class="row">
			<!--<div class="col-lg-8 col-lg-offset-2">-->
            <div class ="layout-postion">
				<div id="click-to-fade" class ="header-box" style="font-size:17px;">
                   <p style ="padding-left:15px;">Alle Kugelberechnungen</p>
				</div>
			</div>
		</div>
        @include('partials._optionBoxes')

                
                <div class="row" id="fade-table">
                    <div class="layout-postion">
                        <table class = "table table-condensed">
                            <thead>
                                <!--<th>#</th>-->
                                <th>Radius</th>
                                <th>Durchmesser</th>
                                <th>Umfang</th>
                                <th>Oberfläche</th>
                                <th>Volumen</th>
                                <th><!--columns for buttons--></th>
                            </thead>
                            <tbody>
                               
                        
                        @foreach ($kugeln as $kugel) 
                        
                             <tr> 
                                <!--<th>{{$kugel->id}}</th>-->
                                <td>{{$kugel->radius}}</td>
                                <td>{{$kugel->durchmesser}}</td>
                                <td>{{$kugel->umfang}}</td>
                                <td>{{$kugel->oberflache}}</td>
                                <td>{{$kugel->volumen}}</td>	
                                <td>{!! Form::open(['route' => ['kugeln.destroy', $kugel->id], 'method' => 'DELETE']) !!}
                                  {!! Form::submit('Delete', ['class' => 'button delete']) !!}</td>
                            

                            </tr>
                        @endforeach
                            </tbody>
                        </table>
                    </div>
                </div> 
            <div class ="text-center">
                {!! $kugeln->links() !!}
            </div> <!--Pagination-->
                

@endsection
@section('scripts')
   {{ html::script('js/scripts.js') }}
@endsection