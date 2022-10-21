@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card">
        <div class="card header">
            <h3>FORM EDIT PORTOFOLIO</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('portofolio.update',$portofolio->id) }}" method="post"enctype=
                "multipart/form-data">
                @csrf
                @method('post')
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text"class="form-control"name="title" id="" required value="{{ $portofolio->title }}">
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file"class="form-control"name="image" id="" required value="{{ $portofolio->image }}">
                </div>
                <div class="form-group">
                    <label for="caption">Caption</label>
                    <input type="text"class="form-control"name="caption" id="" required value="{{ $portofolio->caption }}">
                </div>
                <button class="btn btn-sm btn-success" type="submit">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection