<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Commentaire;
use Auth;
class CommentaireController extends Controller
{
    //
    public function store(Request $request)
    {
        //
        $data = $request->validate([
            'commentaire' => 'required',
           
            
        ]);
       // dd($request['article_id']);
        
        Commentaire::create([
        	'commentaire'=>$request['commentaire'],
        	'user_id'=>Auth::user()->id,
        	'article_id'=>$request['article_id']
        ]);
        session()->flash('message', 'Commentaire bien creer');
        return  redirect('index')->with('message', 'Article bien creer');
    
    }

     public function reply(Request $request,$reply_to)
    {
        //

        $data = $request->validate([
            'commentaire' => 'required',
           
            
        ]);
       // dd($request['article_id']);
        
        Commentaire::create([
        	'commentaire'=>$request['commentaire'],
        	'user_id'=>Auth::user()->id,
        	'article_id'=>$request['article_id'],
        	'reply_to'=>$reply_to
        ]);
        session()->flash('message', 'Commentaire bien creer');
        return  redirect('/')->with('message', 'Article bien creer');
    
    }
}
