<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function show($slug)
    {
        return view('event-detail', compact('slug'));
    }

    public function checkout()
    {
        return view('checkout');
    }
}