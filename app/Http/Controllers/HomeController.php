<?php 
namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

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

    public function login()
    {
        return view('login');
    }

    public function check_login(Request $req)
    {
        dd ($req->email, $req->password);
    }
}