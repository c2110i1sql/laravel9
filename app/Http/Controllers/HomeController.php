<?php 
namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $newProducts = Product::orderBy('id','DESC')->limit(8)->get();
        $randomProducts = Product::inRandomOrder()->limit(8)->get();
        $saleProducts = Product::orderBy('sale_price','ASC')->where('sale_price','>',0)->limit(8)->get();
        return view('home', compact('newProducts','saleProducts','randomProducts'));
    }

    public function about()
    {
        return view('about');
    }

    public function login()
    {
        return view('login-register');
    }

    public function check_login(Request $req)
    {
       $form_data = $req->only('email','password');
       $check = Auth::guard('cus')->attempt($form_data, $req->has('remember'));

       if ($check) {
            return redirect()->route('home.index')->with('yes', 'Chào mừng trở lại');
       }

       return redirect()->back()->with('no', 'Tài khoản hoặc mật khảu không chính xác');

    }

    public function logout()
    {
        Auth::guard('cus')->logout();
        return redirect()->route('home.login')->with('yes', 'Đăng xuất thành công, vui lòng đăng nhập lại');
    }

    public function profile()
    {
        $auth = Auth::guard('cus')->user();
        // dd ($auth);
        return view('home.profile', compact('auth'));
    }
 

    public function category(Category $cat)
    {
        $products = $cat->products()->paginate(12);
        return view('category', compact('cat','products'));
    }
    public function contact()
    {
        return view('contact');
    }

    public function productDetail(Product $product)
    {
        return view('product-detail', compact('product'));
    }
}