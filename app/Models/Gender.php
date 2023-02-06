<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    use HasFactory;

    protected $table = 'genders';

    protected $fillable = [
        'gender_desc'
    ];

    public function account()
    {
        return $this->hasOne(Account::class,
        'gender_id', 'gender_id');
    }
}
