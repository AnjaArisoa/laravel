<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{

    protected $table = 'film';
    protected $fillable = ['idfilm', 'nomfilm'];
}
