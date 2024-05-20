<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Letter;

class PrintController extends Controller
{
    public function kriteria1()
    {
        $item = Letter::where('letter_type', 'Kriteria 1')->latest()->get();

        return view('pages.admin.letter.print-kriteria1', [
            'item' => $item
        ]);
    }

    public function kriteria2()
    {
        $item = Letter::where('letter_type', 'Kriteria 2')->latest()->get();

        return view('pages.admin.letter.print-kriteria2', [
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

    public function kriteria4()
    {
        $item = Letter::where('letter_type', 'Kriteria 4')->latest()->get();

        return view('pages.admin.letter.print-kriteria4', [
            'item' => $item
        ]);
    }

    public function kriteria5()
    {
        $item = Letter::where('letter_type', 'Kriteria 5')->latest()->get();

        return view('pages.admin.letter.print-kriteria5', [
            'item' => $item
        ]);
    }

    public function kriteria6()
    {
        $item = Letter::where('letter_type', 'Kriteria 6')->latest()->get();

        return view('pages.admin.letter.print-kriteria6', [
            'item' => $item
        ]);
    }

    public function kriteria7()
    {
        $item = Letter::where('letter_type', 'Kriteria 7')->latest()->get();

        return view('pages.admin.letter.print-kriteria7', [
            'item' => $item
        ]);
    }

    public function kriteria8()
    {
        $item = Letter::where('letter_type', 'Kriteria 8')->latest()->get();

        return view('pages.admin.letter.print-kriteria8', [
            'item' => $item
        ]);
    }

    public function kriteria9()
    {
        $item = Letter::where('letter_type', 'Kriteria 9')->latest()->get();

        return view('pages.admin.letter.print-kriteria9', [
            'item' => $item
        ]);
    }
}
