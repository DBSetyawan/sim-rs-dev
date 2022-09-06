<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table = "kristest.mastercustomer";
    protected $connection = 'KOP_sync';

    public $timestamps = false;

    public function SalesOrder()
    {
        return $this->belongsTo(SalesOrder::class, 'SODocNo', 'CustomerCode');
    }

}
