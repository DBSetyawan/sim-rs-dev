<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VmAPIs extends Model
{
    use HasFactory;

    protected $table = "kop-backend.vmissions";
    protected $connection = 'KOP_backend';

    protected $guarded = [''];

    public function __construct(array $attributes = [])
    {
        $this->table;
        parent::__construct();
    }
}
