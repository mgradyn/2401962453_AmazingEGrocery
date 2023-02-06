<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $table = 'items';

    protected $fillable = [
        'item_name',
        'item_desc',
        'price'
    ];

    public function order()
    {
        return $this->hasOne(Role::class, 'item_id', 'item_id');
    }
}
