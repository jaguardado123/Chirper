<?php

namespace App\Models;

use App\Events\ChirpCreated;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chirp extends Model
{
    use HasFactory;

    // Enable mass assignment for message attribute only.
    protected $fillable = [
        'message',
    ];

    // dispatch an event when a chirp is created.
    protected $dispatchesEvents = [
        'created' => ChirpCreated::class,
    ];

    // Defines a relationship between chirp and user.
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
