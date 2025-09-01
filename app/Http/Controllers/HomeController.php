<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slide;
use App\Models\Content;
use App\Models\TrendingProject;
use App\Models\RecentProperty;


class HomeController extends Controller
{
    public function index()
    {
        $slides = Slide::all();
        $contentItems = Content::all();
        $projects = TrendingProject::all();
        $properties = RecentProperty::all();

        return view('frontend.index', compact('slides','contentItems','projects','properties'));
    
    }
}
