<?php 
namespace App\Http\Controllers;
use App\Models\Category;

class HomeController extends Controller
{
    public function index()
    {
        // $cats = Category::all(); // SELECT * FROM category
        $cats = Category::paginate(5); // SELECT * FROM category
        // dd ($data);
        // echo 'HomeController->index';
        return view('home', compact('cats'));
    }

    public function about()
    {
        return view('about');
    }
}