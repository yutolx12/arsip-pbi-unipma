<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Department;
use App\Models\Letter;
use App\Models\Sender;

use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Storage;

class LetterController extends Controller
{

    public function index()
    {
        //
    }

    public function create()
    {
        // $departments = Department::all();
        // $senders = Sender::all();

        return view('pages.admin.letter.create', [
            // 'departments' => $departments,
            // 'senders' => $senders,
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'letter_no' => 'required',
            'letter_date' => 'required',
            'date_received' => 'required',
            'regarding' => 'required',
            'letter_file' => 'required|mimes:doc,pdf,docx,zip,xlsx|file|max:5000',
            'letter_type' => 'required',
        ]);

        if ($request->file('letter_file')) {
            $validatedData['letter_file'] = $request->file('letter_file')->store('assets/letter-file');
        }

        if ($validatedData['letter_type'] == 'Kriteria 1') {
            $redirect = 'kriteria-1';
        }

        if ($validatedData['letter_type'] == 'Kriteria 2') {
            $redirect = 'kriteria-2';
        }

        if ($validatedData['letter_type'] == 'Kriteria 3') {
            $redirect = 'kriteria-3';
        }

        if ($validatedData['letter_type'] == 'Kriteria 4') {
            $redirect = 'kriteria-4';
        }

        if ($validatedData['letter_type'] == 'Kriteria 5') {
            $redirect = 'kriteria-5';
        }

        if ($validatedData['letter_type'] == 'Kriteria 6') {
            $redirect = 'kriteria-6';
        }

        if ($validatedData['letter_type'] == 'Kriteria 7') {
            $redirect = 'kriteria-7';
        }

        if ($validatedData['letter_type'] == 'Kriteria 8') {
            $redirect = 'kriteria-8';
        }

        if ($validatedData['letter_type'] == 'Kriteria 9') {
            $redirect = 'kriteria-9';
        }
        // else {
        //     $redirect = 'surat-keluar';
        // }

        Letter::create($validatedData);

        return redirect()
            ->route($redirect)
            ->with('success', 'Sukses! 1 Data Berhasil Disimpan');
    }

    public function kriteria1_mail()
    {
        if (request()->ajax()) {
            $query = Letter::where('letter_type', 'Kriteria 1')->latest();

            return Datatables::of($query)
                ->addColumn('action', function ($item) {
                    return '
                        <a class="btn btn-success btn-xs" href="' . route('detail-surat', $item->id) . '">
                            <i class="fa fa-search-plus"></i> &nbsp; Detail
                        </a>
                        <a class="btn btn-primary btn-xs" href="' . route('letter.edit', $item->id) . '">
                            <i class="fas fa-edit"></i> &nbsp; Ubah
                        </a>
                        <form action="' . route('letter.destroy', $item->id) . '" method="POST" onsubmit="return confirm(' . "'Anda akan menghapus item ini dari situs anda?'" . ')">
                            ' . method_field('delete') . csrf_field() . '
                            <button class="btn btn-danger btn-xs">
                                <i class="far fa-trash-alt"></i> &nbsp; Hapus
                            </button>
                        </form>
                    ';
                })
                ->editColumn('post_status', function ($item) {
                    return $item->post_status == 'Published' ? '<div class="badge bg-green-soft text-green">' . $item->post_status . '</div>' : '<div class="badge bg-gray-200 text-dark">' . $item->post_status . '</div>';
                })
                ->addIndexColumn()
                ->removeColumn('id')
                ->rawColumns(['action', 'post_status'])
                ->make();
        }

        return view('pages.admin.letter.kriteria1');
    }

    public function kriteria2_mail()
    {
        if (request()->ajax()) {
            $query = Letter::where('letter_type', 'Kriteria 2')->latest()->get();

            return Datatables::of($query)
                ->addColumn('action', function ($item) {
                    return '
                        <a class="btn btn-success btn-xs" href="' . route('detail-surat', $item->id) . '">
                            <i class="fa fa-search-plus"></i> &nbsp; Detail
                        </a>
                        <a class="btn btn-primary btn-xs" href="' . route('letter.edit', $item->id) . '">
                            <i class="fas fa-edit"></i> &nbsp; Ubah
                        </a>
                        <form action="' . route('letter.destroy', $item->id) . '" method="POST" onsubmit="return confirm(' . "'Anda akan menghapus item ini dari situs anda?'" . ')">
                            ' . method_field('delete') . csrf_field() . '
                            <button class="btn btn-danger btn-xs">
                                <i class="far fa-trash-alt"></i> &nbsp; Hapus
                            </button>
                        </form>
                    ';
                })
                ->editColumn('post_status', function ($item) {
                    return $item->post_status == 'Published' ? '<div class="badge bg-green-soft text-green">' . $item->post_status . '</div>' : '<div class="badge bg-gray-200 text-dark">' . $item->post_status . '</div>';
                })
                ->addIndexColumn()
                ->removeColumn('id')
                ->rawColumns(['action', 'post_status'])
                ->make();
        }

        return view('pages.admin.letter.kriteria2');
    }

