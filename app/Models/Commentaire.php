<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Article;
use App\Models\Commentaire;
class Commentaire extends Model
{
    use HasFactory;

    protected $fillable=['commentaire','date','article_id','user_id','reply_to'];

    public function article(){
    	return $this->hasOne(Article::class);
    }

    public function user(){
    	return $this->belongsTo(User::class,'user_id');
    }

    public function reply(){
    	return $this->hasMany(Commentaire::class,'reply_to');
    }

    
}
