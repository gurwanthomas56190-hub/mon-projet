<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',  
        'file_path', 
        'size', 
        'user_id',
    ];

    // Un document appartient à un utilisateur (son auteur)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
