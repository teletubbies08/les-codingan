@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card">
        <div class="card header">
            <h3>FORM TAMBAH ABOUT</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('about.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="pengalaman">Pengalaman</label>
                    <input type="text"class="form-control"name="pengalaman" id="" required>
                </div>
                <div class="form-group">
                    <label for="pengalaman">Pendidikan</label>
                    <input type="text"class="form-control"name="pendidikan" id="" required>
                </div>
                <button class="btn btn-sm btn-success" type="submit">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection