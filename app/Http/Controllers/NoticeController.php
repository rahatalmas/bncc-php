<?php

namespace App\Http\Controllers;

use App\Models\Notice;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    // Display all notices
    public function index()
    {
        $notices = Notice::orderBy('created_at', 'desc')->get();
        return view('notice', compact('notices'));
    }

    // Store a new notice
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'noticefilelink' => 'required|url',
        ]);

        Notice::create($request->only(['title', 'description', 'noticefilelink']));

        return redirect()->route('notices.index')->with('success', 'Notice added successfully!');
    }

    // Edit a notice
    public function edit($id)
    {
        $notice = Notice::findOrFail($id);
        return response()->json($notice); // Return data for modal editing
    }

    // Update a notice
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'noticefilelink' => 'required|url',
        ]);

        $notice = Notice::findOrFail($id);
        $notice->update($request->only(['title', 'description', 'noticefilelink']));

        return redirect()->route('notices.index')->with('success', 'Notice updated successfully!');
    }

    // Delete a notice
    public function destroy($id)
    {
        $notice = Notice::findOrFail($id);
        $notice->delete();

        return redirect()->route('notices.index')->with('success', 'Notice deleted successfully!');
    }
}

