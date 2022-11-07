<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chirp extends Model
{
    use HasFactory;

    // Enable mass assignment for message attribute only.
    protected $fillable = [
        'message',
    ];
}
