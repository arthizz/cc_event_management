<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BackendController extends Controller
{
    public function index()
    {
        $page_title = 'Dashboard';
        $page_description = 'Admin Dashboard Overview';

        return view('backend.dashboard', compact('page_title', 'page_description'));
    }

    public function users_page(){

        $page_title = 'Users Page';
        $page_description = 'Admin Users Page View';
        return view('backend.users-page', compact('page_title', 'page_description'));

    }

    // Datatables
    public function datatables()
    {
        $page_title = 'Datatables';
        $page_description = 'This is datatables test page';

        return view('backend.datatables', compact('page_title', 'page_description'));
    }

    // KTDatatables
    public function ktDatatables()
    {
        $page_title = 'KTDatatables';
        $page_description = 'This is KTdatatables test page';

        return view('backend.ktdatatables', compact('page_title', 'page_description'));
    }

    public function event_management(){

        $page_title = 'Event Management';
        $page_description = 'Manage Event List';

        return view('backend.event-management-page', compact('page_title', 'page_description'));

    }

    public function user_performance(){

        $page_title = 'Event Management';
        $page_description = 'Manage Event List';

        return view('backend.user-performance-page', compact('page_title', 'page_description'));

    }
}
