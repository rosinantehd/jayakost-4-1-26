<?php

namespace App\Http\Controllers;

use App\Models\Gallery;

class GalleryController extends Controller
{
    public function index()
    {
        $blokA = Gallery::where('blok', 'A')->orderBy('order_index')->get();
        $blokB = Gallery::where('blok', 'B')->orderBy('order_index')->get();
        $blokC = Gallery::where('blok', 'C')->orderBy('order_index')->get();

        return view('gallery', compact('blokA', 'blokB', 'blokC'));
    }

    public function publicIndex()
    {
        return $this->index();
    }
}
