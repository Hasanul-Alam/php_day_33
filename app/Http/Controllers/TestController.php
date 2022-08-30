<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Student;
use Illuminate\Http\Request;

class TestController extends Controller
{
    private $students;
    private $product;
    private $fullName;
    private $firstNumber;
    private $lastNumber;
    private $result;
    private $i;
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

    public function fullName(Request $request)
    {
        $this->fullName = $request->first_name.' '.$request->last_name;
        return redirect('/contact')->with('message', $this->fullName);
    }

    public function series()
    {
        return view('series');
    }

    public function newSeries(Request $request)
    {
        $this->firstNumber = $request->first_number;
        $this->lastNumber = $request->last_number;
        for($this->i = $this->firstNumber; $this->i <= $this->lastNumber; $this->i++)
        {
            $this->result .= $this->i. ' ';
        }
        return redirect('/series')->with('message', $this->result);
    }

    public function calculator()
    {
        return view('calculator');
    }
}
