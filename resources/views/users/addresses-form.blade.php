@extends('layouts.app')
@section('content')
    <div class="container">
         <div class="row justify-content-center">
              <div class="col-md-8">
                <div class="card">
                     <div class="card-header">{{ __('Create Address') }}</div>
                     <div class="card-body">
                          <form action="{{ !empty($address) ? route('users.addresses.update', [$user->id, $address->id]) : route('users.addresses.store', $user->id) }}" method="POST" enctype="multipart/form-data">
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
                              @if(!empty($address))
                                @method('PUT')
                              @endif
                              <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" name="title" id="title" value="{{ !empty($address) ? $address->title : old('title') }}">
                                                                </div>
                                <div class="form-group">
                                  <label for="subtitle">Subtitle</label>
                                  <input type="text" class="form-control" name="subtitle" id="subtitle" value="{{ !empty($address) ? $address->subtitle : old('subtitle') }}">
                                </div>
                                <div class="form-group">
                                  <label for="name">Name</label>
                                  <input type="text" class="form-control" name="name" id="name" value="{{ !empty($address) ? $address->name : old('name') }}">
                                </div>
                                <div class="form-group">
                                  <label for="phone_number">Phone Number</label>
                                  <input type="text" class="form-control" name="phone_number" id="phone_number" value="{{ !empty($address) ? $address->phone_number : old('phone_number') }}">
                                </div>
                              <div class="form-group">
                                  <label for="detail">Alamat</label>
                                  <textarea class="form-control" name="alamat" id="alamat" rows="3">{{ !empty($address) ? $address->alamat : old('alamat') }}</textarea>
                              </div>
                                <div class="form-group">
                                  <label for="detail">Detail</label>
                                  <textarea class="form-control" name="detail" id="detail" rows="3">{{ !empty($address) ? $address->detail : old('detail') }}</textarea>
                                </div>
                                <div class="form-group">
                                  <label for="longitude">Longitude</label>
                                  <input type="text" class="form-control" name="longitude" id="longitude" value="{{ !empty($address) ? $address->longitude : old('longitude') }}">
                                </div>
                                <div class="form-group">
                                  <label for="latitude">Latitude</label>
                                  <input type="text" class="form-control" name="latitude" id="latitude" value="{{ !empty($address) ? $address->latitude : old('latitude') }}">
                                </div>
                              <div class="form-group">
                                  <label for="status">Status</label>
                                  @php
                                      $status = ['primary', 'secondary'];
                                  @endphp
                                  <div class="form-group">
                                      @foreach($status as $key => $value)
                                          <div class="form-check form-check-inline">
                                              <input class="form-check-input" type="radio" name="status" id="status{{ $key }}" value="{{ $value }}" {{ !empty($address) && $address->status == $value ? 'checked' : '' }}>
                                              <label class="form-check-label" for="status{{ $key }}">{{ @ucfirst($value) }}</label>
                                          </div>
                                      @endforeach
                                  </div>
                              </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </form>
                     </div>
                </div>
              </div>
         </div>
@endsection
