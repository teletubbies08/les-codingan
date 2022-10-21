@extends('layouts.app')
@section('content')
<div class="container">
    <h3>Portofolio Table</h3>
    <a href={{route('portofolio.create') }} class="btn btn-sm btn-primary mb-2">Tambah</a>
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Title</title></th>
            <th scope="col">Image</th>
            <th scope="col">Caption</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($portofolios as $item )
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->title }}</td>
                <td><img style="width: 200px" src="{{ Storage::url($item->image) }}" alt=""></td>
                <td>{{ $item->caption }}</td>
                <td>    
                    <a href="{{ route('portofolio.edit', $item->id) }}" class="btn btn-danger">edit</a>
                    <a href="{{ route('portofolio.destroy', $item->id) }}" class="btn btn-success">delete</a>

                </td>
            </tr>
                
            @endforeach
        </tbody>
      </table>
</div>
@endsection