<?php 
namespace App\Http\Controllers;
use App\Models\Customer;
use App\Mail\ContactMail;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Mail;

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
       $check = auth('cus')->attempt($form_data, $req->has('remember'));

       if ($check) {
            return redirect()->route('home.index')->with('yes', 'Chào mừng trở lại');
       }

       return redirect()->back()->with('no', 'Tài khoản hoặc mật khảu không chính xác');

    }

    public function check_register(Request $req)
    {
        $form_data = $req->only('name','email','gender','address','phone');
        $form_data['password'] = bcrypt($req->password);
        if (Customer::create($form_data)) {
            return redirect()->route('home.login')->with('yes', 'Đăng ký thành công, bạn có thể đăng nhập');
        }
        return redirect()->back()->with('no', 'Đăng ký không thành công, hãy thử đăng ký lại thông tin');
    }
    public function logout()
    {
        auth('cus')->logout();
        return redirect()->route('home.login')->with('yes', 'Đăng xuất thành công, vui lòng đăng nhập lại');
    }

    public function profile()
    {
        $auth = auth('cus')->user();
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
        // dd (\Str::slug($product->name));
        return view('product-detail', compact('product'));
    }


    public function send_contact()
    {
        $name = request('name');
        $email = request('email');
        $subject = request('subject');
        $content = request('content');
        
        $send = Mail::to($email)->send(new ContactMail($name, $content, $subject));

        dd ($send);

    }
}