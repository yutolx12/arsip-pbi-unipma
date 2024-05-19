<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Letter;

class PrintController extends Controller
{
    public function index()
    {
        $item = Letter::with(['department', 'sender'])->where('letter_type', 'Surat Masuk')->latest()->get();

        return view('pages.admin.letter.print-incoming', [
            'item' => $item
        ]);
    }

    public function outgoing()
    {
        $item = Letter::with(['department', 'sender'])->where('letter_type', 'Surat Keluar')->latest()->get();

        return view('pages.admin.letter.print-outgoing', [
            'item' => $item
        ]);
    }

    public function kriteria3()
    {
        $item = Letter::where('letter_type', 'Kriteria 3')->latest()->get();

        return view('pages.admin.letter.print-kriteria3', [
            'item' => $item
        ]);
    }
}
