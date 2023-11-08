<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    //
    public function index(){
        $categories = Category::all();
        $users = User::all();
        return view("category.category",compact("categories","users"));
    }

    public function form(){
        return view("category.categoryForm");
    }

    public function store(request $request){
        $categories = Category::all();
        $users = User::all();
        $request->validate([
            'category_name' => 'required|max:255',
          ]);
        $request['user_id'] = Auth::user()->id;
        Category::create($request->all());

        return redirect()->route('dashboard')->with('success','');  
    }
}
