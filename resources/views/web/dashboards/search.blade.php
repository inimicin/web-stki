@extends('layouts.dashboard-app')

<x-sidebar.sidebar></x-sidebar.sidebar>

@section('content')
<div class="search">
    <div class="dashboard-body">
        <h1 class="title">Cari Jurnal</h1>
        <div class="search-item-1">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Kata Kunci" aria-label="Username" aria-describedby="addon-wrapping">
            </div>
            <select class="form-select" aria-label="Default select example">
                <option selected>Pilih Topik</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
            <button type="button" class="btn btn-primary btn-search">Cari</button>
        </div>

    </div>
    <div class="dashboard-body">
        <div class="search-item-1">
            <div class="result">
                <p>tittle</p>
                <p>author</p>
            </div>
        </div>
    </div>
</div>
@endsection