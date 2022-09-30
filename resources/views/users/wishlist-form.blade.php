@extends('layouts.app')
@section('content')
    <div class="container">
         <div class="row justify-content-center">
              <div class="col-md-8">
                  <div class="card">
                      <div class="card-header">{{ __('List Wishlist : '). $user->name }}</div>
                      <div class="card-body">
                          <form action="{{ route('users.wishlists.update', [$user->id, ]) }}" method="POST" enctype="multipart/form-data">
                              @csrf
                              @method('PUT')
                              <button type="submit" class="btn btn-primary mb-lg-2" style="float: right">Submit</button>
                              <table class="table table-bordered">
                                  <thead>
                                    <tr>
                                        <th width="20">No</th>
                                        <th width="100">Nama</th>
                                        <th width="*">Keterangan</th>
                                        <th width="50">Wishlist</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($products as $key => $product)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $product->name }}</td>
                                            <td>{{ $product->description }}</td>
                                            <td align="center"><input type="checkbox" name="product_id[]" value="{{ $product->id }}" {{ $user->wishlists->contains('product_id', $product->id) ? 'checked' : '' }}></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                          </form>
                     </div>
                </div>
              </div>
         </div>
@endsection
