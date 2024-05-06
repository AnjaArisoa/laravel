<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donnechart extends Model
{
    use HasFactory;
    protected $table = 'donnechartexemple';
    protected $fillable = ['id', 'label', 'donne'];
}
