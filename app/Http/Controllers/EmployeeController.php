<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\EmployeeRequest;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index(): View
    {
        $employees = Employee::all();

        return view('employees', [
            'employees' => $employees,
        ]);
    }

    public function store(EmployeeRequest $request): RedirectResponse
    {
        $request->validated();

        $employee = new Employee();

        $employee->empl_name = $request->empl_name;
        $employee->empl_surname = $request->empl_surname;
        $employee->empl_phone = $request->empl_phone;
        $employee->empl_address = $request->empl_address;

        $employee->save();

        return redirect()->route('employees.index')->with('status', 'Dati pievienoti!');
    }

    public function show(int $employeeId): View
    {
        return view('employeesEdit', [
            'employeeId' => $employeeId,
            'employee' => Employee::findOrFail($employeeId),
        ]);
    }

    public function update(EmployeeRequest $request, $employeeId): RedirectResponse
    {
        $validated = $request->validated();

        $truck = Employee::findOrFail($employeeId);

        $truck->update($request->except('_token'));

        return redirect()
            ->route('employees.show', ['employee' => $employeeId])
            ->with('status', 'Dati izlaboti');
    }

    public function create(): View
    {
        return view('employeesCreate');
    }
}
