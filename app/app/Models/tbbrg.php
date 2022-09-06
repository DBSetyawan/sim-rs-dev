<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbbrg extends Model
{

    protected $table = "tb_barang";
    protected $guarded = [];
    public $timestamps = true;
     protected $primaryKey = 'id'; // or null

    public $incrementing = true;

}
