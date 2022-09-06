<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SalesOrdersd extends Model
{

    /**
     * untuk mengambil material code untuk akses nama barang, qty barang.
     */
    protected $table = "kristest.salesorderd";
    protected $connection = 'KOP_sync';

    public $timestamps = false;

    public function MaterialCode()
    {
        return $this->belongsTo(MaterialCode::class, 'MaterialCode', 'Code');
    }

}
