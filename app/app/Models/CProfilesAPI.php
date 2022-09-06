<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CProfilesAPI extends Model
{
    use HasFactory;

    protected $table = "kop-backend.company_profiles";
    protected $connection = 'KOP_backend';

    protected $guarded = [''];

    public function __construct(array $attributes = [])
    {
        $this->table;
        parent::__construct();
    }
}