    public function kriteria3_mail()
    {
        if (request()->ajax()) {
            $query = Letter::where('letter_type', 'Kriteria 3')->latest()->get();

            return Datatables::of($query)
                ->addColumn('action', function ($item) {
                    return '
                        <a class="btn btn-success btn-xs" href="' . route('detail-surat', $item->id) . '">
                            <i class="fa fa-search-plus"></i> &nbsp; Detail
                        </a>
                        <a class="btn btn-primary btn-xs" href="' . route('letter.edit', $item->id) . '">
                            <i class="fas fa-edit"></i> &nbsp; Ubah
                        </a>
                        <form action="' . route('letter.destroy', $item->id) . '" method="POST" onsubmit="return confirm(' . "'Anda akan menghapus item ini dari situs anda?'" . ')">
                            ' . method_field('delete') . csrf_field() . '
                            <button class="btn btn-danger btn-xs">
                                <i class="far fa-trash-alt"></i> &nbsp; Hapus
                            </button>
                        </form>
                    ';
                })
                ->editColumn('post_status', function ($item) {
                    return $item->post_status == 'Published' ? '<div class="badge bg-green-soft text-green">' . $item->post_status . '</div>' : '<div class="badge bg-gray-200 text-dark">' . $item->post_status . '</div>';
                })
                ->addIndexColumn()
                ->removeColumn('id')
                ->rawColumns(['action', 'post_status'])
                ->make();
        }

        return view('pages.admin.letter.kriteria3');
    }

    public function kriteria4_mail()
    {
        if (request()->ajax()) {
            $query = Letter::where('letter_type', 'Kriteria 4')->latest()->get();

            return Datatables::of($query)
                ->addColumn('action', function ($item) {
                    return '
                        <a class="btn btn-success btn-xs" href="' . route('detail-surat', $item->id) . '">
                            <i class="fa fa-search-plus"></i> &nbsp; Detail
                        </a>
                        <a class="btn btn-primary btn-xs" href="' . route('letter.edit', $item->id) . '">
                            <i class="fas fa-edit"></i> &nbsp; Ubah
                        </a>
                        <form action="' . route('letter.destroy', $item->id) . '" method="POST" onsubmit="return confirm(' . "'Anda akan menghapus item ini dari situs anda?'" . ')">
                            ' . method_field('delete') . csrf_field() . '
                            <button class="btn btn-danger btn-xs">
                                <i class="far fa-trash-alt"></i> &nbsp; Hapus
                            </button>
                        </form>
                    ';
                })
                ->editColumn('post_status', function ($item) {
                    return $item->post_status == 'Published' ? '<div class="badge bg-green-soft text-green">' . $item->post_status . '</div>' : '<div class="badge bg-gray-200 text-dark">' . $item->post_status . '</div>';
                })
                ->addIndexColumn()
                ->removeColumn('id')
                ->rawColumns(['action', 'post_status'])
                ->make();
        }

        return view('pages.admin.letter.kriteria4');
    }

    public function kriteria5_mail()
    {
        if (request()->ajax()) {
            $query = Letter::where('letter_type', 'Kriteria 5')->latest()->get();

            return Datatables::of($query)
                ->addColumn('action', function ($item) {
                    return '
                        <a class="btn btn-success btn-xs" href="' . route('detail-surat', $item->id) . '">
                            <i class="fa fa-search-plus"></i> &nbsp; Detail
                        </a>
                        <a class="btn btn-primary btn-xs" href="' . route('letter.edit', $item->id) . '">
                            <i class="fas fa-edit"></i> &nbsp; Ubah
                        </a>
                        <form action="' . route('letter.destroy', $item->id) . '" method="POST" onsubmit="return confirm(' . "'Anda akan menghapus item ini dari situs anda?'" . ')">
                            ' . method_field('delete') . csrf_field() . '
                            <button class="btn btn-danger btn-xs">
                                <i class="far fa-trash-alt"></i> &nbsp; Hapus
                            </button>
                        </form>
                    ';
                })
                ->editColumn('post_status', function ($item) {
                    return $item->post_status == 'Published' ? '<div class="badge bg-green-soft text-green">' . $item->post_status . '</div>' : '<div class="badge bg-gray-200 text-dark">' . $item->post_status . '</div>';
                })
                ->addIndexColumn()
                ->removeColumn('id')
                ->rawColumns(['action', 'post_status'])
                ->make();
        }

        return view('pages.admin.letter.kriteria5');
    }

