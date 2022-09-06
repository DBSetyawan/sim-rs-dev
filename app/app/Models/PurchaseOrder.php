<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseOrder extends Model
{

    protected $table = "kristest.purchaseorderh";
    protected $connection = 'KOP_sync';

    public $timestamps = false;

    public function SalesOrder()
    {
        return $this->hasMany(SalesOrder::class, 'DOcNo', 'PONo');
    }

}
