@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Tambah Transaksi') }}</div>
                    <div class="card-body">
                        <form action="{{ !empty($detail) ? route('transactions.detail.update', [$id, $detail->id]) : route('transactions.detail.store', $id) }}" method="POST" enctype="multipart/form-data">
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
                            @if(!empty($detail))
                                @method('PUT')
                            @endif
                            <div class="form-group">
                                <label for="brand_id">Brand</label>
                                <select name="brand_id" class="form-control">
                                    @foreach($brands as $brand)
                                        <option value="{{ $brand->id }}"
                                                @if(!empty($detail))
                                                    @if($detail->brand_id == $brand->id)
                                                        selected
                                            @endif
                                            @endif
                                        >{{ $brand->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="product_id">Produk</label>
                                <select name="product_id" class="form-control">
                                    @foreach($products as $product)
                                        <option value="{{ $product->id }}"
                                                @if(!empty($detail))
                                                    @if($detail->product_id == $product->id)
                                                        selected
                                            @endif
                                            @endif
                                        >{{ $product->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="stock_id">Size</label>
                                <select name="stock_id" class="form-control">
                                    @foreach($stocks as $stock)
                                        <option value="{{ $stock->id }}"
                                                @if(!empty($detail))
                                                    @if($detail->stock_id == $stock->id)
                                                        selected
                                            @endif
                                            @endif
                                        >{{ $stock->size }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Harga</label>
                                <input type="text" class="form-control" readonly value="{{ old('shipping_cost', $detail->product->price ?? '') }}">
                            </div>
                            <div class="form-group">
                                <label for="quantity">Quantity</label>
                                <input type="text" name="quantity" class="form-control" value="{{ old('quantity', $detail->quantity ?? '') }}">
                            </div>
                            <div class="form-group">
                                <label for="amount">Total Harga</label>
                                <input type="text" name="amount" class="form-control" value="{{ old('amount', $detail->product->price * $detail->quantity ?? '') }}">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection
