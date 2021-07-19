@extends('layout.master')

@section('title')
    Data Statistik
@endsection

@section('alamat')
    Dashboard
@endsection

@section('alamat-aktif')
    Statistik Deskriptif / Data Statistik
@endsection

@section('content')
    <div class="container">
        <div class="jumbotron jumbotron-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header text-center border-0">
                            <p class="h3">Tabel Statistik</p>
                        </div>
                        <div class="card-body">
                            <table class="table table-light text-center table-bordered">
                                <tbody>
                                    <tr>
                                        <td scope="col"> <b>Total Skor:</b> </td>
                                        <td> {{ $totalskor }}</td>
                                    </tr>
                                    <tr>
                                        <td scope="col"> <b>Skor Maksimal:</b> </td>
                                        <td> {{ $max }}</td>
                                    </tr>
                                    <tr>
                                        <td scope="col"> <b>Skor Minimal:</b> </td>
                                        <td> {{ $min }}</td>
                                    </tr>
                                    <td scope="col"> <b>Rata-Rata:</b> </td>
                                    <td> {{ $rata2 }}</td>
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
