<?php //app/Models/Sanpham.php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class SanPham extends Model {
   use HasFactory;
   protected $table ="sanpham"; 
   public $primaryKey = "id";
   public $timestamps = true;  
   protected $fillable = ['id', 'tensp', 'giasp', 'solanxem', 'hot', 'mota', 'hinh', 'ngay', 'idLoai'];
   protected $dates = ['ngay'];
   protected $attributes= ['solanxem'=>0, 'hot'=>0, 'hinh'=>''];  
}