<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'roles';

    protected $fillable = [
        'role_name'
    ];

    public function account()
    {
        return $this->hasOne(Account::class,
        'role_id', 'role_id');
    }
}
