<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reward extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'campaign_id',
        'type',
        'points',
        'percentage',
    ];

    public function user()
    {
        return $this->hasMany(User::class);
    }


}
