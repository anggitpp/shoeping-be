@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Tambah Stok') }}</div>
                    <div class="card-body">
                        <form action="{{ !empty($stock) ? route('products.stocks.update', $stock->id) : route('products.stocks.store', $id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            @if(session()->has('message'))
                                <div class="alert alert-success">
                                    {{ session('message') }}
                                </div>
                            @endif
                            @if(!empty($stock))
                                @method('PUT')
                            @endif
                            <div class="form-group">
                                <label for="size">Ukuran</label>
                                <input type="text" class="form-control" name="size" id="size" value="{{ $stock->size ?? old('size') }}" placeholder="Enter size" max="5">
                            </div>
                            <div class="form-group">
                                <label for="stock">Stok</label>
                                <input type="text" class="form-control" name="stock" id="stock" value="{{ $stock->stock ?? old('stock') }}" maxlength="3" placeholder="Enter quantity">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection
