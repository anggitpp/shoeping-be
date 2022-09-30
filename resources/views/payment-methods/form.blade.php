@extends('layouts.app')
@section('content')
    <div class="container">
         <div class="row justify-content-center">
              <div class="col-md-8">
                <div class="card">
                     <div class="card-header">{{ __('Tambah Payment Method') }}</div>
                     <div class="card-body">
                          <form action="{{ !empty($payment) ? route('payment-methods.update', $payment->id) : route('payment-methods.store') }}" method="POST" enctype="multipart/form-data">
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
                              @if(session()->has('success'))
                                  <div class="alert alert-success">
                                      {{ session('success') }}
                                  </div>
                              @endif
                              @if(!empty($payment))
                                @method('PUT')
                              @endif
                            <div class="form-group">
                                 <label for="name">Name</label>
                                 <input type="text" class="form-control" name="name" id="name" value="{{ $payment->name ?? old('name') }}" placeholder="Enter name">
                            </div>
                            <div class="form-group">
                             <label for="status">Status</label>
                             <div class="form-check">
                                  <input class="form-check-input" type="radio" name="status" id="status" value="t" {{ !empty($payment) && $payment->status == 't' ? 'checked' : '' }}>
                                  <label class="form-check-label" for="status">Active</label>
                             </div>
                             <div class="form-check">
                                  <input class="form-check-input" type="radio" name="status" id="status" value="f" {{ !empty($payment) && $payment->status == 'f' ? 'checked' : '' }}>
                                  <label class="form-check-label" for="status">Non Active</label>
                             </div>
                            </div>
                              @if (!empty($payment->image))
                                <div class="form-group">
                                    <img src="{{ asset('storage/'.$payment->image) }}" alt="" width="100">
                                    @method('PUT')
                                    <a href="{{ route('payment-methods.deleteImage', $payment->id) }}" class="btn btn-danger">Delete Image</a>
                                </div>
                                  <input type="hidden" name="image" value="{{ $payment->image }}">
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
