<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostsAPI extends Model
{
    use HasFactory;

    protected $table = "kop-backend.company_profiles";
    protected $connection = 'KOP_backend';

    protected $fillable = ['title'];

    public function __construct(array $attributes = [])
    {
        $this->table;
        parent::__construct();
    }
}
