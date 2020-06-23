<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable =['client', 'address', 'cost', 'deliver_date', 'deliver_hour', 'enable',
     'deliveryuser_id', 'order_type','friendshop_id'];
    

    public function deliveryuser(){
            return $this->belongsTo('App\User','deliveryuser_id','id');
    }   
    public function friendshoplocal(){
        return $this->belongsTo('App\User','friendshop_id','id');
} 
}
