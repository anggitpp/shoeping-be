@extends('layouts.app')
@section('content')
    <div class="container">
         <div class="row justify-content-center">
              <div class="col-md-8">
                  <div class="card">
                      <div class="card-header">{{ __('List Wishlist : '). $user->name }}</div>
                      <div class="card-body">
                          <form action="{{ route('users.payments.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                              @csrf
                              @method('PUT')
                              <button type="submit" class="btn btn-primary mb-lg-2" style="float: right">Submit</button>
                              <table class="table table-bordered">
                                  <thead>
                                    <tr>
                                        <th width="20">No</th>
                                        <th width="*">Nama</th>
                                        <th width="100">Gambar</th>
                                        <th width="50">Metode</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($payments as $key => $payment)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $payment->name }}</td>
                                            <td><img src="{{ asset('storage/'.$payment->image) }}" alt="" width="30"></td>
                                            <td align="center"><input type="checkbox" name="payment_id[]" value="{{ $payment->id }}" {{ $user->paymentMethods->contains('payment_method_id', $payment->id) ? 'checked' : '' }}></td>
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
