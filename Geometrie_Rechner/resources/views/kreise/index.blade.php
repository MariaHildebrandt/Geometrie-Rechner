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
                   <p style ="padding-left:15px;">Alle Kreisberechnungen</p>
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
                                <th>Flacheninhalt</th>
                                <th><!--columns for buttons--></th>
                            </thead>
                            <tbody>
                               
                        
                        @foreach ($kreise as $kreis) 
                        
                             <tr> 
                                <!--<th>{{$kreis->id}}</th>-->
                                <td>{{$kreis->radius}}</td>
                                <td>{{$kreis->durchmesser}}</td>
                                <td>{{$kreis->umfang}}</td>
                                <td>{{$kreis->flacheninhalt}}</td>	
                                <td>{!! Form::open(['route' => ['kreise.destroy', $kreis->id], 'method' => 'DELETE']) !!}
                                  {!! Form::submit('Delete', ['class' => 'button delete']) !!}</td>
                            

                            </tr>
                        @endforeach
                            </tbody>
                        </table>
                    </div>
                </div> 
            <div class ="text-center">
                {!! $kreise->links() !!}
            </div> <!--Pagination-->
                

@endsection
@section('scripts')
   {{ html::script('js/scripts.js') }}
@endsection