<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;
    
    public function scopeFilter($query, array $filters){
        if ( $filters['tags'] ?? false ) {
            $query->where('tags', 'like', '%' . $filters['tags'] . '%');
        }

        if ( $filters['search'] ?? false ) {
            $query->where('title', 'like', '%' . $filters['search'] . '%')
                ->orWhere('company', 'like', '%' . $filters['search'] . '%')
                ->orWhere('location', 'like', '%' . $filters['search'] . '%');
        }

    }
}
