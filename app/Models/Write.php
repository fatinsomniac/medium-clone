<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Write extends Model
{
    use HasFactory;

    protected $table = 'stories';
    protected $fillable = [
        'uuid', 'title', 'author', 'ur_story',
    ];
}
