<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        $title = "Homepage";
        $active = "home";
        return view('homepage.index', compact('title', 'active'));
    }
    public function about()
    {
        $title = "tentang kami";
        $active = "about";
        return view('homepage.about', compact('title', 'active'));
    }
    public function kontak()
    {
        $title = "kontak kami";
        $active = "kontak";
        return view('homepage.kontak', compact('title', 'active'));
    }
    public function kategori()
    {
        $title = "kategori produk";
        $active = "kategori";
        return view('homepage.kategori', compact('title', 'active'));
    }
}
