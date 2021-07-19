@extends('layout.master')

@section('title')
    Frekuensi
@endsection

@section('alamat')
    Dashboard
@endsection

@section('alamat-aktif')
    Statistik Deskriptif / Frekuensi
@endsection

@section('content')
    <div class="container">
        <div class="jumbotron jumbotron-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header text-center border-0">
                            <p class="h3">Tabel Frekuensi</p>
                        </div>
                        <div class="card-body table-responsive p-0">
                            <table class="table table-light text-center table-bordered">
                                <thead>
                                    <tr>
                                        <th>Skor</th>
                                        <th>Frekuensi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($frekuensi as $skor)

                                        <tr>
                                            <td> {{ $skor->skor }} </td>
                                            <td> {{ $skor->frekuensi }}</td>
                                        </tr>

                                    @endforeach
                                    <tr>
                                        <td scope="col"> <b>Total Frekuensi:</b> </td>
                                        <td> {{ $totalfrekuensi }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
