<?php

namespace App\Models;

use App\Models\User;
use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone_extension', // Correspond à ta migration [cite: 580]
        'location',        // Correspond à ta migration [cite: 581]
    ];

    // Un service a plusieurs utilisateurs
    public function users()
    {
        return $this->hasMany(User::class);
    }
}
