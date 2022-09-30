@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Payment Method</h3>
                    </div>
                    <div class="card-body">
                        @if(session()->has('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                        @endif
                        <a href="{{ route('payment-methods.create') }}" class="btn btn-primary float-end mb-2">Tambah Data</a>
                        <table class="table table-bordered" style="margin-top: 10px;">
                            <thead>
                                <tr>
                                    <th width="20">No</th>
                                    <th width="*">Nama</th>
                                    <th width="30">Foto</th>
                                    <th width="50">Status</th>
                                    <th width="160">Kontrol</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($payments as $key => $payment)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $payment->name }}</td>
                                    <td><img src="{{ asset('storage/'.$payment->image) }}" alt="" width="30"></td>
                                    <td style="vertical-align: middle;" align="center"><div style="width: 20px; height :20px; border-radius: 100%; background-color: {{ $payment->status == 't' ? 'green' : 'red' }}"></div> </td>
                                    <td align="center">
                                        <a href="{{ route('payment-methods.edit', $payment->id) }}" class="btn btn-warning">Edit</a>
                                        <form action="{{ route('payment-methods.destroy', $payment->id) }}" method="POST" class="d-inline">
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
