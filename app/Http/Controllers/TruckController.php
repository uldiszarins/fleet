<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\TruckRequest;
use App\Models\Truck;

class TruckController extends Controller
{
    public function index(): View
    {
        $trucks = Truck::all();

        return view('trucks', [
            'trucks' => $trucks
        ]);
    }

    public function store(TruckRequest $request): RedirectResponse
    {
        $request->validated();

        $bank = new Bank();

        $bank->b_nos = $request->b_nos;
        $bank->b_kods = $request->b_kods;
        $bank->b_no = $request->b_no;
        $bank->b_lidz = $request->b_lidz;

        $bank->save();

        return redirect()->route('banks.index')->with('status', 'Dati pievienoti!');
    }

    public function show(int $truckId): View
    {
        return view('trucksEdit', [
            'truckId' => $truckId,
            'truck' => Truck::findOrFail($truckId),
        ]);
    }

    public function update(BankRequest $request, $bankId): RedirectResponse
    {
        $validated = $request->validated();

        $banka = Bank::findOrFail($bankId);

        $banka->update($request->except('_token'));

        return redirect()
            ->route('banks.show', ['bank' => $bankId])
            ->with('status', 'Dati izlaboti');
    }

    public function create(): View
    {
        return view('classifiers::ClassifiersBanksCreate');
    }
}
