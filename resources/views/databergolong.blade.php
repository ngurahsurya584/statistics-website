@extends('layout.master')

@section('title')
    Data Bergolong
@endsection

@section('alamat')
    Dashboard
@endsection

@section('alamat-aktif')
    Statistik Deskriptif / Data Bergolong
@endsection

@section('content')
    <div class="jumbotron jumbotron-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="card">
                    <div class="card-header text-center border-0">
                        <p class="h3">Tabel Data Bergolong</p>
                    </div>
                    <div class="card-body">
                        <table class="table table-light text-center table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Rentangan</th>
                                    <th>Frekuensi</th>

                                </tr>
                            </thead>
                            <tbody>
                                @for ($i = 0; $i < $kelas; $i++)

                                    <tr>
                                        <th> {{ $i + 1 }} </th>
                                        <td> {{ $data[$i] }}</td>
                                        <td> {{ $frekuensi[$i] }}</td>
                                    </tr>

                                @endfor
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
