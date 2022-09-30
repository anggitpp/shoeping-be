<?php

namespace App\Http\Controllers;

use App\Http\Requests\TransactionDetailRequest;
use App\Http\Requests\TransactionRequest;
use App\Models\Brand;
use App\Models\PaymentMethod;
use App\Models\Product;
use App\Models\ProductStock;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use App\Models\User;
use App\Models\UserAddress;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class TransactionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $transactions = Transaction::all();

        return view('transactions.index', compact('transactions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        $data['users'] = User::all();
        $data['addresses'] = UserAddress::all();
        $data['payment_methods'] = PaymentMethod::active()->get();

        return view('transactions.form', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param TransactionRequest $request
     * @return RedirectResponse
     */
    public function store(TransactionRequest $request)
    {
        $transaction = Transaction::create($request->all());

        return redirect()->route('transactions.edit', $transaction->id)->with('message', 'Transaksi berhasil ditambahkan');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Application|Factory|View
     */
    public function edit(int $id)
    {
        $data['transaction'] = Transaction::findOrFail($id);
        $data['users'] = User::all();
        $data['addresses'] = UserAddress::all();
        $data['payment_methods'] = PaymentMethod::active()->get();
        $data['details'] = $data['transaction']->details;

        return view('transactions.form', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param TransactionRequest $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(TransactionRequest $request, int $id)
    {
        $transaction = Transaction::findOrFail($id);
        $transaction->update($request->all());

        return redirect()->route('transactions.edit', $transaction->id)->with('message', 'Transaksi berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return RedirectResponse
     */
    public function destroy(int $id)
    {
        $transaction = Transaction::findOrFail($id);
        $transaction->details()->delete();
        $transaction->delete();

        return redirect()->route('transactions.index')->with('message', 'Transaksi berhasil dihapus');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function detailCreate(int $id)
    {
        $data['id'] = $id;
        $data['brands'] = Brand::all();
        $data['products'] = Product::all();
        $data['stocks'] = ProductStock::all();


        return view('transactions.detail-form', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param TransactionDetailRequest $request
     * @param $id
     * @return RedirectResponse
     */
    public function detailStore(TransactionDetailRequest $request, $id)
    {
        TransactionDetail::create($request->all() + ['transaction_id' => $id]);

        $details = TransactionDetail::where('transaction_id', $id)->get();
        $total_price = 0;
        $quantity = 0;
        foreach ($details as $detail) {
            $total_price += $detail->product->price * $detail->quantity;
            $quantity += $detail->quantity;
        }
        $transaction = Transaction::findOrFail($id);
        $amount = $total_price;
        $total = $amount + $transaction->shipping_cost + $transaction->tax - $transaction->discount;
        $transaction->update(
            [
                'quantity' => $quantity,
                'amount' => $amount,
                'total' => $total,
            ]
        );

        return redirect()->route('transactions.edit', $id)->with('message', 'Detail transaksi berhasil ditambahkan');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $transactionId
     * @param int $id
     * @return Application|Factory|View
     */

    public function detailEdit(int $transactionId, int $id)
    {
        $data['id'] = $transactionId;
        $data['detail'] = TransactionDetail::findOrFail($id);
        $data['brands'] = Brand::all();
        $data['products'] = Product::all();
        $data['stocks'] = ProductStock::all();

        return view('transactions.detail-form', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param TransactionDetailRequest $request
     * @param int $transactionId
     * @param int $id
     * @return RedirectResponse
     */

    public function detailUpdate(TransactionDetailRequest $request, int $transactionId, int $id)
    {
        $detail = TransactionDetail::findOrFail($id);
        $detail->update($request->all());

        $details = TransactionDetail::where('transaction_id', $transactionId)->get();
        $total_price = 0;
        $quantity = 0;
        foreach ($details as $detail) {
            $total_price += $detail->product->price * $detail->quantity;
            $quantity += $detail->quantity;
        }
        $transaction = Transaction::findOrFail($transactionId);
        $amount = $total_price;
        $total = $amount + $transaction->shipping_cost + $transaction->tax - $transaction->discount;
        $transaction->update(
            [
                'quantity' => $quantity,
                'amount' => $amount,
                'total' => $total,
            ]
        );

        return redirect()->route('transactions.edit', $transactionId)->with('message', 'Detail transaksi berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $transactionId
     * @param int $id
     * @return RedirectResponse
     */

    public function detailDestroy(int $transactionId, int $id){
        $detail = TransactionDetail::findOrFail($id);
        $detail->delete();

        $details = TransactionDetail::where('transaction_id', $transactionId)->get();
        $total_price = 0;
        $quantity = 0;
        foreach ($details as $detail) {
            $total_price += $detail->product->price * $detail->quantity;
            $quantity += $detail->quantity;
        }
        $transaction = Transaction::findOrFail($transactionId);
        $amount = $total_price;
        $total = $amount + $transaction->shipping_cost + $transaction->tax - $transaction->discount;
        $transaction->update(
            [
                'quantity' => $quantity,
                'amount' => $amount,
                'total' => $total,
            ]
        );

        return redirect()->route('transactions.edit', $transactionId)->with('message', 'Detail transaksi berhasil dihapus');
    }
}
