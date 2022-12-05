<?php
namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $cats = Category::paginate(5); // SELECT * FROM category
        // dd ($data);
        // echo 'HomeController->index';
        return view('admin.category.index', compact('cats'));
    }

    public function create ()
    {
        return view('admin.category.create');
    }

    public function store(Request $req)
    {
        $form_data = $req->all('name','status');

        Category::create($form_data); // INSERT INTO category.....
        return redirect()->route('category.index');
    }
}
