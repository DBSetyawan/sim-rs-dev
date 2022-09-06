<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GoodIssue extends Model
{

    protected $table = "kristest.goodsissueh";
    protected $connection = 'KOP_sync';
    // SELECT * FROM kristest.goodsissueh as g limit 100;
    public $timestamps = false;

    public function SalesOrder()
    {
        return $this->hasMany(SalesInvoice::class, 'GIDocNo', 'DocNo');
    }

}
