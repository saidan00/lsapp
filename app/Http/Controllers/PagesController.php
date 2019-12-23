<?php

namespace App\Http\Controllers;

class PagesController extends Controller {
    public function index() {
        $title = 'Welcome to Jay\'s Playzone';
        return view('pages.index')->with('title', $title); // 1st way
    }

    public function about() {
        $title = 'About Jay\'s Playzone';
        return view('pages.about', compact('title')); // 2nd way
    }

    public function services() {
        $data = [
            'title' => 'Services',
            'services' => ['Son Goku', 'Son Gohan', 'Son Goten'],
        ];
        return view('pages.services')->with($data);
    }
}
