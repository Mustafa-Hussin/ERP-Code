<?php

namespace App\Http\Controllers;

use App\Models\Marketing;
use Illuminate\Http\Request;

class MarketingController extends Controller
{
    /**
     * Display a listing of marketing campaigns.
     */
    public function index()
    {
        $campaigns = Marketing::latest()->paginate(10);
        return view('marketings.index', compact('campaigns'));
    }

    /**
     * Show the form for creating a new marketing campaign.
     */
    public function create()
    {
        return view('marketings.create');
    }

    /**
     * Store a newly created marketing campaign in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string|max:50',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
            'budget' => 'required|numeric|min:0',
            'description' => 'nullable|string',
            'status' => 'required|string|in:draft,active,completed,cancelled'
        ]);

        Marketing::create($validated);

        return redirect()->route('marketings.index')
            ->with('success', 'Marketing campaign created successfully.');
    }

    /**
     * Display the specified marketing campaign.
     */
    public function show(Marketing $marketing)
    {
        return view('marketings.show', compact('marketing'));
    }

    /**
     * Show the form for editing the specified marketing campaign.
     */
    public function edit(Marketing $marketing)
    {
        return view('marketings.edit', compact('marketing'));
    }

    /**
     * Update the specified marketing campaign in storage.
     */
    public function update(Request $request, Marketing $marketing)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string|max:50',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
            'budget' => 'required|numeric|min:0',
            'description' => 'nullable|string',
            'status' => 'required|string|in:draft,active,completed,cancelled'
        ]);

        $marketing->update($validated);

        return redirect()->route('marketings.index')
            ->with('success', 'Marketing campaign updated successfully.');
    }

    /**
     * Remove the specified marketing campaign from storage.
     */
    public function destroy(Marketing $marketing)
    {
        $marketing->delete();

        return redirect()->route('marketings.index')
            ->with('success', 'Marketing campaign deleted successfully.');
    }
}
