@extends('layout.master')

@section('title')
    Uji T Berkolerasi
@endsection

@section('alamat')
    Dashboard
@endsection

@section('alamat-aktif')
    Statistik Deskriptif / Uji T Berkolerasi
@endsection

@section('content')
    <div class="container">
        <div class="jumbotron jumbotron-fluid mt-5">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="d-flex justify-content-end">
                        <a href="/exportujiT" class="btn btn-danger mt-2 mb-2 mr-3">
                            Export
                        </a>
                        <a href="#" class="btn btn-success mt-2 mb-2" data-toggle="modal" data-target="#ujitberkolerasi">
                            Import Uji T Sampel Berkolerasi
                        </a>
                        <!-- Modal -->
                        <div class="modal fade" id="ujitberkolerasi" tabindex="-1" role="dialog"
                            aria-labelledby="ujitberkolerasi" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Import File Uji T Berkolerasi</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="/ujiTBerkolerasiImport" method="POST" enctype="multipart/form-data">
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <input type="file" name="file" required>
                                                <p class="mt-1"> <i>File yang disupport: .xlxs</i> </p>
                                            </div>

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Tutup</button>
                                                <button type="submit" class="btn btn-primary">Import</button>
                                                @csrf

                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card text">
                        <div class="card-header text-center border-0 ">
                            <p class="h3">Masukkan Data</p>
                        </div>
                        <div class="card-body">
                            <form method="post" action="/ujiTBerkolerasi" id="forminput"> {{-- setelah di submit, form akan mengarah ke route home --}}
                                <div class="form-group">
                                    <label for="input2">Input X1</label>
                                    <input required type="text" class="form-control mb-2" placeholder="Masukkan Nilai X1"
                                        name="x1" value="{{ old('x1') }}">
                                    <label for="input2">Input X2</label>
                                    <input required type="text" class="form-control mb-2" placeholder="Masukkan Nilai X2"
                                        name="x2" value="{{ old('x2') }}">


                                    @if ($errors->has('x1'))
                                        <div class="alert alert-danger">{{ $errors->first('x1') }}</div>
                                    @endif

                                    @if ($errors->has('x2'))
                                        <div class="alert alert-danger">{{ $errors->first('x2') }}</div>
                                    @endif


                                </div>
                                <input type="submit" class="btn btn-primary daftar-btn mt-4" name="submit" value="Input">
                                {{-- tombol submit --}}

                                @csrf

                                @if (session('status'))
                                    <p></p>
                                    <div class="alert alert-success">
                                        {{ session('status') }}
                                    </div>
                                @endif

                            </form>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header text-center border-0 ">
                            <p class="h3">Uji-T Sampel Berkolerasi</p>
                        </div>
                        <div class="card-body">
                            <table class="table table-light text-center table-bordered">
                                <thead class="text-center">
                                    <tr>
                                        <th class="w-25">No</th>
                                        <th>X1</th>
                                        <th>X2</th>
                                        <th> Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    @foreach ($ujiT as $t)

                                        <tr>
                                            <th>{{ $loop->iteration }}</th>
                                            <td>{{ $t->x1 }}</td>
                                            <td>{{ $t->x2 }}</td>
                                            <td>
                                                <form name="delete" action="/hapus/{{ $t->id }}" method="POST">
                                                    {{-- setelah klik hapus, form akan mengarah ke route delete --}}
                                                    @csrf {{-- csrf token untuk tombol hapus --}}
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-outline-danger"><img
                                                            src="{{ asset('template_admin/') }}/img/delete.png"
                                                            alt=""></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tr class="text-center">
                                    <th> Rata-Rata: </th>
                                    <th>{{ number_format($rata2x1, 2) }}</th>
                                    <th>{{ number_format($rata2x2, 2) }}</th>
                                </tr>
                                <tr class="text-center">
                                    <th>Varians:</th>
                                    <th>{{ number_format($variansX1, 2) }}</th>
                                    <th>{{ number_format($variansX2, 2) }}</th>
                                </tr>
                                <tr class="text-center">
                                    <th>Standar Deviasi:</th>
                                    <th>{{ $sdX1 }}</th>
                                    <th>{{ $sdX2 }}</th>
                                </tr>
                                <tr class="text-center">
                                    <th>T Hitung: </th>
                                    <th> {{ $nilaiUjiT }}</th>
                                </tr>
                                <tr class="text-center">
                                    <th>T Tabel: </th>
                                    <th> {{ $TTabel }}</th>
                                </tr>
                                <tr class="text-center">
                                    <th>Status H0: </th>
                                    <th> {{ $status }}</th>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
