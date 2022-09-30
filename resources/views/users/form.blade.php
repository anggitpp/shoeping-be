@extends('layouts.app')
@section('content')
    <div class="container">
         <div class="row justify-content-center">
              <div class="col-md-8">
                <div class="card">
                     <div class="card-header">{{ __('Tambah User') }}</div>
                     <div class="card-body">
                          <form action="{{ !empty($user) ? route('users.update', $user->id) : route('users.store') }}" method="POST" enctype="multipart/form-data">
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
                              @if(!empty($user))
                                @method('PUT')
                              @endif
                            <div class="form-group">
                                 <label for="name">Name</label>
                                 <input type="text" class="form-control" name="name" id="name" value="{{ $user->name ?? old('name') }}" placeholder="Enter name">
                            </div>
                              <div class="form-group">
                                  <label for="name">Email</label>
                                  <input type="text" class="form-control" name="email" id="email" value="{{ $user->email ?? old('email') }}" placeholder="Enter email">
                              </div>
                              @if(empty($user))
                            <div class="form-group">
                                <label for="name">Password</label>
                                <input type="password" class="form-control" name="password" id="password" value="{{ $user->password ?? old('password') }}" placeholder="Enter password">
                            </div>
                            <div class="form-group">
                                <label for="name">Confirm Password</label>
                                <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" value="{{ $user->password_confirmation ?? old('password_confirmation') }}" placeholder="Enter password confirmation">
                            </div>
                              @endif
                              @if (!empty($user->photo))
                                <div class="form-group">
                                    <img src="{{ asset('storage/'.$user->photo) }}" alt="" width="100">
                                    @method('PUT')
                                    <a href="{{ route('users.deleteImage', $user->id) }}" class="btn btn-danger">Delete Image</a>
                                </div>
                                  <input type="hidden" name="photo" value="{{ $user->photo }}">
                              @else
                                <div class="form-group">
                                    <label for="photo">Photo</label>
                                    <input type="file" accept=".png, .jpg, jpeg"  class="form-control-file" name="photo" id="photo">
                                </div>
                                @endif
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </form>
                     </div>
                </div>
              </div>
         </div>
@endsection
