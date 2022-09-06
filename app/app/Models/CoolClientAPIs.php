<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoolClientAPIs extends Model
{
    use HasFactory;

    protected $table = "kop-backend.cool_clients";
    protected $connection = 'KOP_backend';

    protected $guarded = [''];

    public function __construct(array $attributes = [])
    {
        $this->table;
        parent::__construct();
    }
}
