<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $title = 'Wellcome to Laravel!';
        //return view('pages.index', compact('title'));
        return view('pages.index')->with ('title',$title);
    }

    public function about()
    {
        return view('pages.about');
    }

    public function services()
    {
        $data = array(
            'title' => 'services',
            'services' => ['web design', 'programing', 'sql'],
        );
        return view('pages.services')->with ($data);
    }

    public function dashboard()
    {
        return view('pages.dashboard');
    }
}
