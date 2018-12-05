<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public $fillable = ['body',	
	'status',	
	'user_id',
	'name',
	'surname',	
	'adress',	
	'telephone',	
	'description'
	];
}
