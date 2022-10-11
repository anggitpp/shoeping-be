@extends('layouts.app')
@section('content')
    <div class="container">
         <div class="row justify-content-center">
              <div class="col-md-8">
                <div class="card">
                     <div class="card-header">{{ __('Tambah Promo') }}</div>
                     <div class="card-body">
                          <form action="{{ !empty($promo) ? route('promos.update', $promo->id) : route('promos.store') }}" method="POST" enctype="multipart/form-data">
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
                              @if(!empty($promo))
                                @method('PUT')
                              @endif
                            <div class="form-group">
                                 <label for="name">Name</label>
                                 <input type="text" class="form-control" name="name" id="name" value="{{ $promo->name ?? old('name') }}" placeholder="Enter name">
                            </div>
                              <div class="form-group">
                                  <label for="name">Kode</label>
                                  <input type="text" class="form-control" name="code" id="code" value="{{ $promo->code ?? old('code') }}" placeholder="Enter Kode">
                              </div>
                            <div class="form-group ">
                                <label for="type">Type</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="type" id="type" value="percent" {{ !empty($promo) && $promo->type == 'percent' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="type">
                                        Percent
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="type" id="type" value="price" {{ !empty($promo) && $promo->type == 'price' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="type">
                                        Price
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="value">Value</label>
                                <input type="text" class="form-control" name="value" id="value" value="{{ $promo->value ?? old('value') }}" placeholder="Enter value">
                            </div>
                            <div class="form-group">
                                 <label for="description">Description</label>
                                 <textarea class="form-control" name="description" id="description" rows="3">{{ $promo->description ?? old('description') }}</textarea>
                            </div>
                              @if (!empty($promo->image))
                                <div class="form-group">
                                    <img src="{{ asset('storage/'.$promo->image) }}" alt="" width="100">
                                    @method('PUT')
                                    <a href="{{ route('brands.deleteImage', $promo->id) }}" class="btn btn-danger">Delete Image</a>
                                </div>
                                  <input type="hidden" name="image" value="{{ $promo->image }}">
                              @else
                                <div class="form-group">
                                    <label for="image">Image</label>
                                    <input type="file" accept=".png, .jpg, jpeg"  class="form-control-file" name="image" id="image">
                                </div>
                                @endif
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </form>
                     </div>
                </div>
              </div>
         </div>
@endsection
