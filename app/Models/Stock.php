<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;

    protected $fillable = [
        'blood_group',
        'quantity',
        'expiry_date',
        // Ajoutez ici d'autres colonnes de votre modèle Stock
    ];

    protected $casts = [
        'expiry_date' => 'date',
    ];
}
