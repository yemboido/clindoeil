<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;
use App\Models\Article;
use Auth;
class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  
        $articles=Article::latest()->paginate(10);
        return view('admin.articles.index',compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories=Categorie::all();
        return view('admin.articles.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = $request->validate([
            'titre' => 'required',
            'categorie_id' => 'required',
            'image' =>  'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'details' => 'required',
            
        ]);
        //dd($request['titre']);
        $input = $request->all();
        if ($image = $request->file('image')) {

            $destinationPath = 'storage/upload/image/';

            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();

            $image->move($destinationPath, $profileImage);

            $input['image'] = "$profileImage";
            $input['user_id']=Auth::user()->id;

        }


        Article::create($input);
        session()->flash('message', 'Article bien creer');
        return  redirect('articles')->with('message', 'Article bien creer');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $article=Article::find($id);
        //dd($article);
        
        return view('admin.articles.show',compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
         $article=Article::find($id);
         $categories=Categorie::latest()->get();
         return view('admin.articles.edit',compact('article','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

         $request->validate([
            'titre' => 'required',
            'categorie_id' => 'required',
            'image' =>  'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'details' => 'required',

        ]);

        $input = $request->all(); 
        if ($image = $request->file('image')) {

            $destinationPath = 'storage/upload/image/';

            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();

            $image->move($destinationPath, $profileImage);

            $input['image'] = "$profileImage";

        }else{

            unset($input['image']);
        }
        $article=Article::find($id);
        $article->update($input);
         session()->flash('message', 'Article bien modifier');
        return redirect('/articles')->with('message', 'Article Modifier');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Article::find($id)->delete();
   
         return redirect('/articles')->with('message', 'Article bien supprimer');
    }

     public function sortByCategorie($id)
    {  $articles=Article::where('categorie_id','=',$id)->paginate(10);
        $categories=Categorie::latest()->paginate(10);

        $infos=Article::latest()->take(5)->get();
        return view('index',compact('articles','categories','infos'));
    }
}
