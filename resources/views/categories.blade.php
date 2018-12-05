@extends('layouts.base')

@section('script')
@parent
  <script src="{{asset('/js/modal.js')}}"></script>
@endsection



@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
@foreach ($cats as $cat)

<h2 class="stext_h1"> {{$cat -> name}} </h2>

    @foreach ($cat->products()->get() as $one)
    <h4 class="item_h1">{{$one->name}}</h4>
	@if($one->picture != '')
	<div class="area row">
	    <div style="padding:0" class="col-md-6">
	       <img class="img-responsive link_img" width="250px" src="{{asset('uploads/'. $one->picture)}}" />
	    </div>
	    <div style="padding:0" class="col-md-6">
        <div class="stext_p">
            {!!$one->body!!}
        </div>
		
	         <a data-id="{{$one->id}}" href="#" class="add_card prod_more" data-id = "{{$one->id}}">Подробнее</a>
	         <br><br><a href="{{asset('basket/add/'.$one->id)}}" class="btn btn-primary add_card" data-id = "{{$one->id}}">Добавить в корзину</a>
	    </div>
	</div><br><br>
	
		
	@endif
	

	@endforeach
	

@endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


