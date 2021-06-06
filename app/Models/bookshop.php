<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class bookshop extends Model
{
    use HasFactory;
    protected $table = 'bookshops';
    public $timestamps = true;

    protected $fillable = [
        'titel',
        'author',
        'created_at'
    ];

}
