<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CareersAPI extends Model
{
    use HasFactory;

    protected $table = "kop-backend.careers_models";
    protected $connection = 'KOP_backend';

    protected $fillable = ['title'];

    public function __construct(array $attributes = [])
    {
        $this->table;
        parent::__construct();
    }
}
