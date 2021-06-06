<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class miss extends Model
{
    use HasFactory;
    protected $table = 'misses';
    public $timestamps = true;
    
    protected $fillable = [
        'titel',
        'content',
        'created_at'
    ];
}
