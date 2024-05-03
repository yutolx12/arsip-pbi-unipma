@extends('layouts.admin')

@section('title')
    Detail Dokumen
@endsection

@section('container')
    <main>
        <header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
            <div class="container-fluid px-4">
                <div class="page-header-content">
                    <div class="row align-items-center justify-content-between pt-3">
                        <div class="col-auto mb-3">
                            <h1 class="page-header-title">
                                <div class="page-header-icon"><i data-feather="file-text"></i></div>
                                Detail Dokumen
                            </h1>
                        </div>
                        <div class="col-12 col-xl-auto mb-3">
                            <button class="btn btn-sm btn-light text-primary" onclick="javascript:window.history.back();">
                                <i class="me-1" data-feather="arrow-left"></i>
                                Kembali Ke Semua Artikel
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main page content-->
        <div class="container-fluid px-4">
            <div class="row gx-4">
                <div class="col-lg-7">
                    <div class="card mb-4">
                        <div class="card-header">Detail Dokumen</div>
                        <div class="card-body">
                            <div class="mb-3 row">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th>Tipe Dokumen</th>
                                            <td>{{ $item->letter_type }}</td>
                                        </tr>
                                        <tr>
                                            <th>Nama Dokumen</th>
                                            <td>{{ $item->letter_no }}</td>
                                        </tr>
                                        <tr>
                                            <th>Tanggal Dibuat</th>
                                            <td>{{ $item->letter_date }}</td>
                                        </tr>
                                        <tr>
                                            <th>Tanggal Edit</th>
                                            <td>{{ $item->date_received }}</td>
                                        </tr>
                                        <tr>
                                            <th>Perihal</th>
                                            <td>{{ $item->regarding }}</td>
                                        </tr>
                                        <tr>
                                            <th>Penanggung Jawab</th>
                                            <td>{{ $item->sender->name }}</td>
                                        </tr>
                                        <tr>
                                            <th>Departemen</th>
                                            <td>{{ $item->department->name }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="card mb-4">
                        <div class="card-header">
                            File Dokumen -
                            <a href="{{ route('download-surat', $item->id) }}" class="btn btn-sm btn-primary">
                                <i class="fa fa-download" aria-hidden="true"></i> &nbsp; Download Dokumen
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="mb-3 row">
                                <embed src="{{ Storage::url($item->letter_file) }}" width="500" height="375"
                                    type="application/pdf">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
