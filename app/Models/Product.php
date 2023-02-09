<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $primaryKey = 'ProductID';
    protected $guarded = ['ProductID'];

    public function scopeFilter($query, array $filters) //untuk search
    {
        $query->when($filters['search'] ?? false, function($query, $search){
            return $query->where('name', 'like', '%' . $search . '%')
            //kalau mau berdasarkan isi deskripsi product juga, uncomment yg bawah
            ->orWhere('detail', 'like', '%' . $search . '%');
        });
    }
}
