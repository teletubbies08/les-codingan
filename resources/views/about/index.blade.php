@extends('layouts.app')
@section('content')
<div class="container">
    <h3>About Table</h3>
    <a href={{route('about.create') }} class="btn btn-sm btn-primary mb-2">Tambah</a>
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Pengalaman</th>
            <th scope="col">Pendidikan</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($abouts as $item )
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->pengalaman }}</td>
                <td>{{ $item->pendidikan }}</td>
                <td>    
                    <a href="{{ route('about.edit', $item->id) }}" class="btn btn-danger">edit</a>
                    <a href="{{ route('about.destroy', $item->id) }}" class="btn btn-success">delete</a>

                </td>
            </tr>
                
            @endforeach
        </tbody>
      </table>
</div>
@endsection