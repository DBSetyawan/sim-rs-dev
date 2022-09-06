<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesInvoice extends Model
{

    protected $table = "kristest.salesinvoiceh";
    protected $connection = 'KOP_sync';

    public $timestamps = false;

    public function SalesOrder()
    {
        return $this->belongsTo(SalesOrder::class, 'SODocNo', 'DocNo');
    }

    public function MasterGoodissue()
    {
        return $this->belongsTo(GoodIssue::class, 'GIDocNo', 'DocNo');
    }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                
}
