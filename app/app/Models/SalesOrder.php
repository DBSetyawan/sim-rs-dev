<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesOrder extends Model
{

    protected $table = "kristest.salesorderh";
    protected $connection = 'KOP_sync';

    public $timestamps = false;

    public function SalesInvoice()
    {
        return $this->hasMany(SalesInvoice::class, 'DocNo', 'SODocNo');
    }

    public function MasterCustomers()
    {
        return $this->belongsTo(Customer::class, 'CustomerCode', 'Code');
    }

    public function PurchaseOrder()
    {
        return $this->belongsTo(PurchaseOrder::class, 'PONo', 'DocNo');
    }

}
