<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class membres extends Model
{
    use HasFactory;
    protected $fillable =['nom', 'poste', 'commentaire', 'lien_facebook', 'lien_twitter', 'lien_whatsapp','lien_github', 'lien_gmail'];
}
