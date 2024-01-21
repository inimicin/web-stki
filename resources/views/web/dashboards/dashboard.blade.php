@extends('layouts.dashboard-app')

<x-sidebar.sidebar></x-sidebar.sidebar>

@section('content')
<div class="dashboard">
    <div class="dashboard-body">
        <h1 class="title">Dashboard</h1>
        <div class="dashboard-item-1">
            <div class="card-chart">
                <p>Jurnal Per Prodi</p>
            </div>
            <div class="card-pie-chart">
                <p>Jurnal Per Prodi</p>
            </div>
        </div>
        <div class="dashboard-item-2">
            <div>
                <p>Program Studi</p>
            </div>
            <div class = "table-item">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Program Studi</th>
                            <th scope="col">Jumlah Record</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection