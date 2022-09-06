<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaterialCode extends Model
{

    protected $table = "kristest.mastermaterial";
    protected $connection = 'KOP_sync';
    // SELECT * FROM kristest.goodsissueh as g limit 100;
    public $timestamps = false;

    public function SalesOrder()
    {
        return $this->hasMany(SalesOrdersd::class, 'MaterialCode', 'Code');
    }

}
