<?php

namespace App\Http\Controllers;

use App\Models\Allocate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AllocateController extends Controller
{
    // Display the list of allocations (lockers assigned)
    public function index()
    {
        // Retrieve all allocated lockers
        $allocations = Allocate::all();

        // Return the 'allocate' view and pass the allocations data
        return view('allocate', compact('allocations')); // Corrected to just 'allocate'
    }

    // Show the form to create a new allocation
    public function create()
    {
        return view('allocate.create'); // Assuming the form is in 'resources/views/allocate/create.blade.php'
    }

    // Store a new allocation in the database
    public function store(Request $request)
    {
        // Validate the input
        $validator = Validator::make($request->all(), [
            'locker_number' => 'required|unique:allocates',
            'student_id' => 'required|string',
            'last_name' => 'required|string',
            'first_name' => 'required|string',
            'program' => 'required|string',
            'year_set' => 'required|string',
            'date_rented' => 'required|date',
            'date_ended' => 'required|date',
            'email' => 'required|email|max:30',
            'payment' => 'required|numeric|min:0',
        ]);

        if ($validator->fails()) {
            return redirect()->route('allocate.create')
                             ->withErrors($validator)
                             ->withInput();
        }

        // Create a new allocation record
        Allocate::create($request->all());

        return redirect()->route('allocate.index')->with('success', 'Locker allocated successfully.');
    }

    // Show the form to edit an existing allocation
    public function edit($id)
    {
        $allocation = Allocate::findOrFail($id);
        return view('allocate.edit', compact('allocation'));
    }

    // Update an existing allocation
    public function update(Request $request, $id)
    {
        $allocation = Allocate::findOrFail($id);

        // Validate the input
        $validator = Validator::make($request->all(), [
            'locker_number' => 'required|unique:allocates,locker_number,' . $allocation->id,
            'student_id' => 'required|string',
            'last_name' => 'required|string',
            'first_name' => 'required|string',
            'program' => 'required|string',
            'year_set' => 'required|string',
            'date_rented' => 'required|date',
            'date_ended' => 'required|date',
            'email' => 'required|email|max:30',
            'payment' => 'required|numeric|min:0',
        ]);

        if ($validator->fails()) {
            return redirect()->route('allocate.edit', $allocation->id)
                             ->withErrors($validator)
                             ->withInput();
        }

        // Update the allocation record
        $allocation->update($request->all());

        return redirect()->route('allocate.index')->with('success', 'Locker allocation updated successfully.');
    }

    // Soft delete an allocation
    public function destroy($id)
    {
        $allocation = Allocate::findOrFail($id);
        $allocation->delete(); // Soft delete the allocation

        return redirect()->route('allocate.index')->with('success', 'Locker allocation deleted successfully.');
    }
}
