<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// quy tắc đặt tên bảng chuẩn trong laravel như sau
// lấy tên model => chữ thường => số nhiều
// VD: Category =-> category -> categories
// VD Product => products
// VD: OrderDetail => order_details
class Category extends Model 
{
    use HasFactory;
    
    protected $table = 'category';
}