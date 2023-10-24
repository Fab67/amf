<?php

namespace App\Models;

use App\Models\User;
use App\Models\Categorie;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory;
    protected $fillable=[
        'titre',
        'aperçue',
        'titre_p1',
        'p1',
        'titre_p2',
        'p2',
        'titre_p3',
        'p3',
        'titre_p4',
        'p4',
        'titre_p5',
        'p5',
        'titre_p6',
        'p6',
        'titre_p7',
        'p7',
        'titre_p8',
        'p8',
        'titre_im1',
        'im1',
        'titre_im2',
        'im2',
        'user_id',
        'categorie_id',
    ];

    public function categorie(){
        return $this->belongsTo(Categorie::class);
    }
    
    public function user(){
        return $this->belongsTo(User::class);
    }
}
