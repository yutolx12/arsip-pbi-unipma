<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Letter;

class DashboardController extends Controller
{
    public function index()
    {
        $kriteria1 = Letter::where('letter_type', 'Kriteria 1')->get()->count();
        $kriteria2 = Letter::where('letter_type', 'Kriteria 2')->get()->count();
        $kriteria3 = Letter::where('letter_type', 'Kriteria 3')->get()->count();
        $kriteria4 = Letter::where('letter_type', 'Kriteria 4')->get()->count();
        $kriteria5 = Letter::where('letter_type', 'Kriteria 5')->get()->count();
        $kriteria6 = Letter::where('letter_type', 'Kriteria 6')->get()->count();
        $kriteria7 = Letter::where('letter_type', 'Kriteria 7')->get()->count();
        $kriteria8 = Letter::where('letter_type', 'Kriteria 8')->get()->count();
        $kriteria9 = Letter::where('letter_type', 'Kriteria 9')->get()->count();


        return view('pages.admin.dashboard', [
            'kriteria1' => $kriteria1,
            'kriteria2' => $kriteria2,
            'kriteria3' => $kriteria3,
            'kriteria4' => $kriteria4,
            'kriteria5' => $kriteria5,
            'kriteria6' => $kriteria6,
            'kriteria7' => $kriteria7,
            'kriteria8' => $kriteria8,
            'kriteria9' => $kriteria9
        ]);
    }
}
