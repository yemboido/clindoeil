<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;
use App\Models\Article;
use App\Models\Publicite;
use App\Models\Commentaire;
class AccueilController extends Controller
{
    //

    public function index(){
    	$categories=Categorie::latest()->paginate(10);
    	$articles=Article::latest()->paginate(10);
        $infos=Article::latest()->paginate(10);
        $publicites=Publicite::where('dateFin','>=',date('Y-m-d'))->take(1); 
        //dd($articles);
    	return view('index',compact('categories','articles','infos','publicites'));
    }

   
    public function lireArticle($id){
        $article=Article::find($id);
        $categories=Categorie::latest()->paginate(10);
        $commentaires=Commentaire::where('article_id','=',$article->id)->latest()->paginate(10);
        $infos=Article::latest()->paginate(10);
        return view('index.lireArticle',compact('article','categories','commentaires','infos'));
    }
}
