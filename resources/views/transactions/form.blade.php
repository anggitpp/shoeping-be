@extends('layouts.app')
@section('content')
    <div class="container">
         <div class="row justify-content-center">
              <div class="col-md-12">
                <div class="card">
                     <div class="card-header">{{ __('Tambah Transaksi') }}</div>
                     <div class="card-body">
                          <form action="{{ !empty($transaction) ? route('transactions.update', $transaction->id) : route('transactions.store') }}" method="POST" enctype="multipart/form-data">
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
                              @if(!empty($transaction))
                                @method('PUT')
                              @endif
                              <div class="form-group">
                                <label for="user_id">User</label>
                                <select name="user_id" class="form-control">
                                  @foreach($users as $user)
                                    <option value="{{ $user->id }}"
                                        @if(!empty($transaction))
                                            @if($transaction->user_id == $user->id)
                                            selected
                                            @endif
                                        @endif
                                    >{{ $user->name }}</option>
                                  @endforeach
                                </select>
                              </div>
                              <div class="form-group">
                                <label for="address_id">Alamat</label>
                                <select name="address_id" class="form-control">
                                  @foreach($addresses as $address)
                                    <option value="{{ $address->id }}"
                                        @if(!empty($transaction))
                                            @if($transaction->address_id == $address->id)
                                            selected
                                            @endif
                                        @endif
                                    >{{ $address->detail }}</option>
                                  @endforeach
                                </select>
                              </div>
                              <div class="form-group">
                                <label for="payment_method_id">Metode Pembayaran</label>
                                <select name="payment_method_id" class="form-control">
                                  @foreach($payment_methods as $payment_method)
                                    <option value="{{ $payment_method->id }}"
                                        @if(!empty($transaction))
                                            @if($transaction->payment_method_id == $payment_method->id)
                                            selected
                                            @endif
                                        @endif
                                    >{{ $payment_method->name }}</option>
                                  @endforeach
                                </select>
                              </div>
                              <div class="form-group">
                                <label for="promo_code">Kode Promo</label>
                                <input type="text" name="promo_code" class="form-control" value="{{ old('promo_code', $transaction->promo_code ?? '') }}">
                              </div>
                              <div class="form-group">
                                <label for="shipping_cost">Ongkir</label>
                                <input type="text" name="shipping_cost" class="form-control" value="{{ old('shipping_cost', $transaction->shipping_cost ?? '') }}">
                              </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </form>
                         <br/>
                         @if(!empty($transaction))
                             <a href="{{ route('transactions.detail.create', $transaction->id) }}" class="btn btn-success align-items-end">Tambah Detail Transaksi</a>
                             <table class="table table-bordered" style="margin-top: 10px;">
                                 <thead>
                                     <tr>
                                         <th width="20">No</th>
                                         <th width="100">Brand</th>
                                         <th width="*">Product</th>
                                         <th width="50">Size</th>
                                         <th width="50">Quantity</th>
                                         <th width="100">Harga</th>
                                         <th width="100">Total</th>
                                         <th width="150">Kontrol</th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                 @foreach($details as $key => $detail)
                                     <tr>
                                         <td>{{ $key+1 }}</td>
                                         <td>{{ $detail->brand->name }}</td>
                                         <td>{{ $detail->product->name }}</td>
                                         <td>{{ $detail->stock->size }}</td>
                                         <td>{{ $detail->quantity }}</td>
                                         <td>{{ $detail->product->price }}</td>
                                         <td>{{ $detail->product->price * $detail->quantity }}</td>
                                         <td align="center">
                                             <a href="{{ route('transactions.detail.edit', [$transaction->id, $detail->id]) }}" class="btn btn-warning">Edit</a>
                                             <form action="{{ route('transactions.detail.destroy', [$transaction->id, $detail->id]) }}" method="POST" class="d-inline">
                                                 @csrf
                                                 @method('DELETE')
                                                 <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                             </form>
                                         </td>
                                     </tr>
                                 @endforeach
                                 </tbody>
                             </table>
                         @endif
                     </div>
                </div>
              </div>
         </div>
@endsection
