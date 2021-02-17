<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable =['client', 'address', 'cost','paytype_id', 'deliver_date', 'deliver_hour', 'status_id',
     'deliveryuser_id', 'ordertype_id','friendshop_id'];


    public function deliveryuser(){
            return $this->belongsTo('App\User','deliveryuser_id','id');
    }

    public function friendshoplocal(){
        return $this->belongsTo('App\Friendshop','friendshop_id','id');
    }

    public function ordertype(){
        return $this->belongsTo('App\Ordertype','ordertype_id','id');
    }

    public function paytype(){
        return $this->belongsTo('App\Paytypes','paytype_id','id');
    }
}
