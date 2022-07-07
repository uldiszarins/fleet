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

        $truck = new Truck();

        $truck->truck_type = $request->truck_type;
        $truck->truck_number = $request->truck_number;
        $truck->truck_make = $request->truck_make;
        $truck->truck_model = $request->truck_model;
        $truck->truck_year = $request->truck_year;
        $truck->truck_vin_number = $request->truck_vin_number;
        $truck->truck_technical_inspection_date = $request->truck_technical_inspection_date;

        $truck->save();

        return redirect()->route('trucks.index')->with('status', 'Dati pievienoti!');
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
        return view('trucksCreate', [
            'truckTypes' => Variables::TRUCK_TYPES,
        ]);
    }
}
