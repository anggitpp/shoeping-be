@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>User List</h3>
                    </div>
                    <div class="card-body">
                        @if(session()->has('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                        @endif
                        <a href="{{ route('users.create') }}" class="btn btn-primary float-end mb-2">Tambah Data</a>
                        <table class="table table-bordered" style="margin-top: 10px;">
                            <thead>
                                <tr>
                                    <th width="20">No</th>
                                    <th width="*">Nama</th>
                                    <th width="100">Email</th>
                                    <th width="30">Wishlist</th>
                                    <th width="30">Alamat</th>
                                    <th width="30">Payment</th>
                                    <th width="30">Foto</th>
                                    <th width="160">Kontrol</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $key => $user)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td align="center"><a href="{{ route('users.wishlists.index', $user->id) }}">{{ $user->wishlists_count }}</a></td>
                                    <td align="center"><a href="{{ route('users.addresses.index', $user->id) }}">{{ $user->addresses_count }}</a></td>
                                    <td align="center"><a href="{{ route('users.payments.index', $user->id) }}">{{ $user->payment_methods_count }}</a></td>
                                    <td><img src="{{ asset('storage/'.$user->photo) }}" alt="" width="30"></td>
                                    <td align="center">
                                        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning">Edit</a>
                                        <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="d-inline">
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
