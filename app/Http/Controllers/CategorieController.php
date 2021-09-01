<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;
use App\Models\Article;
class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $categories=Categorie::latest()->paginate(10);
       // dd($categories);
        return view('admin.categorie.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categorie.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   $data = $request->validate([
            'libelle' => 'required|unique:categories',
            
        ]);
        Categorie::create($data);
          
        return redirect('categories')->with('message', 'Categorie bien creer');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $articles=Article::where('categorie_id','=',$id)->latest()->paginate();
        $categories=Categorie::latest()->paginate(10);
       
         return view('index',compact('articles','categories'));
        //
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
        $categorie=Categorie::find($id);
       
        return view('admin.categorie.edit',compact('categorie'));
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
         $data = $request->validate([
            'libelle' => 'required',
            
        ]);
        $categorie=Categorie::find($id);
       // dd($categorie);
        $categorie->update($data);

         session()->flash('message', 'Categorie bien creer');
        return redirect('/categories')->with('message', 'Categorie Modifier');

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
        Categorie::find($id)->delete();
   
         return redirect('/categories')->with('message', 'Categorie bien supprimer');
    }


    public function sortByCategorie($id){
    
       
         return redirect('/categories')->with('message', 'Categorie bien supprimer');
        
    }
}