    public function kriteria6_mail()
    {
        if (request()->ajax()) {
            $query = Letter::where('letter_type', 'Kriteria 6')->latest()->get();

            return Datatables::of($query)
                ->addColumn('action', function ($item) {
                    return '
                        <a class="btn btn-success btn-xs" href="' . route('detail-surat', $item->id) . '">
                            <i class="fa fa-search-plus"></i> &nbsp; Detail
                        </a>
                        <a class="btn btn-primary btn-xs" href="' . route('letter.edit', $item->id) . '">
                            <i class="fas fa-edit"></i> &nbsp; Ubah
                        </a>
                        <form action="' . route('letter.destroy', $item->id) . '" method="POST" onsubmit="return confirm(' . "'Anda akan menghapus item ini dari situs anda?'" . ')">
                            ' . method_field('delete') . csrf_field() . '
                            <button class="btn btn-danger btn-xs">
                                <i class="far fa-trash-alt"></i> &nbsp; Hapus
                            </button>
                        </form>
                    ';
                })
                ->editColumn('post_status', function ($item) {
                    return $item->post_status == 'Published' ? '<div class="badge bg-green-soft text-green">' . $item->post_status . '</div>' : '<div class="badge bg-gray-200 text-dark">' . $item->post_status . '</div>';
                })
                ->addIndexColumn()
                ->removeColumn('id')
                ->rawColumns(['action', 'post_status'])
                ->make();
        }

        return view('pages.admin.letter.kriteria6');
    }

    public function kriteria7_mail()
    {
        if (request()->ajax()) {
            $query = Letter::where('letter_type', 'Kriteria 7')->latest()->get();

            return Datatables::of($query)
                ->addColumn('action', function ($item) {
                    return '
                        <a class="btn btn-success btn-xs" href="' . route('detail-surat', $item->id) . '">
                            <i class="fa fa-search-plus"></i> &nbsp; Detail
                        </a>
                        <a class="btn btn-primary btn-xs" href="' . route('letter.edit', $item->id) . '">
                            <i class="fas fa-edit"></i> &nbsp; Ubah
                        </a>
                        <form action="' . route('letter.destroy', $item->id) . '" method="POST" onsubmit="return confirm(' . "'Anda akan menghapus item ini dari situs anda?'" . ')">
                            ' . method_field('delete') . csrf_field() . '
                            <button class="btn btn-danger btn-xs">
                                <i class="far fa-trash-alt"></i> &nbsp; Hapus
                            </button>
                        </form>
                    ';
                })
                ->editColumn('post_status', function ($item) {
                    return $item->post_status == 'Published' ? '<div class="badge bg-green-soft text-green">' . $item->post_status . '</div>' : '<div class="badge bg-gray-200 text-dark">' . $item->post_status . '</div>';
                })
                ->addIndexColumn()
                ->removeColumn('id')
                ->rawColumns(['action', 'post_status'])
                ->make();
        }

        return view('pages.admin.letter.kriteria7');
    }

    public function kriteria8_mail()
    {
        if (request()->ajax()) {
            $query = Letter::where('letter_type', 'Kriteria 8')->latest()->get();

            return Datatables::of($query)
                ->addColumn('action', function ($item) {
                    return '
                        <a class="btn btn-success btn-xs" href="' . route('detail-surat', $item->id) . '">
                            <i class="fa fa-search-plus"></i> &nbsp; Detail
                        </a>
                        <a class="btn btn-primary btn-xs" href="' . route('letter.edit', $item->id) . '">
                            <i class="fas fa-edit"></i> &nbsp; Ubah
                        </a>
                        <form action="' . route('letter.destroy', $item->id) . '" method="POST" onsubmit="return confirm(' . "'Anda akan menghapus item ini dari situs anda?'" . ')">
                            ' . method_field('delete') . csrf_field() . '
                            <button class="btn btn-danger btn-xs">
                                <i class="far fa-trash-alt"></i> &nbsp; Hapus
                            </button>
                        </form>
                    ';
                })
                ->editColumn('post_status', function ($item) {
                    return $item->post_status == 'Published' ? '<div class="badge bg-green-soft text-green">' . $item->post_status . '</div>' : '<div class="badge bg-gray-200 text-dark">' . $item->post_status . '</div>';
                })
                ->addIndexColumn()
                ->removeColumn('id')
                ->rawColumns(['action', 'post_status'])
                ->make();
        }

        return view('pages.admin.letter.kriteria8');
    }

