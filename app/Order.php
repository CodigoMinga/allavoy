<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable =['client', 'address', 'cost', 'deliver_date', 'deliver_hour'];
}
