@extends('main')
@section('title', '| Wähl etwas aus')
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
            <div id="click-to-fade" class ="header-box">
				<span class ="text">Wähl etwas aus</span>	
            </div>
        </div>
    </div> 

    @include('partials._optionBoxes')

@endsection

 


@section('scripts')
   {{ html::script('js/scripts.js') }}
@endsection