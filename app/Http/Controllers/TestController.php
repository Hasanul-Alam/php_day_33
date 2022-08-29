<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Student;
use Illuminate\Http\Request;

class TestController extends Controller
{
    private $students;
    private $product;
    public function index()
    {
        $this->students = Student::getAllStudent();
        return view('test', ['students' => $this->students]);
    }

    private $products;
    public function about()
    {
        $this->products = Product::getAllProduct();
        return view('about', ['products' => $this->products]);
    }

    public function contact()
    {
        return view('contact');
    }

    public function detail($id)
    {
        $this->product = Product::getProductById($id);
        return view('product-detail', ['product' => $this->product]);
    }
}
