@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Promo List</h3>
                    </div>
                    <div class="card-body">
                        <a href="{{ route('promos.create') }}" class="btn btn-primary float-end mb-2">Tambah Data</a>
                        <table class="table table-bordered" style="margin-top: 10px;">
                            <thead>
                                <tr>
                                    <th width="20">No</th>
                                    <th width="200">Nama</th>
                                    <th width="100">Tipe</th>
                                    <th width="100">Value</th>
                                    <th width="*">Keterangan</th>
                                    <th width="30">Foto</th>
                                    <th width="160">Kontrol</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($promos as $key => $promo)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $promo->name }}</td>
                                    <td>{{ $promo->type }}</td>
                                    <td>{{ $promo->value }}</td>
                                    <td>{{ $promo->description }}</td>
                                    <td><img src="{{ asset('storage/'.$promo->image) }}" alt="" width="30"></td>
                                    <td align="center">
                                        <a href="{{ route('promos.edit', $promo->id) }}" class="btn btn-warning">Edit</a>
                                        <form action="{{ route('promos.destroy', $promo->id) }}" method="POST" class="d-inline">
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
