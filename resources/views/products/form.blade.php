@extends('layouts.app')
@section('content')
    <div class="container">
         <div class="row justify-content-center">
              <div class="col-md-8">
                <div class="card">
                     <div class="card-header">{{ __('Create Product') }}</div>
                     <div class="card-body">
                          <form action="{{ !empty($product) ? route('products.update', $product->id) : route('products.store') }}" method="POST" enctype="multipart/form-data">
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
                              @if(!empty($product))
                                @method('PUT')
                              @endif
                            <div class="form-group">
                                 <label for="name">Name</label>
                                 <input type="text" class="form-control" name="name" id="name" value="{{ $product->name ?? old('name') }}" placeholder="Enter name">
                            </div>
                            <div class="form-group">
                                <label for="brand_id">Brand</label>
                                <select name="brand_id" id="brand_id" class="form-control">
                                    <option value="">-- Select Brand --</option>
                                    @foreach($brands as $brand)
                                        <option value="{{ $brand->id }}" {{ !empty($product) && $product->brand_id == $brand->id ? 'selected' : '' }}>{{ $brand->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="price">Price</label>
                                <input type="text" class="form-control" name="price" id="price" value="{{ $product->price ?? old('price') }}" placeholder="Enter price">
                            </div>
                            <div class="form-group">
                                 <label for="description">Description</label>
                                 <textarea class="form-control" name="description" id="description" rows="3">{{ $product->description ?? old('description') }}</textarea>
                            </div>
                            @for($i= 1; $i<=5; $i++)
                              @if (!empty($product->images[$i-1]))
                                <div class="form-group">
                                    <img src="{{ asset('storage/'.$product->images[$i-1]->image) }}" alt="" width="100">
                                    @method('PUT')
                                    <a href="{{ route('products.deleteImage', $product->images[$i-1]->id) }}" class="btn btn-danger">Delete Image</a>
                                </div>
                                  <input type="hidden" name="image_{{ $i }}" value="{{ $product->images[$i-1]->image }}">
                              @else
                                <div class="form-group">
                                    <label for="image">Foto {{ $i == 1 ? 'Utama' : $i }}</label>
                                    <input type="file" accept=".png, .jpg, jpeg"  class="form-control-file" name="image_{{ $i }}" id="image_{{ $i }}">
                                </div>
                                @endif
                            @endfor
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </form>
                     </div>
                </div>
              </div>
         </div>
@endsection
