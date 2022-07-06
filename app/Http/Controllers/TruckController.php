<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\TruckRequest;
use App\Models\Truck;
use App\Lib\Variables;

class TruckController extends Controller
{
    public function index(): View
    {
        $trucks = Truck::all();

        return view('trucks', [
            'trucks' => $trucks,
            'truckTypes' => Variables::TRUCK_TYPES,
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
            'truckTypes' => Variables::TRUCK_TYPES,
        ]);
    }

    public function update(TruckRequest $request, $truckId): RedirectResponse
    {
        $validated = $request->validated();

        $truck = Truck::findOrFail($truckId);

        $truck->update($request->except('_token'));

        //dd($truck);

        return redirect()
            ->route('trucks.show', ['truck' => $truckId])
            ->with('status', 'Dati izlaboti');
    }

    public function create(): View
    {
        return view('trucksCreate');
    }
}
