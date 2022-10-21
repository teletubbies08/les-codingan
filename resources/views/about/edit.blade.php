@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card">
        <div class="card header">
            <h3>FORM EDIT ABOUT</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('about.update',$about->id) }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="pengalaman">Pengalaman</label>
                    <input type="text"class="form-control"name="pengalaman" value="{{ $about->pengalaman }}" required>
                </div>
                <div class="form-group">
                    <label for="pengalaman">Pendidikan</label>
                    <input type="text"class="form-control"name="pendidikan" value="{{ $about->pendidikan }}" required>
                </div>
                <button class="btn btn-sm btn-success" type="submit">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection