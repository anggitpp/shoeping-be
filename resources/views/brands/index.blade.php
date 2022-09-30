@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Brand List</h3>
                    </div>
                    <div class="card-body">
                        <a href="{{ route('brands.create') }}" class="btn btn-primary float-end mb-2">Tambah Data</a>
                        <table class="table table-bordered" style="margin-top: 10px;">
                            <thead>
                                <tr>
                                    <th width="20">No</th>
                                    <th width="100">Nama</th>
                                    <th width="*">Keterangan</th>
                                    <th width="30">Foto</th>
                                    <th width="160">Kontrol</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($brands as $key => $brand)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $brand->name }}</td>
                                    <td>{{ $brand->description }}</td>
                                    <td><img src="{{ asset('storage/'.$brand->image) }}" alt="" width="30"></td>
                                    <td align="center">
                                        <a href="{{ route('brands.edit', $brand->id) }}" class="btn btn-warning">Edit</a>
                                        <form action="{{ route('brands.destroy', $brand->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

@endsection
