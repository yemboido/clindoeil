<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Article;
class Categorie extends Model
{
    use HasFactory;
    protected $fillable=['libelle'],
    		  $table='categories';

    public function article(){
    	return $this->hasMany(Article::class);
    }
}
