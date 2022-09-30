<?php

namespace App\Http\Controllers;

use App\Http\Requests\PromoRequest;
use App\Models\Promo;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class PromoController extends Controller
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
        $promos = Promo::all();

        return view('promos.index', compact('promos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('promos.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param PromoRequest $request
     * @return RedirectResponse
     */
    public function store(PromoRequest $request)
    {
        $promo = Promo::create($request->all());

        if ($request->hasFile('image')) {
            $promo->image = $request->file('image')->store('images/promos', 'public');
            $promo->save();
        }

        session()->flash('message', 'Promo berhasil ditambahkan');

        return redirect()->route('promos.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Application|Factory|View
     */
    public function edit(int $id)
    {
        $promo = Promo::findOrFail($id);

        return view('promos.form', compact('promo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param PromoRequest $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(PromoRequest $request, int $id)
    {
        $promo = Promo::findOrFail($id);

        $promo->update($request->all());

        if ($request->hasFile('image')) {
            $promo->image = $request->file('image')->store('images/promos', 'public');
            $promo->save();
        }

        session()->flash('message', 'Promo berhasil diubah');

        return redirect()->route('promos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return RedirectResponse
     */
    public function destroy(int $id)
    {
        $promo = Promo::findOrFail($id);

        $promo->delete();

        if ($promo->image) {
            Storage::disk('public')->delete($promo->image);
        }

        session()->flash('message', 'Promo berhasil dihapus');

        return redirect()->route('promos.index');
    }
}
