@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>User Address</h3>
                    </div>
                    <div class="card-body">
                        @if(session()->has('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                        @endif
                        <a href="{{ route('users.addresses.create', $user->id) }}" class="btn btn-primary">Tambah Alamat</a>
                        <table class="table table-bordered" style="margin-top: 10px;">
                            <thead>
                            <tr>
                                <th width="20">No</th>
                                <th width="200">Judul</th>
                                <th width="100">Sub Judul</th>
                                <th width="100">Penerima</th>
                                <th width="100">No. HP</th>
                                <th width="*">Alamat</th>
                                <th width="200">Lot, Lang</th>
                                <th width="50">Status</th>
                                <th width="130">Kontrol</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($addresses as $key => $address)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $address->title }}</td>
                                    <td>{{ $address->subtitle }}</td>
                                    <td>{{ $address->name }}</td>
                                    <td>{{ $address->phone_number }}</td>
                                    <td>{{ $address->address }}</td>
                                    <td>{{ $address->longitude }}, {{ $address->latitude }}</td>
                                    <td>{{ ucwords($address->status) }}</td>
                                    <td align="center">
                                        <a href="{{ route('users.addresses.edit', [$user->id, $address->id]) }}" class="btn btn-sm btn-warning">Edit</a>
                                        <form action="{{ route('users.addresses.destroy', [$user->id, $address->id]) }}" method="post" style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
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
