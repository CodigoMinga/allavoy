<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable =['client', 'address', 'cost', 'deliver_date', 'deliver_hour', 'deliveryuser_id'];
    

    public function deliveryuser(){
            return $this->belongsTo('App\User','deliveryuser_id','id');
    }   
}
