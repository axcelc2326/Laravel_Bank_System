<?php
namespace App\Http\Controllers;
use App\Models\Record;
use Illuminate\Http\Request;

class RecordController extends Controller
{
    public function index()
    {
        $records = Record::all(); // Fetch all records
        return view('records.index', compact('records')); // Pass records to the view
    }

    public function store(Request $request)
{
    // Validate the request
    $request->validate([
        'name' => 'required|string|max:255',
        'deposit' => 'required|numeric', // Change 'diposit' to 'deposit'
        'bankName' => 'required|string|max:255',
    ]);

    // Create a new record
    Record::create([
        'name' => $request->name,
        'deposit_amount' => $request->deposit, // Change 'diposit' to 'deposit'
        'bank_name' => $request->bankName,
    ]);

    // Redirect to the records index with a success message
    return redirect()->route('records.index')->with('success', 'Record created successfully.');
}


}
