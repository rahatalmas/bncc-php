<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class MemberController extends Controller
{
    // Display all members
    public function index()
    {
        // Fetch all members
        $members = Member::all();

        // Calculate the rank counts
        $rankCounts = Member::select('rank', DB::raw('count(*) as count'))
                             ->groupBy('rank')
                             ->get()
                             ->pluck('count', 'rank');

        // Pass members and rank counts to the view
        return view('members', compact('members', 'rankCounts'));
    }

    // Store a newly added member
    public function store(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'name' => 'required|string|max:255',
            'rank' => 'required|string|max:255',
            'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validate picture field
        ]);

        // Handle the image upload if a picture is provided
        $imagePath = null;
        if ($request->hasFile('picture')) {
            $imagePath = $request->file('picture')->storeAs(
                'members', time() . '-' . $request->file('picture')->getClientOriginalName(), 'public'
            );
        }

        // Create the member in the database
        Member::create([
            'name' => $request->name,
            'rank' => $request->rank,
            'picture' => $imagePath, // Save the image path in the database
        ]);

        // Redirect back with success message
        return redirect()->route('members.index')->with('success', 'Member added successfully!');
    }

    // Show the edit form for a member
    public function edit($id)
    {
        $member = Member::findOrFail($id);
        return view('memberedit', compact('member'));
    }

    // Update a member
    public function update(Request $request, $id)
    {
        // Validate the incoming request
        $request->validate([
            'name' => 'required|string|max:255',
            'rank' => 'required|string|max:255',
            'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validate picture field
        ]);

        // Find and update the member
        $member = Member::findOrFail($id);

        // Handle the image upload if a new picture is provided
        if ($request->hasFile('picture')) {
            // Delete old picture if exists
            if ($member->picture && Storage::disk('public')->exists($member->picture)) {
                Storage::disk('public')->delete($member->picture);
            }

            // Store the new picture
            $imagePath = $request->file('picture')->storeAs(
                'members', time() . '-' . $request->file('picture')->getClientOriginalName(), 'public'
            );
        } else {
            $imagePath = $member->picture; // Keep the old image if no new image is uploaded
        }

        // Update the member
        $member->update([
            'name' => $request->name,
            'rank' => $request->rank,
            'picture' => $imagePath, // Update the image path
        ]);

        // Redirect back with success message
        return redirect()->route('members.index')->with('success', 'Member updated successfully!');
    }

    // Delete a member
    public function destroy($id)
    {
        $member = Member::findOrFail($id);

        // Delete the picture from storage
        if ($member->picture && Storage::disk('public')->exists($member->picture)) {
            Storage::disk('public')->delete($member->picture);
        }

        // Delete the member from the database
        $member->delete();

        // Redirect back with success message
        return redirect()->route('members.index')->with('success', 'Member deleted successfully!');
    }
}
