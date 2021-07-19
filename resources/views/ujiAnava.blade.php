@extends('layout.master')

@section('title')
    Uji Anava
@endsection

@section('alamat')
    Dashboard
@endsection

@section('alamat-aktif')
    Statistik Deskriptif / Uji Anava
@endsection

@section('content')
    <div class="container">
        <div class="jumbotron jumbotron-fluid mt-5">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="d-flex justify-content-end">
                        <a href="/exportAnava" class="btn btn-danger mt-2 mb-2 mr-3">
                            Export
                        </a>
                        <a href="#" class="btn btn-success mt-2 mb-2" data-toggle="modal" data-target="#ujitberkolerasi">
                            Import Uji Anava
                        </a>
                        <!-- Modal -->
                        <div class="modal fade" id="ujitberkolerasi" tabindex="-1" role="dialog"
                            aria-labelledby="ujitberkolerasi" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Import File Uji Anava</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="/importAnava" method="POST" enctype="multipart/form-data">
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
                    <div class="card ">
                        <div class="card-header text-center border-0 ">
                            <p class="h3">Masukkan Data</p>
                        </div>
                        <div class="card-body">
                            <form method="post" action="/ujiAnava" id="forminput"> {{-- setelah di submit, form akan mengarah ke route home --}}
                                <div class="form-group">
                                    <label for="input1">Input X1</label>
                                    <input required type="text" class="form-control mb-2" placeholder="Masukkan Nilai X1"
                                        name="x1" value="{{ old('x1') }}">
                                    <label for="input2">Input X2</label>
                                    <input required type="text" class="form-control mb-2" placeholder="Masukkan Nilai X2"
                                        name="x2" value="{{ old('x2') }}">
                                    <label for="input3">Input X3</label>
                                    <input required type="text" class="form-control mb-2" placeholder="Masukkan Nilai X3"
                                        name="x3" value="{{ old('x3') }}">
                                    <label for="input4">Input X4</label>
                                    <input required type="text" class="form-control mb-2" placeholder="Masukkan Nilai X4"
                                        name="x4" value="{{ old('x4') }}">


                                    @if ($errors->has('x1'))
                                        <div class="alert alert-danger">{{ $errors->first('x1') }}</div>
                                    @endif

                                    @if ($errors->has('x2'))
                                        <div class="alert alert-danger">{{ $errors->first('x2') }}</div>
                                    @endif

                                    @if ($errors->has('x3'))
                                        <div class="alert alert-danger">{{ $errors->first('x3') }}</div>
                                    @endif

                                    @if ($errors->has('x4'))
                                        <div class="alert alert-danger">{{ $errors->first('x4') }}</div>
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
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-11">
                    <div class="card">
                        <div class="card-header text-center border-0 ">
                            <p class="h3">Uji Anava</p>
                        </div>
                        <div class="card-body">
                            <table class="table table-light text-center table-bordered">
                                <thead class="text-center">
                                    <tr>
                                        <th class="w-25">No</th>
                                        <th>X1</th>
                                        <th>X2</th>
                                        <th>X3</th>
                                        <th>X4</th>
                                        <th>X1^2</th>
                                        <th>X2^2</th>
                                        <th>X3^2</th>
                                        <th>X4^2</th>
                                        <th>Xt</th>
                                        <th>Xt^2</th>
                                        <th> Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    @for ($i = 0; $i < $jumlahData; $i++)
                                        <tr>
                                        <tr>
                                            <th>{{ $i + 1 }}</th>
                                            <td>{{ $ujiAnava[$i]->x1 }}</td>
                                            <td>{{ $ujiAnava[$i]->x2 }}</td>
                                            <td>{{ $ujiAnava[$i]->x3 }}</td>
                                            <td>{{ $ujiAnava[$i]->x4 }}</td>
                                            <td>{{ $x1kuadrat[$i] }}</td>
                                            <td>{{ $x2kuadrat[$i] }}</td>
                                            <td>{{ $x3kuadrat[$i] }}</td>
                                            <td>{{ $x4kuadrat[$i] }}</td>
                                            <td>{{ $xtotal[$i] }}</td>
                                            <td>{{ $xtotalkuadrat[$i] }}</td>
                                            <td>
                                                <form name="delete" action="/hapusAnava/{{ $ujiAnava[$i]->id }}"
                                                    method="POST">
                                                    {{-- setelah klik hapus, form akan mengarah ke route delete --}}
                                                    @csrf {{-- csrf token untuk tombol hapus --}}
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-outline-danger"><img
                                                            src="{{ asset('template_admin/') }}/img/delete.png"
                                                            alt=""></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endfor
                                </tbody>
                                <tr class="text-center">
                                    <th> Sigma: </th>
                                    <th> {{ $sumX1 }} </th>
                                    <th> {{ $sumX2 }}</th>
                                    <th> {{ $sumX3 }}</th>
                                    <th> {{ $sumX4 }}</th>
                                    <th>{{ $sigmaX1kuadrat }}</th>
                                    <th>{{ $sigmaX2kuadrat }}</t>
                                    <th>{{ $sigmaX3kuadrat }}</th>
                                    <th>{{ $sigmaX4kuadrat }}</th>
                                    <th>{{ $sumxtotal }}</th>
                                    <th>{{ $sumxtotalkuadrat }}</th>
                                </tr>
                                <tr class="text-center">
                                    <th> Rata-Rata: </th>
                                    <th>{{ $avgX1 }}</th>
                                    <th>{{ $avgX2 }}</th>
                                    <th>{{ $avgX3 }}</th>
                                    <th>{{ $avgX4 }}</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-11">
                    <div class="card">
                        <div class="card-header border-0">
                            <p class="h3">Tabel Uji Anava</p>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead class="text-center">
                                    <tr>
                                        <th>Sumber Variasi</th>
                                        <th>JK</th>
                                        <th>DK</th>
                                        <th>RJK</th>
                                        <th>FHitung</th>
                                        <th>Ftabel (5%)</th>
                                        <th>Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    <tr>
                                        <th>Antar :</th>
                                        <td>{{ number_format($JKA, 2) }}</td>
                                        <td>{{ number_format($DKA, 2) }}</td>
                                        <td>{{ number_format($RJKA, 2) }}</td>
                                        <td>{{ number_format($F, 2) }}</td>
                                        <td> {{ $fTabel }} </td>
                                        <td> {{ $status }}</td>
                                    </tr>
                                </tbody>
                                <tr class="text-center">
                                    <th>Dalam :</th>
                                    <td>{{ number_format($jkd, 2) }}</td>
                                    <td>{{ number_format($dkd, 2) }}</td>
                                    <td>{{ number_format($rjkd, 2) }}</td>
                                    <td> - </td>
                                    <td> - </td>
                                    <td></td>
                                </tr>
                                <tr class="text-center">
                                    <th>Total :</th>
                                    <td>{{ number_format($jkt, 2) }}</td>
                                    <td>{{ number_format($dkt, 2) }}</td>
                                    <td> - </td>
                                    <td> - </td>
                                    <td> - </td>
                                    <td></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
