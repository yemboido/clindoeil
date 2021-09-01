<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Article;

class AdminController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {	
    	$articles=Article::latest()->paginate(10);
        return view('admin.dashboard',compact('articles'));
    }
}
