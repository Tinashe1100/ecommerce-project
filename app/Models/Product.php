<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    // user and products relationships
    public function user()
    {
        return $this->belongsTo(User::find());
    }
    // categories and products relationships
    public function category()
    {
        return $this->belongsTo(AllCategory::find());
    }

    public function scopeFilter($query, array $filters)
    {

        if ($filters['category'] ?? false) {
            if ($filters['category'] ?? false) {
                $query->where('category', 'like', '%' . request('category') . '%');
            }
        }

        if ($filters['search'] ?? false) {
            $query->where('name', 'like', '%' . request('search') . '%');
        }
    }
}
