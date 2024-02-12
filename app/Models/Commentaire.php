<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
    protected $fillable = [
        'article_id',
        'auteur_id',
        'contenu',
        'date_publication',
        'statut',
    ];

    public function article()
    {
        return $this->belongsTo(Article::class);
    }

    public function auteur()
    {
        return $this->belongsTo(User::class);
    }
}
