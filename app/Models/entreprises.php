<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class entreprises extends Model
{
    use HasFactory;
    protected $fillable = ['nom', 'fonction', 'description', 'lien_entreprise'];
}
