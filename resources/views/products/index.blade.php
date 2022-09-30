@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Data Product</h3>
                    </div>
                    <div class="card-body">
                        <a href="{{ route('products.create') }}" class="btn btn-primary float-end mb-2">Tambah Data</a>
                        <table class="table table-bordered" style="margin-top: 10px;">
                            <thead>
                                <tr>
                                    <th width="20">No</th>
                                    <th width="100">Brand</th>
                                    <th width="100">Nama</th>
                                    <th width="100">Harga</th>
                                    <th width="*">Keterangan</th>
                                    <th width="30">Foto</th>
                                    <th width="30">Stock</th>
                                    <th width="160">Kontrol</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($products as $key => $product)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $product->brand->name }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td>{{ $product->description }}</td>
                                    <td><img src="{{ asset('storage/'.$product->images[0]->image) }}" alt="" width="30"></td>
                                    <td>
                                        <a href="{{ route('products.stocks', $product->id) }}" class="btn btn-primary">Stock</a>
                                    </td>
                                    <td align="center">
                                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning">Edit</a>
                                        <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="d-inline">
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
