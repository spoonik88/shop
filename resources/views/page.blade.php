@extends('layouts.base')
	@section('styles')
	@parent
	
		   <link rel="stylesheet" type="text/css" href="{{asset('/css/page.css')}}">
	 
	@endsection
@section('content')

                   
             <div class="row section_text stext">
                   
                    <div class="col-md-12">
                   
							{!!$obj->body!!}
                         
                    </div>
                    
                </div>

  
                    
             
@endsection