    public function kriteria9_mail()
    {
        if (request()->ajax()) {
            $query = Letter::where('letter_type', 'Kriteria 9')->latest()->get();

            return Datatables::of($query)
                ->addColumn('action', function ($item) {
                    return '
                        <a class="btn btn-success btn-xs" href="' . route('detail-surat', $item->id) . '">
                            <i class="fa fa-search-plus"></i> &nbsp; Detail
                        </a>
                        <a class="btn btn-primary btn-xs" href="' . route('letter.edit', $item->id) . '">
                            <i class="fas fa-edit"></i> &nbsp; Ubah
                        </a>
                        <form action="' . route('letter.destroy', $item->id) . '" method="POST" onsubmit="return confirm(' . "'Anda akan menghapus item ini dari situs anda?'" . ')">
                            ' . method_field('delete') . csrf_field() . '
                            <button class="btn btn-danger btn-xs">
                                <i class="far fa-trash-alt"></i> &nbsp; Hapus
                            </button>
                        </form>
                    ';
                })
                ->editColumn('post_status', function ($item) {
                    return $item->post_status == 'Published' ? '<div class="badge bg-green-soft text-green">' . $item->post_status . '</div>' : '<div class="badge bg-gray-200 text-dark">' . $item->post_status . '</div>';
                })
                ->addIndexColumn()
                ->removeColumn('id')
                ->rawColumns(['action', 'post_status'])
                ->make();
        }

        return view('pages.admin.letter.kriteria9');
    }

    public function show($id)
    {
        $item = Letter::findOrFail($id);

        return view('pages.admin.letter.show', [
            'item' => $item,
        ]);
    }

    public function edit($id)
    {
        $item = Letter::findOrFail($id);

        // $departments = Department::all();
        // $senders = Sender::all();

        return view('pages.admin.letter.edit', [
            // 'departments' => $departments,
            // 'senders' => $senders,
            'item' => $item,
        ]);
    }

    public function download_letter($id)
    {
        $item = Letter::findOrFail($id);

        return Storage::download($item->letter_file);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'letter_no' => 'required',
            'letter_date' => 'required',
            'date_received' => 'required',
            'regarding' => 'required',
            // 'department_id' => 'required',
            // 'sender_id' => 'required',
            'letter_file' => 'mimes:doc,pdf,docx,zip,xlsx|file|max:5000',
            'letter_type' => 'required',
        ]);

        $item = Letter::findOrFail($id);

        if ($request->file('letter_file')) {
            $validatedData['letter_file'] = $request->file('letter_file')->store('assets/letter-file');
        }

        if ($validatedData['letter_type'] == 'Kriteria 1') {
            $redirect = 'kriteria-1';
        }

        if ($validatedData['letter_type'] == 'Kriteria 2') {
            $redirect = 'kriteria-2';
        }

        if ($validatedData['letter_type'] == 'Kriteria 3') {
            $redirect = 'kriteria-3';
        }

        if ($validatedData['letter_type'] == 'Kriteria 4') {
            $redirect = 'kriteria-4';
        }

        if ($validatedData['letter_type'] == 'Kriteria 5') {
            $redirect = 'kriteria-5';
        }

        if ($validatedData['letter_type'] == 'Kriteria 6') {
            $redirect = 'kriteria-6';
        }

        if ($validatedData['letter_type'] == 'Kriteria 7') {
            $redirect = 'kriteria-7';
        }

        if ($validatedData['letter_type'] == 'Kriteria 8') {
            $redirect = 'kriteria-8';
        }

        if ($validatedData['letter_type'] == 'Kriteria 9') {
            $redirect = 'kriteria-9';
        }
        // else {
        //     $redirect = 'surat-keluar';
        // }

        $item->update($validatedData);

        return redirect()
            ->route($redirect)
            ->with('success', 'Sukses! 1 Data Berhasil Diubah');
    }

    public function destroy($id)
    {
        $item = Letter::findorFail($id);

        if ($item->letter_type == 'Kriteria 1') {
            $redirect = 'kriteria-1';
        }

        if ($item->letter_type == 'Kriteria 2') {
            $redirect = 'kriteria-2';
        }

        if ($item->letter_type == 'Kriteria 3') {
            $redirect = 'kriteria-3';
        }

        if ($item->letter_type == 'Kriteria 4') {
            $redirect = 'kriteria-4';
        }

        if ($item->letter_type == 'Kriteria 5') {
            $redirect = 'kriteria-5';
        }

        if ($item->letter_type == 'Kriteria 6') {
            $redirect = 'kriteria-6';
        }

        if ($item->letter_type == 'Kriteria 7') {
            $redirect = 'kriteria-7';
        }

        if ($item->letter_type == 'Kriteria 8') {
            $redirect = 'kriteria-8';
        }

        if ($item->letter_type == 'Kriteria 9') {
            $redirect = 'kriteria-9';
        }

        // else {
        //     $redirect = 'surat-keluar';
        // }

        Storage::delete($item->letter_file);

        $item->delete();

        return redirect()
            ->route($redirect)
            ->with('success', 'Sukses! 1 Data Berhasil Dihapus');
    }
}
