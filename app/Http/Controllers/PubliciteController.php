<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publicite;
class PubliciteController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  
        $publicites=Publicite::latest()->paginate(10);
        return view('admin.publicite.index',compact('publicites'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    
        return view('admin.publicite.create');
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
            
            'image' =>  'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'dateDebut'=>'required',
            'dateFin'=>'required',
           
            
        ]);
        //dd($request['titre']);
        $input = $request->all();
        if ($image = $request->file('image')) {

            $destinationPath = 'storage/upload/publicite/';

            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();

            $image->move($destinationPath, $profileImage);

            $input['image'] = "$profileImage";
            

        }


        Publicite::create($input);
        
        return redirect()->route('publicite.index');
    
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
        $publicite=Publicite::find($id);
        //dd($Publicite);
        
        return view('admin.publicite.show',compact('publicite'));
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
         $publicite=Publicite::find($id);
         
         return view('admin.publicite.edit',compact('publicite'));
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
            
            'image' =>  'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'dateDebut'=>'required',
            'dateFin'=>'required',

        ]);

        $input = $request->all(); 
        if ($image = $request->file('image')) {

            $destinationPath = 'storage/upload/publicite/';

            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();

            $image->move($destinationPath, $profileImage);

            $input['image'] = "$profileImage";

        }else{

            unset($input['image']);
        }
        $Publicite=Publicite::find($id);
        $Publicite->update($input);
         session()->flash('message', 'Publicite bien modifier');
        return redirect('/publicite')->with('message', 'Publicite Modifier');
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
        Publicite::find($id)->delete();
   
         return redirect('/publicite')->with('message', 'Publicite bien supprimer');
    }
}
