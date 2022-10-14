<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;
use App\Models\Product;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categories = Category::all();
        $users = User::all();
        $products = Product::all();
        $boxes = [
            [
                'title' => $categories->count(),
                'text' => 'Categories',
                'icon' => 'fas fa-inbox',
                'url' =>'',
                'theme' => 'primary',
            ],
            [
                'title' => $products->count(),
                'text' => 'Products',
                'icon' => 'fas fa-inbox',
                'url' => '',
                'theme' => 'primary',
            ],
            [
                'title' => $users->count(),
                'text' => 'Users',
                'icon' => 'fas fa-users',
                'url' => '#',
                'theme' => 'danger',
            ],
            
        ];
            
           
        
        return view('home', compact('boxes'))->with('title', 'Dashboard');
    }
}
