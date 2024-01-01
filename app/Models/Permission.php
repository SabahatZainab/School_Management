<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Middlewares\PermissionMiddleware;

class Permission extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'guard_name','status',
    ];
}
