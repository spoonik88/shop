<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    @foreach ($products as $one)
    <a href="{{asset('products/' $.one->id)}}" >{{$.one->name}}</a> 
    {{}}
    @endforeach
     @foreach ($products_more as $one)
    <a href="{{asset('products/' $.one->id)}}" >{{$.one->name}}</a> 
    {{}}
    @endforeach

    @foreach ($maintexts as $one)
    <a href="{{asset('products/' $.one->id)}}" >{{$.one->name}}</a> 
    {{}}
    @endforeach
     @foreach ($maintexts_more as $one)
    <a href="{{asset('product/' $.one->id)}}" >{{$.one->name}}</a> 
    {{}}
    @endforeach
}
