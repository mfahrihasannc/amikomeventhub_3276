<?php

namespace App\Http\Controllers;

use App\Models\Event; // <-- Wajib ditambahkan untuk memanggil database Event
use Illuminate\Http\Request;

class EventController extends Controller
{
    // Mengubah $slug menjadi $id agar cocok dengan routes/web.php Anda
    public function show($id)
    {
        // 1. Mengambil data event dari database berdasarkan ID
        $event = Event::findOrFail($id);

        // 2. Mengirimkan variabel $event ke halaman event-detail
        return view('event-detail', compact('event'));
    }

    public function checkout()
    {
        return view('checkout');
    }
}