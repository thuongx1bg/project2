<?php

namespace App\Http\Controllers\UserController;

use App\Http\Controllers\Controller;
use App\Http\Controllers\front\view;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        return view('front-end.contents.catergory');
    }
}
