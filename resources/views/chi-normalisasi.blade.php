@extends('layout.master')

@section('title')
    Chi-Kuadrat
@endsection

@section('alamat')
    Dashboard
@endsection

@section('alamat-aktif')
    Statistik Deskriptif / Chi-Kuadrat
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="jumbotron jumbotron-fluid">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header text-center border-0">
                        <p class="h3">Chi Kuadrat</p>
                    </div>
                    <div class="card-body">
                        <table class="table table-light text-center table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Rentangan</th>
                                    <th>f0</th>
                                    <th>Batas Bawah Kelas</th>
                                    <th>Batas Atas Kelas</th>
                                    <th>Batas Bawah Z</th>
                                    <th>Batas Atas Z</th>
                                    <th>Z Tabel Bawah</th>
                                    <th>Z Tabel Atas</th>
                                    <th>L/Proporsi</th>
                                    <th>L*N (fe)</th>
                                    <th>(f0-fe)^2/fe</th>

                                </tr>
                            </thead>
                            <tbody>
                                @for ($i = 0; $i < $kelas; $i++)

                                    <tr>
                                        <th> {{ $i + 1 }} </th>
                                        <td> {{ $data[$i] }}</td>
                                        <td> {{ $frekuensi[$i] }}</td>
                                        <td> {{ $batasBawahBaru[$i] }}</td>
                                        <td> {{ $batasAtasBaru[$i] }}</td>
                                        <td> {{ $zBawah[$i] }}</td>
                                        <td> {{ $zAtas[$i] }}</td>
                                        <td> {{ $zTabelBawahFix[$i] }}</td>
                                        <td> {{ $zTabelAtasFix[$i] }}</td>
                                        <td> {{ $lprop[$i] }}</td>
                                        <td> {{ $fe[$i] }}</td>
                                        <td> {{ $kai[$i] }}</td>
                                    </tr>

                                @endfor
                                <tr>
                                    <th> Total: </th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th>{{ $totalchi }}</th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
