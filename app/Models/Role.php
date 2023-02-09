<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    protected $primaryKey = 'RoleID';
    protected $guarded = ['RoleID'];

    public function users()
    {
        return $this->hasMany('App\Models\User', 'RoleID', 'RoleID');
    }
}
