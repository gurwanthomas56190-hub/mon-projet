<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'guid',
        'prenom',
        'nom',
        'email',
        'service_id',
    ];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}