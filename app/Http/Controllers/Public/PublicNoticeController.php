<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Notice;
use Illuminate\Http\Request;

class PublicNoticeController extends Controller
{
    /**
     * Fetch and display notices.
     *
     * @return \Illuminate\View\View
     */
    public function getNotice()
    {
        // Retrieve all notices from the database
        $notices = Notice::all();

        // Pass the notices to the view
        return view('public.noticeBoard', compact('notices'));
    }
}
