<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trix extends Model
{
    use HasFactory;
    protected $connection = 'mysql';
    protected $table = 'posts';
    protected $fillable = [
        'content'
    ];
}
