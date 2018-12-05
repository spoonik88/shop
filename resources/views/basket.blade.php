@extends('layouts.base')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header stext_h1">Мои заказы</div>
				<form method="post" action="{{asset('order')}}">
					{!!csrf_field()!!}
              

				<table class="table table-bordered table-striped">
				   <tr class="text-center">
				   				   <td> Изображение </td>
				   <td> Наименование </td>
				   <td> Цена </td>
				   <td> <span id="value"> Количество </span></td>
				   <td> Сумма </td>
				    <td> Действие</td>
				   </tr>
				   @foreach($arr as $key=>$value)
				   
				   @php
				   $summa=$products[$key]->price * $value;
				   @endphp
				   
				   <tr class="text-center">
				   <td>	
				   @if($products[$key]->picture != '')
		<img src="{{asset('uploads/'. $products[$key]->picture)}}" />
	@endif  </td>
				   <td> {{$products[$key]->name}} </td>
				   <td> {{$products[$key]->price}} </td>
				   <td> <span id="value_{{$key}}"> 
				   <input style="width:45px;" type="number"
				   name = "{{$key}}"
				   value = "{{$value}}"/>
				   </span></td>
				   <td> {{$summa}} </td>
                       <td><a class="glyphicon glyphicon-remove" href="{{asset('basket/delete/'. $key)}}"></a></td>
				
				</tr>
				@endforeach
				
                </table>
				
				
				
				<div class="form-group">
				
      <div class="form-row">
         <div class="col-md-6">
         <input autofocus type="text" name="name" class="form-control" placeholder="Имя">
		 @if ($errors->has('name'))
			 <span class="help-block"><strong style="color:red;">{{$errors->first('name')}}</strong></span>
		 @endif
    </div>
    <div class="col-md-6">
       <input type="text" name="surname" class="form-control" placeholder="Фамилия">
    </div>
	<div class="col-md-6">
       <br><input type="adress" name="adress" class="form-control"  placeholder="Введите ваш адрес">
	   	 @if ($errors->has('adress'))
			 <span class="help-block"><strong style="color:red;">{{$errors->first('adress')}}</strong></span>
		 @endif
    </div>
	<div class="col-md-6">
       <br><input type="text" name="telephone" class="form-control"  placeholder="Введите ваш номер телефона">
	    @if ($errors->has('telephone'))
			 <span class="help-block"><strong style="color:red;">{{$errors->first('telephone')}}</strong></span>
		 @endif
    </div>
	
	<div class="col-md-6">
       <br><textarea type="text" name="description" class="form-control" placeholder="Заметки" rows="3"></textarea>
    </div>
	
	<div class="col-md-12 text-center">
       <br><button type="submit" class="btn btn-primary">Заказать</button>  
    </div>
	     
  </div>

      
	  
      
      

  </div>
  

        </form>
                <div class="card-body">


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
