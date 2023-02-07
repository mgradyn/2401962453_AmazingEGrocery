<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    public $timestamps = false;

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
