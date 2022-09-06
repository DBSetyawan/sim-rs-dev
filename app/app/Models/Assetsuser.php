<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assetsuser extends Model
{
    use HasFactory;

    public $table = "asset_users";
    protected $casts = [
        'design' => 'json',
    ];

    protected $guarded = [''];

    public function sortBy($field)
    {
        if ($this->sortField === $field) {
            $this->sortAsc = !$this->sortAsc;
        } else {
            $this->sortAsc = true;
        }

        $this->sortField = $field;
    }

    public static function search($query)
    {
        return empty($query) ? static::query()->where('assets_uid')
            : static::where('assets_uid')
                ->where(function($q) use ($query) {
                    $q->where('assets_uid', 'LIKE', '%'. $query . '%');
                });
    }

}
