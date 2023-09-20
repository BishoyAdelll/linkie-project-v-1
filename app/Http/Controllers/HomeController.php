<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Client;
use App\Models\Project;
use App\Models\Testemonial;
use App\Models\Team;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function index(){
        $Blogs=Blog::All();
        $Clints=Client::All();
        $Projects=Project::All();
        $Testimonials=Testemonial::All();
        $Teams=Team::All();
        return view('layouts.master',compact('Blogs','Clints','Testimonials','Projects','Teams'));
    }
}
