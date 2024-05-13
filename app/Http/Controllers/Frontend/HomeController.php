<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Blog;
use App\Models\Hero;
use App\Models\About;
use App\Models\Service;
use App\Models\Category;
use App\Models\Feedback;
use App\Mail\ContactMail;
use App\Models\TyperTitle;
use Illuminate\Http\Request;
use App\Models\PortfolioItem;
use App\Models\BlogSectionSetting;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Models\FeedbackSectionSetting;
use App\Models\PortfolioSectionSetting;
use App\Models\Team;

class HomeController extends Controller
{
    public function index(){

        $hero = Hero::first();
        $typerTitles = TyperTitle::all();
        $services = Service::all();
        $team = Team::all();
        $portfolioTitle = PortfolioSectionSetting::first();
        $about = About::first();
        $portfolioCategories = Category::all();
        $portfolioItems = PortfolioItem::all();
        $feedbacks = Feedback::all();
        $feedbackTitle = FeedbackSectionSetting::first();
        $blogs = Blog::latest()->take(5)->get();
        $blogTitle = BlogSectionSetting::first();
        
        

        return view('frontend.home', compact(
            'hero',
            'typerTitles',
            'services',
            'about',
            'portfolioTitle',
            'portfolioCategories',
            'portfolioItems',
            'feedbacks',
            'feedbackTitle',
            'blogs',
            'blogTitle',
            'team'
        ));
    }

    public function showPortfolio($id){
        $portfolio = PortfolioItem::findOrFail($id);
        return view('frontend.portfolio-details', compact('portfolio'));
    }

    public function showBlog($id)
    {
        $blog = Blog::findOrFail($id);
        
        //--------- FUNCTION UNTUK MEMUNCULKAN NEXT & PREVIOUS BLOG POST ---------// 
        $previousPost = Blog::where('id', '<', $blog->id)->orderBy('id', 'desc')->first();
        $nextPost = Blog::where('id', '>', $blog->id)->orderBy('id', 'asc')->first();
        return view('frontend.blog-details', compact('blog', 'previousPost', 'nextPost'));
    }

    public function blog()
    {
        $blogs = Blog::latest()->paginate(9);
        return view('frontend.blog', compact('blogs'));
    }

    public function contact(Request $request)
    {   
       $request->validate([
            'name' => ['required', 'max:200'],
            'subject' => ['required', 'max:300'],
            'email' => ['required', 'email'],
            'message' => ['required', 'max:2000'],
       ]);

       Mail::send(new ContactMail($request->all()));

       return response(['status' => 'success', 'message' => 'Mail Sended Successfully!']);

    }
}