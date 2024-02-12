<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'titre',
        'contenu',
        'resume',
        'auteur_id',
        'date_publication',
        'categorie_id',
        'tags',
        'image',
        'video_link',
        'statut',
    ];

    public function auteur()
    {
        return $this->belongsTo(User::class);
    }

    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }
}
