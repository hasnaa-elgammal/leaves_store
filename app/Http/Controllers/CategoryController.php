<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=Category::select('categories.name')->get();
        return $categories;
    }


    public function HomeScreenCategories()
    {
        $categories=Category::all()->random(3);
        return $categories;
    }

   
}
