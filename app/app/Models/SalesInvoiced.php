<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SalesInvoiced extends Model
{

    /**
     * untuk mengambil material code untuk akses nama barang, qty barang.
     */
    protected $table = "kristest.salesinvoiced";
    protected $connection = 'KOP_sync';

    public $timestamps = false;

    public function MaterialCode()
    {
        return $this->belongsTo(MaterialCode::class, 'MaterialCode', 'Code');
    }

    public function _MethodstaticMaterialCode()
    {
        return $this->belongsTo(MaterialCode::class, 'MaterialCode', 'Code');
    }

    public function mcode()
    {
        return $this->belongsTo(MaterialCode::class, 'MaterialCode', 'Code');
    }

    // public function SalesInvoice()
    // {
    //     return $this->belongsTo(SalesInvoice::class, 'DocNo');
    // }

}
