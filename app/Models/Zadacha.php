<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zadacha extends Model
{
    use HasFactory;
    protected $connection = 'mysql';
    protected $table = 'zadacha';
    protected $fillable = [
        'title',
        'description',
    ];
}
