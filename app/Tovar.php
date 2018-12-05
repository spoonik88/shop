<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;

use Illuminate\Database\Eloquent\SoftDeletes;

class Tovar extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'tovar';
    
    protected $fillable = [
          'name',
          'body',
          'picture',
          'category_id'
    ];
    

    public static function boot()
    {
        parent::boot();

        Tovar::observe(new UserActionsObserver);
    }
    
    public function category()
    {
        return $this->hasOne('App\Category', 'id', 'category_id');
    }


    
    
    
}