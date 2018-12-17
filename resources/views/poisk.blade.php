@extends('layouts.base')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @foreach($products as $one)
                    <div>Продукт: <span>{{$one->name}}</span>
                     </div>
                    @endforeach
					@foreach($products_more as $one)
                    <div>Найдено совподений на странице продукты: <span>{{$one->name}}</span>
                     </div>
                    @endforeach
					<!-- @foreach($maintexts as $one)
                    <div>Найдено совподений на странице : <span>{{$one->name}}</span>
                     </div>
                    @endforeach
					@foreach($maintexts_more as $one)
                    <div>Описание продукта: <span>{{$one->name}}</span>
                     </div>
                    @endforeach -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
