<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $title = 'Wellcome to Laravel!';
        return view('pages.index')->with ('title',$title);
    }

    public function about()
    {
        return view('pages.about');
    }

    public function services()
    {
        $data = array(
            'title' => 'Services',
            'services' => ['Service 1', 'Service 2', 'Service 3', 'Service 4'],
        );
        return view('pages.services')->with ($data);
    }
}
