<?php

namespace App\Http\Controllers;

use App\Models\Record;
use Illuminate\Http\Request;

class RecordController extends Controller
{
    // Display a listing of the records
    public function index()
    {
        $records = Record::all(); // Fetch all records
        return view('records.index', compact('records')); // Pass records to the view
    }

    // Store a newly created record in the database
    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'deposit' => 'required|numeric', // Ensure deposit is numeric
            'bankName' => 'required|string|max:255',
        ]);

        // Create a new record
        Record::create([
            'name' => $request->name,
            'deposit_amount' => $request->deposit, // Map to database column
            'bank_name' => $request->bankName,
        ]);

        // Redirect to the records index with a success message
        return redirect()->route('records.index')->with('success', 'Record created successfully.');
    }

    // Show the form for editing the specified record
    public function edit($id)
    {
        $record = Record::findOrFail($id); // Fetch record by ID or fail
        return view('records.edit', compact('record')); // Pass record to the view
    }

    // Update the specified record in the database
    public function update(Request $request, $id)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'deposit' => 'required|numeric',
            'bankName' => 'required|string|max:255',
        ]);

        // Fetch and update the record
        $record = Record::findOrFail($id);
        $record->update([
            'name' => $request->name,
            'deposit_amount' => $request->deposit,
            'bank_name' => $request->bankName,
        ]);

        // Redirect to the records index with a success message
        return redirect()->route('records.index')->with('success', 'Record updated successfully.');
    }

    // Remove the specified record from the database
    public function destroy($id)
    {
        $record = Record::findOrFail($id); // Fetch record by ID or fail
        $record->delete(); // Delete the record

        // Redirect to the records index with a success message
        return redirect()->route('records.index')->with('success', 'Record deleted successfully.');
    }
}
