<?php

namespace App\Http\Controllers\Admin;


use App\Models\User;
use App\Models\Admin;
use App\Models\Service;
use App\Models\Category;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index(){
        $totalAdmins = User::count();
        $totalCategory = Category::count();
        $totalService = Service::count();
        $blogCategory = BlogCategory::count();
        return view('admin.dashboard',compact('totalAdmins','totalCategory','totalService','blogCategory'));
    }
}